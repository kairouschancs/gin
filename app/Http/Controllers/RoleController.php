<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roles\Role;
use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		// Role Tableの一覧を取得<-ページネーション追加に伴いコメントアウト
		//$roles = Role::all();

        // ページネーション
        $roles = Role::paginate(10);

		return view(
            'roles.index',
            ['roles' => $roles]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //if (auth()->user()->role == 91){
        return view('roles.create');
        //$roles = new role();
        //$roles = ['role' => $roles];
        //return view('roles.create', $roles);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $role = new role;
    
        // fillを使用する場合は、必ずモデルのfillableを指定する
        $role->fill($request->all())->save();
    
        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('roles.index')->with('message', '登録しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
    
        return view('roles.edit', [
            'roles' => $role
        ]);

        //$roles = ['roles' => $roles];
        //return view('roles.edit', $roles);
    }

    /**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function update(RoleRequest $request, $id)
    {
        $roles = Role::find($id);
        $roles->fill($request->all())->save();
    
        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('roles.index')->with('message', '編集しました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Role::where('id', $id)->delete();
        // 完了メッセージを表示
        return redirect()->route('roles.index')->with('message', '削除しました');
    }
}
