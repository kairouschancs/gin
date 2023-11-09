<?php

namespace App\Http\Controllers;

use App\Models\shops\Weather_information;
use App\Models\shops\Shop_hall;
use Illuminate\Http\Request;
use App\Http\Requests\Weather_InformationRequest;
use DB;

class WeatherInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ページネーション
        $weather_informations = Weather_Information::paginate(10);

		return view(
            'shops.weather_informations.index',
            ['weather_informations' => $weather_informations]
        );
    }

    
    /**
     * Show the form for creating a new resource.
     * 登録画面
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shops.weather_informations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Weather_InformationRequest $request)
    {
        $weather_informations = new Weather_Information;
    
        // fillを使用する場合は、必ずモデルのfillableを指定する
        $weather_informations->fill($request->all())->save();
    
        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('weather_informations.index')->with('message', '登録しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(Weather_Information $weather_information)
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
        $weather_informations = Weather_Information::find($id);
        return view('shops.weather_informations.edit', compact('weather_informations'));
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
        $weather_informations = Weather_Information::find($id);
        $weather_informations->fill($request->all())->save();

        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('weather_informations.index')->with('message', '編集しました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Weather_Information::where('id', $id)->delete();
        // 完了メッセージを表示
        return redirect()->route('weather_informations.index')->with('message', '削除しました');
    }
}
