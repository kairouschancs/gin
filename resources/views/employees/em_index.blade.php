@extends('adminlte::page')

@section('title', 'Users_Management')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="container">
    <h3>社員登録一覧</h3>
    {{-- 完了メッセージ --}}
    @if (session('message'))
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                ×
            </button>
            {{ session('message') }}
        </div>
    @endif

    {{-- 新規登録画面へ --}}
    <button type="button" class="btn btn-secondary mb-2" onclick="location.href='{{ route('employees.em_create') }}'">新規登録</button>

    <table class="table table-striped">
        @csrf
        <thead>
            <tr class="bg-secondary text-light">
            <th style="width: 80px">ID</th>
            <th style="width: 130px">従業員名</th>
            <th style="width: 80px">職位ID</th>
            <th style="width: 80px">職位</th>
            <th style="width: 100px">職位名</th>
            <th style="width: 120px">作成日</th>
            <th style="width: 120px">更新日</th>
            <!-- ボタン配置のためのタイトル行-->
            <th style="width: 90px"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            {{--@foreach ($users as $user,$role)--}}
                <tr>
                    <td>{{ $employee->employee_id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->role->id }}</td>
                    <td>{{ $employee->role->role }}</td>
                    <td>{{ $employee->role->role_summary }}</td>
                    <td>{{ $employee->created_at }}</td>
                    <td>{{ $employee->updated_at }}</td>
                    <td>
                        <div class="btn-group">
                            <form action="{{ route('employees.em_destroy', $employee->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                {{-- 編集画面に遷移 --}}
                                <button type="button" class="btn btn-outline-primary btn-sm" onclick="location.href='{{ route('employees.em_edit', $employee->id) }}'">編集</button>
                                {{-- 簡易的に確認メッセージを表示 --}}
                                <button type="submit" class="btn btn-outline-secondary btn-sm" onclick="return confirm('削除してもよろしいですか?');">削除</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
        {{-- ページネーション --}}
        {{--@if ($employees->hasPages())
        <div class="table-footer clearfix">
            {{ $employees->links() }}
        </div>
        @endif--}}
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