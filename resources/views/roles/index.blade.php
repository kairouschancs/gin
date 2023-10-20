@extends('adminlte::page')

@section('title', 'Role_Management')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="container">
    <h3>権限管理</h3>
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
    <button type="button" class="btn btn-secondary mb-2" onclick="location.href='{{ route('roles.create') }}'">新規登録</button>

    <table class="table table-striped">
        <thead>
            <tr class="bg-secondary text-light">
            <th>ID</th>
            <th>Class</th>
            <th>権限</th>
            <th>権限名</th>
            <!-- ボタン配置のためのタイトル行-->
            <th style="width: 150px"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->class }}</td>
                    <td>{{ $role->role }}</td>
                    <td>{{ $role->role_summary }}</td>
                    <td>
                        <div class="btn-group">
                            <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                            {{-- 編集画面に遷移 --}}
                                {{--<a class="btn btn-outline-primary btn-sm mb-2" href="{{ route('roles.edit', $roles->id) }}"
                                    role="button">編集</a>--}}
                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="location.href='{{ route('roles.edit', $role->id) }}'">編集</button>
                                {{-- 簡易的に確認メッセージを表示 --}}
                                <button type="submit" class="btn btn-outline-secondary btn-sm" onclick="return confirm('削除してもよろしいですか?');">削除</button>
                                {{--<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('削除してもよろしいですか?');">削除</button>--}}
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
        {{-- ページネーション --}}
        @if ($roles->hasPages())
        <div class="table-footer clearfix">
            {{ $roles->links() }}
        </div>
        @endif
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