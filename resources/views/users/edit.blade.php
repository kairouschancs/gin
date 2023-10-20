@extends('adminlte::page')

@section('title', 'ユーザー登録情報修正')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    <br>
    <h3>ユーザー登録情報 編集</h3>
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
            <form action="{{ route('users.update', $user->id) }}" method="post">
                @csrf @method('PUT')
                        <div class="col-sd">
                            <div class="row">
                                {{-- Employee_ID名入力 --}}
                                <div class="form-group col-md-4">
                                    <label for="employee_id">従業員ID<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
                                    <input type="text" class="form-control" id="employee_id" name="employee_id" value="{{ old('employee_id',$user->employee_id) }}"
                                    placeholder="Employee ID / 店舗コード を入力" />
                                </div>
                                {{-- Employee_Code名入力 --}}
                                <div class="form-group col-md-4">
                                    <label for="employee_code">従業員Code<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
                                    <input type="text" class="form-control" id="employee_code" name="employee_code" value="{{ old('employee_code',$user->employee_code) }}"
                                    placeholder="Employee code / 店舗コード を入力" />
                                </div>
                                {{-- 職位 -> role_role --}}
                                <div class="form-group col-md-4">
                                    <label for="role_id">職位：<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
                                    <select class="form-control" id="role_id" name="role_id">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}" @if( old('role', $user->role) == $role->role) selected @endif>{{ $role->role }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- 従業員名入力 --}}
                                <div class="form-group col-md-6">
                                    <label for="name">従業員名入力<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$user->name) }}"
                                    placeholder="従業員/店舗名称名を入力" />
                                </div>
                                {{-- E-mail --}}
                                <div class="form-group col-md-6">
                                    <label for="email">E-mail<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email',$user->email) }}"
                                    placeholder="E-mail を入力" />
                                </div>
                                {{-- 休日カレンダーType --}}
                                <div class="form-group col-md-6">
                                    <label for="holiday_calendar_type">休日カレンダーType</label>
                                    <input type="text" class="form-control" id="holiday_calendar_type" name="holiday_calendar_type" value="{{ old('holiday_calendar_type',$user->holiday_calendar_type) }}"
                                    placeholder="休日カレンダーType を入力" />
                                </div>
                                {{-- 退職 -> 退職 = 1 --}}
                                <div class="form-group col-md-6">
                                    <label for="retirement">在籍Status<span class="badge badge-secondary ml-2">{{ __('必須') }}</span></label>
                                    <input type="text" class="form-control" id="retirement" name="retirement" value="{{ old('retirement',$user->retirement) }}"
                                    placeholder="退職の場合は『 1 』 を入力" />
                                </div>
                            </div>
                        </div>
                    <div class="row center-block text-center">
                        {{--<div class="col-1">
                        </div>--}}
                        <div class="col-6">
                            {{-- 編集画面に遷移 --}}
                            <button type="button" class="btn btn-outline-secondary btn-block" onclick="location.href='{{ route('users.index') }}'">戻る</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-outline-primary btn-block">編集内容登録</button>
                        </div>
                    </div>
            </form>
            <br/>
        </div><br/>
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