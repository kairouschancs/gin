<?php

namespace App\Http\Controllers;

use App\Models\shops\Shop_hall;
use App\Models\shops\Weather_information;
use Illuminate\Http\Request;
use App\Http\Requests\Shop_HallRequest;
use DB;

class ShopHallController extends Controller
{
    public function __construct()
    {
        $this->weather_information = new weather_information();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shop_halls = Shop_Hall::with('weather_information')->get();

        // ページネーション
        $shop_halls = Shop_Hall::paginate(10);

		return view(
            'shops.shop_halls.index',
            ['shop_halls' => $shop_halls]
        );
    }

    /**
     * Show the form for creating a new resource.
     * 登録画面
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $weather_informations = $this->weather_information->get();
        return view('shops.shop_halls.create', compact('weather_informations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Shop_HallRequest $request)
    {
        $shop_halls = new Shop_Hall;
    
        // fillを使用する場合は、必ずモデルのfillableを指定する
        $shop_halls->fill($request->all())->save();
    
        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('shop_halls.index')->with('message', '登録しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop_hall $shop_hall)
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
        $shop_halls = Shop_hall::find($id);
        $weather_informations = $this->weather_information->get();
        return view('shops.shop_halls.edit', compact('shop_halls','weather_informations'));
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
        $shop_halls = Shop_Hall::find($id);
        $shop_halls->fill($request->all())->save();

        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('shop_halls.index')->with('message', '編集しました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Shop_Hall::where('id', $id)->delete();
        // 完了メッセージを表示
        return redirect()->route('shop_halls.index')->with('message', '削除しました');
    }
}
