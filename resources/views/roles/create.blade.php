@extends('adminlte::page')

@section('title', 'システム権限登録')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    <br>
    <h3>システム権限 登録</h3>
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

    <div class="border col-7">
		<form action="{{ route('roles.store') }}" method="post">
            <div class="row">
                <div class="col-md">
                    @csrf
                        {{-- ID名入力 --}}
                        <div class="form-group">
                            <label>ID：</label>
                            <input type="text" class="form-control" id="id" name="id" value="{{ old('id') }}"
                            placeholder="ID" />
                        </div>
                        {{-- Class入力 --}}
                        <div class="form-group">
                            <label>Class：</label>
                            <input type="text" class="form-control" id="class" name="class" value="{{ old('class') }}"
                            placeholder="Class" />
                        </div>
                        {{-- 権限入力 --}}
                        <div class="form-group">
                            <label>権限：</label>
                            <input type="text" class="form-control" id="role" name="role" value="{{ old('role') }}"
                            placeholder="権限" />
                        </div>
                        {{-- 権限名入力 --}}
                        <div class="form-group">
                            <label>権限名：</label>
                            <input type="text" class="form-control" id="role_summary" name="role_summary" value="{{ old('role_summary') }}"
                            placeholder="権限名" />
                        </div>
                </div>
            </div>
            <div class="row center-block text-center">
                <div class="col-1">
                </div>
                <div class="col-5">
                    {{-- 編集画面に遷移 --}}
                    <button type="button" class="btn btn-outline-secondary btn-block" onclick="location.href='{{ route('roles.index') }}'">戻る</button>
                </div>
                <div class="col-5">
                    {{-- 登録処理 -> Indexに遷移 --}}
                    <button type="submit" class="btn btn-outline-primary btn-block">登録</button>
                </div>
            </div>
        </form>

        <div class="col-1">
        </div>
        <br>
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