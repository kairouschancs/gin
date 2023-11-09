@extends('adminlte::page')

@section('title', '建物 新規登録')

@section('content_header')
    <h1></h1>
@stop

@section('content')
  <br>
  <h3>建物 新規登録</h3>
  
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
    <form action="{{ route('shop_halls.store') }}" method="post">
      @csrf {{--@method('PUT')--}}
    <div class="border col-7">
      <div class="col-sd">
        <div class="row">
          {{-- 建物_ID名入力 --}}
          <div class="form-group col-md-6">
              <label for="id">建物ID<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="id" name="id" value="{{ old('id') }}"
              placeholder="建物ID を入力" />
          </div>
        </div>

          {{-- 郵便番号入力 --}}
          <div class="form-group col-md-6">
            <label for="id"> 郵便番号<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" id="develop_postal_code" name="develop_postal_code" value="{{ old('develop_postal_code') }}"
            placeholder=" 郵便番号 を入力" />
          </div>
          <div class="row">
            {{-- 住所入力 --}}
            <div class="form-group col-md-6">
              <label for="id"> 住所<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="develop_address" name="develop_address" value="{{ old('develop_address') }}"
              placeholder=" 住所 を入力" />
            </div>
            {{-- 建物名入力 --}}
            <div class="form-group col-md-6">
              <label for="id"> 建物名<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="develop_building" name="develop_building" value="{{ old('develop_building') }}"
              placeholder=" 建物名 を入力" />
            </div>
          </div>
          <div class="row">
            {{-- 建物記号入力 --}}
            <div class="form-group col-md-6">
              <label for="id"> 建物記号<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="develop_symbol" name="develop_symbol" value="{{ old('develop_symbol') }}"
              placeholder=" 建物記号 を入力" />
            </div>
            {{-- 建物略称入力 --}}
            <div class="form-group col-md-6">
              <label for="id"> 建物略称<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" id="develop_name" name="develop_name" value="{{ old('develop_name') }}"
              placeholder=" 建物記号 を入力" />
            </div>
          </div>
          {{-- 気象観測地 -> weather_informations --}}
          <div class="form-group col-md-6">
            <label for="weather_information_id">気象観測地：<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
            <select class="form-control" id="weather_information_id" name="weather_information_id">
                @foreach ($weather_informations as $weather_information)
                    <option value="{{ $weather_information->id }}" >{{ $weather_information->aria_name }}</option>
                @endforeach
            </select>
          </div>
      </div><br>
      <div class="row center-block text-center">
        <div class="col-6">
            {{-- 編集画面に遷移 --}}
            <button type="button" class="btn btn-outline-secondary btn-block" onclick="location.href='{{ route('shop_halls.index') }}'">戻る</button>
        </div>
        <div class="col-6">
            <button type="submit" class="btn btn-outline-primary btn-block">編集内容登録</button>
        </div>
    </div><br>
    <p style="color:deeppink;">※ 新規登録』の前に『気象情報観測地点一覧』を登録して下さい。</p>
</div>
</form>
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




