@extends('adminlte::page')

@section('title', 'ユーザー新規登録')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    <br>
    <h3>社員新規登録</h3>
    <br>
    
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

    <div class="row">
      <div class="border col-7">
        <form action="{{ route('employees.em_store') }}" method="post">
          @csrf {{--@method('PUT')--}}
            <div class="col-sd">
              <div class="row">
                  {{-- Employee_ID名入力 --}}
                  <div class="form-group col-md-4">
                    <label for="employee_id">従業員ID：</label>
                    <input type="text" class="form-control" id="employee_id" name="employee_id" value="{{ old('employee_id') }}"
                    placeholder="従業員ID / 店舗コード を入力" />
                  </div>
                  {{-- Employee_Code名入力 --}}
                  <div class="form-group col-md-4">
                    <label for="employee_code">従業員Code：</label>
                    <input type="text" class="form-control" id="employee_code" name="employee_code" value="{{ old('employee_code') }}"
                    placeholder="従業員コード / 店舗コード を入力" />
                  </div>
                  {{-- 職位名 入力 --}}
                  <div class="form-group col-md-4">
                    <label for="role_id">職位：</label>
                    <select class="form-control" id="role_id" name="role_id">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id  }}">{{ $role->role }}</option>
                        @endforeach
                    </select>
                  </div>
                {{-- 従業員名 入力 --}}
                <div class="form-group col-md-6">
                  <label for="name">従業員氏名：</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                  placeholder="従業員名 を入力" />
                </div>
                {{-- E-mail 入力 --}}
                <div class="form-group col-md-6">
                  <label for="email">E-mail：</label>
                  <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}"
                  placeholder="E-mail Address を入力" />
              </div>
              {{-- 仮Password 入力 --}}
              <div class="form-group col-md-6">
                <label for="password">仮パスワード：</label>
                <input type="text" class="form-control" id="password" name="password" value="{{ old('password') }}"
                placeholder="従業員名 を入力" />
              </div>
              {{-- 休日カレンダー 入力 --}}
              <div class="form-group col-md-6">
                <label for="holiday_calendar_type">休日カレンダーType：</label>
                <input type="text" class="form-control" id="holiday_calendar_type" name="holiday_calendar_type" value="{{ old('holiday_calendar_type') }}"
                placeholder="休日カレンダーType を入力" />
            </div></div></div>
                  <div class="row center-block text-center">
                      {{--<div class="col-1">
                      </div>--}}
                      <div class="col-6">
                          {{-- 編集画面に遷移 --}}
                          <button type="button" class="btn btn-outline-secondary btn-block" onclick="location.href='{{ route('employees.index') }}'">戻る</button>
                      </div>
                      <div class="col-6">
                          <button type="submit" class="btn btn-outline-primary btn-block">登録</button>
                      </div>
                  </div>
        </form><br/>
      </div><br/>

      <div>
        <h6>＜入力時の注意＞</h6>
        <div class="border border-warning col-12"><br/>
          <p>  ・店舗登録時は『従業員ID』『従業員Code』の両方に『店舗Code』を入力して下さい。<br/>
            ・個人のアカウントに店舗E-mailの使用不可。<br/>
            ・E-mailは、パスワード再設定の際に使用します。<br/>
            +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++<br/>
            ・店舗登録 -> 職位：<br/>
            　　‥Shop_TypeA ==> 本部システム統合<br/>
            　　‥Shop_TypeB ==> 営業日報/水光熱使用量 登録 --> コメダ珈琲/大戸屋業態<br/>
          </P>
        </div><br/>
      </div>
    </div>

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