@extends('adminlte::page')

@section('title', '気象情報観測地登録 一覧')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="container">
    <h3>気象情報観測地登録 一覧</h3>
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
    <button type="button" class="btn btn-secondary mb-2" onclick="location.href='{{ route('weather_informations.create') }}'">新規登録</button>
    <table class="table table-striped">
        @csrf
        <thead>
            <tr class="bg-secondary text-light">
            <th style="width: 60px">観測地ID</th>
            <th style="width: 80px">観測地名</th>
            <th style="width: 120px">作成日</th>
            <th style="width: 120px">更新日</th>
            <!-- ボタン配置のためのタイトル行-->
            <th style="width: 95px"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($weather_informations as $weather_information)
            {{--@foreach ($users as $user,$role)--}}
                <tr>
                    <td>{{ $weather_information->id }}</td>
                    <td>{{ $weather_information->aria_name }}</td>
                    <td>{{ $weather_information->created_at }}</td>
                    <td>{{ $weather_information->updated_at }}</td>
                    <td>
                        <div class="btn-group">
                            <form action="{{ route('weather_informations.destroy', $weather_information->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                {{-- 編集画面に遷移 --}}
                                <button type="button" class="btn btn-outline-primary btn-sm" onclick="location.href='{{ route('weather_informations.edit', $weather_information->id) }}'">編集</button>
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
        @if ($weather_informations->hasPages())
            <div class="table-footer clearfix">
                {{ $weather_informations->links() }}
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