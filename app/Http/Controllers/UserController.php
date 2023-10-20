<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles\Role;
use App\Http\Requests\UserRequest;
use DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->role = new Role();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('role')->get();

        // ページネーション
        $users = User::paginate(10);

        return view(
            'users.index',
            ['users' => $users]
        );
    }

    /**
     * Show the form for creating a new resource.
     * 登録画面
     * @return \Illuminate\Http\Response
     */
    //public function create(Request $request)
    public function create()
    {
        //return view('users.create');

        $roles = $this->role->get();
        return view('users.create', compact('roles'));
        /*$roles = $this->role->get();
        return view('users.create', compact('roles'));*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new user;
    
        // fillを使用する場合は、必ずモデルのfillableを指定する
        $user->fill($request->all())->save();
    
        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('users.index')->with('message', '登録しました');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = $this->role->get();
        return view('users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $users = User::find($id);
        $users->fill($request->all())->save();
    
        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('users.index')->with('message', '編集しました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        // 完了メッセージを表示
        return redirect()->route('users.index')->with('message', '削除しました');
    }
}
