@extends('adminlte::page')

@section('title', '理論労働時間算出係数情報 修正')

@section('content_header')
    <h1></h1>
@stop

@section('content')
  <h3>理論労働時間算出係数情報 編集</h3>
  
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
  <form action="{{ route('working_hours.update', $working_hours->id) }}" method="post">
    @csrf @method('PUT')
    <div class="border col-xl">
      <div class="col-sd">
        <br>
        <h5>◀基本情報▶</h5>
        <div class="row">
          {{-- 業態ID名 入力 --}}
          <div class="form-group col-md-2">
              <label for="id">業態ID<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="id" name="id" value="{{ old('id',$working_hours->id) }}"
              placeholder="業態ID を入力" />
          </div>
          {{-- 業態記号 入力 --}}
          <div class="form-group col-md-2">
            <label for="id">業態記号<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" id="shop_type_symbol" name="shop_type_symbol" value="{{ old('shop_type_symbol',$working_hours->shop_type_symbol) }}"
            placeholder="業態記号 を入力" />
          </div>
        </div>
      </div>
        {{-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}
      <div class="row">
        <div class="border col-xl">
          <br>
          <h5>◀Open / Close作業時間▶</h5>
          <div class="row">
            {{-- オープン準備時間数 入力 --}}
            <div class="form-group col-md-4">
              <label for="id">オープン準備<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="opening_work" name="opening_work" value="{{ old('opening_work',$working_hours->opening_work) }}"
              placeholder="オープン準備時間数 を入力" />
            </div>
            {{-- 閉店作業時間数 入力 --}}
            <div class="form-group col-md-4">
              <label for="id">閉店作業<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="closing_work" name="closing_work" value="{{ old('closing_work',$working_hours->closing_work) }}"
              placeholder="閉店作業時間数 を入力" />
            </div>
          </div>
        </div>
      {{-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}
        <div class="border col-xl">
          <br>
          <h5>◀営業ワーク▶</h5>
          <div class="row">
            {{-- 4S・プレクロ 入力 --}}
            <div class="form-group col-md-3">
              <label for="id">4S・プレクロ<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="4S_Pre_closing" name="4S_Pre_closing" value="{{ old('4S_Pre_closing',$working_hours->{"4S_Pre_closing"}) }}"
              placeholder="4S・プレクロ を入力" />
            </div>
            {{-- 仕込み 入力 --}}
            <div class="form-group col-md-3">
              <label for="id">仕込み<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="Preparation" name="Preparation" value="{{ old('Preparation',$working_hours->Preparation) }}"
              placeholder="仕込み を入力" />
            </div>
            {{-- 納金 入力 --}}
            <div class="form-group col-md-3">
              <label for="id">納金<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="payment" name="payment" value="{{ old('payment',$working_hours->payment) }}"
              placeholder="納金 を入力" />
            </div>
            {{-- 発注 入力 --}}
            <div class="form-group col-md-3">
              <label for="id">発注<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="order_work" name="order_work" value="{{ old('order_work',$working_hours->order_work) }}"
              placeholder="発注 を入力" />
            </div>
          </div>
        </div>
      </div>
        {{-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}
      <br>
      <h5>◀店長ワーク / トレーニング▶</h5>
      <div class="row">
        {{-- 店長ワーク 入力 --}}
        <div class="form-group col-md-2">
          <label for="id">店長ワーク<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
          <input type="text" class="form-control" id="manager_work" name="manager_work" value="{{ old('manager_work',$working_hours->manager_work) }}"
          placeholder="店長ワーク を入力" />
        </div>
        {{-- トレーニング 入力 --}}
        <div class="form-group col-md-2">
          <label for="id">トレーニング<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
          <input type="text" class="form-control" id="training" name="training" value="{{ old('training',$working_hours->training) }}"
          placeholder="トレーニング を入力" />
        </div>
        {{--Mt 入力 --}}
        <div class="form-group col-md-2">
          <label for="id">Mt<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
          <input type="text" class="form-control" id="appointment" name="appointment" value="{{ old('appointment',$working_hours->appointment) }}"
          placeholder="Mt を入力" />
        </div>
      </div>
          {{-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}
      <div class="row">
        <div class="border col-xl">
          <br>
          <h5>◀基本係数▶</h5>
          <div class="row">
            {{-- 人時売上係数 入力 --}}
            <div class="form-group col-md-4">
              <label for="id">人時売上係数<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="Person_hour_sales" name="Person_hour_sales" value="{{ old('Person_hour_sales',$working_hours->Person_hour_sales) }}"
              placeholder="人時売上係数 を入力" />
            </div>
            {{-- 最低営業人員 入力 --}}
            <div class="form-group col-md-4">
              <label for="id">最低営業人員<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="Minimum_sales_staff" name="Minimum_sales_staff" value="{{ old('Minimum_sales_staff',$working_hours->Minimum_sales_staff) }}"
              placeholder="最低営業人員 を入力" />
            </div>
          </div>
        </div>

        <div class="border col-xl">
          <br>
          <h5>◀売上加算係数▶</h5>
          <div class="row">
            {{-- 700万円以上 入力 --}}
            <div class="form-group col-md-4">
              <label for="id">700万円以上<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="seven_million_over" name="seven_million_over" value="{{ old('seven_million_over',$working_hours->seven_million_over) }}"
              placeholder="700万円以上 を入力" />
            </div>
            {{-- 1,000万円以上 入力 --}}
            <div class="form-group col-md-4">
              <label for="id">1,000万円以上<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="ten_million_over" name="ten_million_over" value="{{ old('ten_million_over',$working_hours->ten_million_over) }}"
              placeholder="1,000万円以上 を入力" />
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}
      <br>
      <div class="row center-block text-center">
        <div class="col-6">
            {{-- 編集画面に遷移 --}}
            <button type="button" class="btn btn-outline-secondary btn-block" onclick="location.href='{{ route('working_hours.index') }}'">戻る</button>
        </div>
        <div class="col-6">
            <button type="submit" class="btn btn-outline-primary btn-block">編集内容登録</button>
        </div>
      </div>
  </form>
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