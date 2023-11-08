@extends('adminlte::page')

@section('title', '業態 新規登録')

@section('content_header')
    <h1></h1>
@stop

@section('content')
  <br>
  <h3>業態 新規登録</h3>
  
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
    <form action="{{ route('shop_types.store') }}" method="post">
      @csrf {{--@method('PUT')--}}
      <div>
        <div class="border col-6">
          <div class="col-md">
            <br>
            <h5>◀基本情報▶</h5>
            <div class="row">
              {{-- 業態ID名入力 --}}
              <div class="form-group col-md-4">
                  <label for="id">業態ID</label>
                  <input type="text" class="form-control" id="id" name="id" value="{{ old('id') }}"
                  placeholder="業態ID を入力" />
              </div>
              {{-- 業態記号入力 --}}
              <div class="form-group col-md-4">
                <label for="id">業態記号</label>
                <select class="form-control" id="working_hour_id" name="working_hour_id">
                  @foreach ($working_hours as $working_hour)
                      <option value="{{ $working_hour->id }}" >{{ $working_hour->shop_type_symbol }}</option>
                  @endforeach
              </select>
              </div>
              {{-- 業態名入力 --}}
              <div class="form-group col-md-4">
                <label for="id">業態名</label>
                <input type="text" class="form-control" id="shop_type_name" name="shop_type_name" value="{{ old('shop_type_name') }}"
                placeholder="業態名 を入力" />
              </div>
            </div>
                {{-- 業態内容入力 --}}
                <div class="form-group">
                  <label for="id">業態内容<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
                  <input type="text" class="form-control" id="shop_work_content" name="shop_work_content" value="{{ old('shop_work_content',) }}"
                  placeholder="業態内容 を入力" />
                </div>
          </div>
        </div><br>
        <div class="row center-block text-center">
          <div class="col-3">
              {{-- 編集画面に遷移 --}}
              <button type="button" class="btn btn-outline-secondary btn-block" onclick="location.href='{{ route('shop_types.index') }}'">戻る</button>
          </div>
          <div class="col-3">
              <button type="submit" class="btn btn-outline-primary btn-block">登録</button>
          </div>
        </div><br>
        <p style="color:deeppink;">※ 新規登録』の前に『理論労働時間算出係数』を登録して下さい。</p>
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