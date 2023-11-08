@extends('adminlte::page')

@section('title', '業態登録情報修正')

@section('content_header')
    <h1></h1>
@stop

@section('content')
  <h3>業態登録情報 編集</h3>
  
  @if ($errors->any())
      <div class="alert alert-warning alert-dismissible">
          {{-- エラーの表示 --}}
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  {{-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}
      <form action="{{ route('shop_types.update', $ShopType->id) }}" method="post">
        @csrf @method('PUT')
        <div class="border col-xl">
          <div class="col-sd">
            <br>
            <h5>◀基本情報▶</h5>
            <div class="row">
              {{-- 業態ID名入力 --}}
              <div class="form-group col-md-2">
                  <label for="id">業態ID<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
                  <input type="text" class="form-control" id="id" name="id" value="{{ old('id',$ShopType->id) }}"
                  placeholder="業態ID を入力" />
              </div>
              {{-- 業態記号入力 --}}
              <div class="form-group col-md-2">
                <label for="id">業態記号<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
                <select class="form-control" id="working_hour_id" name="working_hour_id">
                  @foreach ($working_hours as $working_hour)
                      <option value="{{ $working_hour->id }}" @if( old('working_hour', $ShopType->working_hour->shop_type_symbol) == $working_hour->shop_type_symbol) selected @endif>{{ $working_hour->shop_type_symbol }}</option>
                  @endforeach
              </select>
              </div>
              {{-- 業態名入力 --}}
              <div class="form-group col-md-2">
                <label for="id">業態名<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
                <input type="text" class="form-control" id="shop_type_name" name="shop_type_name" value="{{ old('shop_type_name',$ShopType->shop_type_name) }}"
                placeholder="業態名 を入力" />
              </div>
            </div>
                {{-- 業態内容入力 --}}
                <div class="form-group">
                  <label for="id">業態内容<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
                  <input type="text" class="form-control" id="shop_work_content" name="shop_work_content" value="{{ old('shop_work_content',$ShopType->shop_work_content) }}"
                  placeholder="業態内容 を入力" />
                </div>
        </div><br>
        <h5>◀非生産性労働時間▶</h5>
        {{--<div class="border col-xl-12">--}}
          <div class="row">
            {{-- オープン準備時間数入力 --}}
            <div class="form-group col-md-3">
              <label for="id">オープン準備<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="opening_work" name="opening_work" value="{{ old('opening_work',$ShopType->working_hour->opening_work) }}"
              placeholder="オープン準備時間数 を入力" />
            </div>
            {{-- 4S・プレクロ作業時間数入力 --}}
            <div class="form-group col-md-3">
              <label for="id">4S・プレクロ作業<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="4S_Pre_closing" name="4S_Pre_closing" value="{{ old('4S_Pre_closing',$ShopType->working_hour->{"4S_Pre_closing"}) }}"
              placeholder="4S・プレクロ作業時間数 を入力" />
            </div>
            {{-- 閉店〆作業時間数入力 --}}
            <div class="form-group col-md-3">
              <label for="id">閉店〆作業<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="closing_work" name="closing_work" value="{{ old('closing_work',$ShopType->working_hour->closing_work) }}"
              placeholder="閉店〆作業時間数 を入力" />
            </div>
            {{-- 仕込作業時間数入力 --}}
            <div class="form-group col-md-3">
              <label for="id">仕込作業<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="Preparation" name="Preparation" value="{{ old('Preparation',$ShopType->working_hour->Preparation) }}"
              placeholder="仕込作業時間数 を入力" />
            </div>
          </div>


          <div class="row">
            {{-- 納金作業時間数入力 --}}
            <div class="form-group col-md-3">
              <label for="id">納金作業<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="order_work" name="order_work" value="{{ old('order_work',$ShopType->working_hour->Preparation) }}"
              placeholder="納金作業時間数 を入力" />
            </div>
            {{-- 発注作業時間数入力 --}}
            <div class="form-group col-md-3">
              <label for="id">発注作業<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="Preparation" name="Preparation" value="{{ old('Preparation',$ShopType->working_hour->Preparation) }}"
              placeholder="発注作業時間数 を入力" />
            </div>
          </div>


          <div class="row">
            {{-- 店長ワーク作業時間数入力 --}}
            <div class="form-group col-md-3">
              <label for="id">店長ワーク作業<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="manager_work" name="manager_work" value="{{ old('manager_work',$ShopType->working_hour->manager_work) }}"
              placeholder="店長ワーク作業時間数 を入力" />
            </div>
            {{-- トレーニング時間数入力 --}}
            <div class="form-group col-md-3">
              <label for="id">トレーニング作業<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="training" name="training" value="{{ old('training',$ShopType->working_hour->training) }}"
              placeholder="トレーニング作業時間数 を入力" />
            </div>
            {{-- Mt時間数入力 --}}
            <div class="form-group col-md-3">
              <label for="id">ミーティング時間<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="appointment" name="appointment" value="{{ old('appointment',$ShopType->working_hour->appointment) }}"
              placeholder="Mt時間数 を入力" />
            </div>
          </div>

          <br>
          <h5>◀適正労働時間 算出係数▶</h5>
          <div class="row">
            {{-- 月商700万以上の加算時間/日 入力 --}}
            <div class="form-group col-md-3">
              <label for="id">月商700万以上の加算時間/日<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="seven_million_over" name="seven_million_over" value="{{ old('seven_million_over',$ShopType->working_hour->seven_million_over) }}"
              placeholder="月商700万以上の加算時間/日 を入力" />
            </div>
            {{-- 月商1,000万以上の加算時間/日 入力 --}}
            <div class="form-group col-md-3">
              <label for="id">月商1,000万以上の加算時間/日<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="ten_million_over" name="ten_million_over" value="{{ old('ten_million_over',$ShopType->working_hour->ten_million_over) }}"
              placeholder="月商1,000万以上の加算時間/日 を入力" />
            </div>
            {{-- 人時売上係数 入力 --}}
            <div class="form-group col-md-3">
              <label for="id">人時売上係数<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="Person_hour_sales" name="Person_hour_sales" value="{{ old('Person_hour_sales',$ShopType->working_hour->Person_hour_sales) }}"
              placeholder="人時売上係数 を入力" />
            </div>
            {{-- 最低営業人員 入力 --}}
            <div class="form-group col-md-3">
              <label for="id">最低営業人員<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="Minimum_sales_staff" name="Minimum_sales_staff" value="{{ old('Minimum_sales_staff',$ShopType->working_hour->Minimum_sales_staff) }}"
              placeholder="最低営業人員 を入力" />
            </div>
          </div>

        {{--</div>--}}


        {{--<div class="border col-xl">--}}
          <div class="row center-block text-center">
              {{--<div class="col-1">
              </div>--}}
              <div class="col-6">
                  {{-- 編集画面に遷移 --}}
                  <button type="button" class="btn btn-outline-secondary btn-block" onclick="location.href='{{ route('shop_types.index') }}'">戻る</button>
              </div>
              <div class="col-6">
                  <button type="submit" class="btn btn-outline-primary btn-block">編集内容登録</button>
              </div>
          </div>
        {{--</div>--}}


      </form>
  </div>
  {{-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@section('footer')
    Copyright © {{ date('Y') }} Kairous_Project実行委員会 All Rights Reserved.
@endsection