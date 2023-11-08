<?php

namespace App\Http\Controllers;

use App\Models\shops\Shop_type;
use App\Models\shops\working_hour;
use Illuminate\Http\Request;
use App\Http\Requests\ShopTypeRequest;
use DB;

class ShopTypeController extends Controller
{
    public function __construct()
    {
        $this->working_hour = new working_hour();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		//$ShopTypes = ShopType::all();

        $ShopTypes = Shop_Type::with('working_hour')->get();

        // ページネーション
        $ShopTypes = Shop_Type::paginate(10);

		return view(
            'shops.shop_types.index',
            ['ShopTypes' => $ShopTypes]
        );
    }

    /**
     * Show the form for creating a new resource.
     * 登録画面
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $working_hours = $this->working_hour->get();
        return view('shops.shop_types.create', compact('working_hours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShopTypeRequest $request)
    {
        $ShopType = new shop_type;
    
        // fillを使用する場合は、必ずモデルのfillableを指定する
        $ShopType->fill($request->all())->save();
    
        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('shop_types.index')->with('message', '登録しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop_type $shop_type)
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
        $ShopType = Shop_Type::find($id);
        $working_hours = $this->working_hour->get();
        //$working_hours = $ShopType->working_hour;
        return view('shops.shop_types.edit', compact('ShopType','working_hours'));
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
        $ShopType = Shop_Type::find($id);
        $ShopType->fill($request->all())->save();

        $working_hour = Working_Hour::find($id);
        $working_hour->fill($request->all())->save();

        // 一覧へ戻り完了メッセージを表示
        return redirect()->route('shop_types.index')->with('message', '編集しました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Shop_Type::where('id', $id)->delete();
        // 完了メッセージを表示
        return redirect()->route('shop_types.index')->with('message', '削除しました');
    }

}
