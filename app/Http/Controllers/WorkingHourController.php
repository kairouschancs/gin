<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\shops\working_hour;
use App\Http\Requests\WorkingHourRequest;

class WorkingHourController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		//$working_hours = Working_Hour::all();
        // ページネーション
        $working_hours = Working_Hour::paginate(10);

		return view(
            'shops.working_hours.index',
            ['working_hours' => $working_hours]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view('working_hours.create', compact('working_hours'));
        return view('shops.working_hours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WorkingHourRequest $request)
    {
        $working_hours = new working_hour;
    
        // fillを使用する場合は、必ずモデルのfillableを指定する
        $working_hours->fill($request->all())->save();
    
        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('working_hours.index')->with('message', '登録しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(working_hour $working_hour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $working_hours = Working_Hour::find($id);
        //$working_hours = $this->working_hour->get();
        //$working_hours = $working_hours->working_hours;
        return view('shops.working_hours.edit', compact('working_hours'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WorkingHourRequest $request, $id)
    {
        $working_hours = Working_Hour::find($id);
        $working_hours->fill($request->all())->save();
    
        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('working_hours.index')->with('message', '編集しました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Working_Hour::where('id', $id)->delete();
        // 完了メッセージを表示
        return redirect()->route('working_hours.index')->with('message', '削除しました');
    }
}
