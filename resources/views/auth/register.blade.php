<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>従業員/店舗 登録</title>

@extends('adminlte::auth.auth-page', ['auth_type' => 'register'])

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
@endif

@section('auth_header', __('adminlte::adminlte.register_message'))

<!-- ココから追記---------------------------------------------------------------------------------------------->
<script
    src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
    crossorigin="anonymous"
></script>
<!-- ココまで追記---------------------------------------------------------------------------------------------->

@section('auth_body')
    {{--<form action="{{ $register_url }}" method="post">--}}
    <form action="{{ $register_url }}" method="post" enctype="multipart/form-data">
        @csrf
        
        {{-- employee_id field --}}
        <div class="input-group mb-3">
            <input type="text" name="employee_id" class="form-control @error('employee_id') is-invalid @enderror"
                value="{{ old('employee_id') }}" placeholder="{{ __('adminlte::adminlte.employee_id') }}" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-calculator {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('employee_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- employee_code field --}}
        <div class="input-group mb-3">
        <input type="text" name="employee_code" class="form-control @error('employee_code') is-invalid @enderror"
            value="{{ old('employee_code') }}" placeholder="{{ __('adminlte::adminlte.employee_code') }}" autofocus>

        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-calculator {{ config('adminlte.classes_auth_icon', '') }}"></span>
            </div>
        </div>

        @error('employee_code')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

        {{-- employee_Name field --}}
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}" placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Email field --}}
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">

            <div class="input-group-append">
                <div class="input-group-text">
                    {{--<span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>--}}
                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Password field --}}
        <div class="input-group mb-3">
            <input id=inputPassword type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                placeholder="{{ __('adminlte::adminlte.password') }}">

            <div class="input-group-append">
                <div class="input-group-text">
                    <i id="eyeIcon" class="fas fa-eye-slash {{ config('adminlte.classes_auth_icon', '') }}"></i>
                </div>
            </div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        {{-- Confirm password field --}}
        <div class="input-group mb-3">
            <input id=inputPassword2 type="password" name="password_confirmation"
                class="form-control @error('password_confirmation') is-invalid @enderror"
                placeholder="{{ __('パスワード(確認)') }}">

            <div class="input-group-append">
                <div class="input-group-text">
                    {{--<span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>--}}
                    <i id="eyeIcon2" class="fas fa-eye-slash {{ config('adminlte.classes_auth_icon', '') }}"></i>
                </div>
            </div>

            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Register button --}}
        <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
            <span class="fas fa-user-plus"></span>
            {{ __('adminlte::adminlte.register') }}
        </button>
    </form>
<!-- ココから追記---------------------------------------------------------------------------------------------->
    {{--!Password 表示非表示切替--}}
    {{--!パスワード入力用--}}
    <script>
        // eyeIconのclickクリックイベント
            $("#eyeIcon").on("click", () => {
        // eyeIconのclass切り替え
            $("#eyeIcon").toggleClass("fa-eye fa-eye-slash");

        // inputのtype切り替え
            if ($("#inputPassword").attr("type") == "password") {
                $("#inputPassword").attr("type", "text");
            } else {
                $("#inputPassword").attr("type", "password");
            }
        });
    </script>

    {{--!パスワード確認用--}}
    <script>
        // eyeIconのclickクリックイベント
            $("#eyeIcon2").on("click", () => {
        // eyeIconのclass切り替え
            $("#eyeIcon2").toggleClass("fa-eye fa-eye-slash");

        // inputのtype切り替え
            if ($("#inputPassword2").attr("type") == "password") {
                $("#inputPassword2").attr("type", "text");
            } else {
                $("#inputPassword2").attr("type", "password");
            }
        });
    </script>
<!-- ココまで追記---------------------------------------------------------------------------------------------->

@stop

@section('auth_footer')
    <p class="my-0">
        <a href="{{ $login_url }}">
            {{ __('adminlte::adminlte.i_already_have_a_membership') }}
        </a>
    </p>
@stop
<!-- ココから追記 footer------------------------------------------------------------------------------------------>
<style>
    footer{
        position: absolute;
        bottom: 0;
    }
    .footer01 {
        color: #FFF;
        background: #020638;
        text-align: center;
        padding: 30px;
        width: 100%;
        position: fixed;
        bottom: 0;
        left: 0;
    }
</style>

<footer class="footer01">
    <div style="text-align: center;">
        <p style="margin-top: 15px;">copyright © {{ date('Y') }} Kairous_Project 実行委員会 All Rights Reserved.</p>
    </div>
</footer>