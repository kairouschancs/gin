<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles\Role;
use App\Http\Requests\UserRequest;
use DB;

class EmployeeController extends Controller
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
        $employees = User::whereHas('Role', function($employees){
            $employees->where('role_id','>=', 2)->where('role_id','<=', 19);
        })->get();

        // ページネーション
        //$employees = Employee::paginate(10);

        return view('employees.em_index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     * 登録画面
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->role->get();
        return view('employees.em_create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new user;
    
        // fillを使用する場合は、必ずモデルのfillableを指定する
        $employee->fill($request->all())->save();
    
        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('employees.index')->with('message', '登録しました');
    }

    /**
     * Display the specified resource.
     */
    /*public function show(string $id)
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
    public function edit(string $id)
    {
        $employee = User::find($id);
        $roles = $this->role->get();
        return view('employees.em_edit', compact('employee','roles'));
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
        $employees = User::find($id);
        $employees->fill($request->all())->save();
    
        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('employees.index')->with('message', '編集しました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        // 完了メッセージを表示
        return redirect()->route('employees.index')->with('message', '削除しました');
    }
}