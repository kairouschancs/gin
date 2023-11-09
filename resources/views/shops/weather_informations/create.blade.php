@extends('adminlte::page')

@section('title', '気象情報観測地 新規登録')

@section('content_header')
    <h1></h1>
@stop

@section('content')
  <br>
  <h3>気象情報観測地 新規登録</h3>
  
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
    <form action="{{ route('weather_informations.store') }}" method="post">
      @csrf {{--@method('PUT')--}}
    
      <div class="border col-7">
        <div class="col-sd">
          <div class="row">
            {{-- 観測地_ID名入力 --}}
            <div class="form-group col-md-6">
                <label for="id">観測地ID<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
                <input type="text" class="form-control" id="id" name="id" value="{{ old('id') }}"
                placeholder="観測地ID を入力" />
            </div>
            {{-- 観測地_ID名入力 --}}
            <div class="form-group col-md-6">
                <label for="id">観測地名<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
                <input type="text" class="form-control" id="aria_name" name="aria_name" value="{{ old('aria_name') }}"
                placeholder="観測地名 を入力" />
            </div>
          </div>
        </div><br>
        <div class="row center-block text-center">
          <div class="col-6">
              {{-- 編集画面に遷移 --}}
              <button type="button" class="btn btn-outline-secondary btn-block" onclick="location.href='{{ route('weather_informations.index') }}'">戻る</button>
          </div>
          <div class="col-6">
              <button type="submit" class="btn btn-outline-primary btn-block">登録</button>
          </div>
      </div><br>
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
