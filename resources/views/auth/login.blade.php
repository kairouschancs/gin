<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ログイン</title>

@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('adminlte_css_pre')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@stop

<!-- ココから追記---------------------------------------------------------------------------------------------->
<script
    src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
    crossorigin="anonymous"
    ></script>
<!-- ココまで追記---------------------------------------------------------------------------------------------->

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
@endif

@section('auth_header', __('adminlte::adminlte.login_message'))

@section('auth_body')
    <form action="{{ $login_url }}" method="post">
        @csrf

<!-- ココから変更---------------------------------------------------------------------------------------------->
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
<!-- ココまで変更---------------------------------------------------------------------------------------------->
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

        {{-- Login field --}}
        <div class="row">
            <div class="col-7">
                <div class="icheck-primary" title="{{ __('adminlte::adminlte.remember_me_hint') }}">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember">
                        {{ __('adminlte::adminlte.remember_me') }}
                    </label>
                </div>
            </div>

            <div class="col-5">
                <button type=submit class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                    <span class="fas fa-sign-in-alt"></span>
                    {{ __('adminlte::adminlte.sign_in') }}
                </button>
            </div>
        </div>
    </form>
<!-- ココから追記---------------------------------------------------------------------------------------------->
        {{--!Password 表示非表示切替--}}
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
<!-- ココから追記---------------------------------------------------------------------------------------------->
@stop

@section('auth_footer')
    {{-- Password reset link --}}
    @if($password_reset_url)
        <p class="my-0">
            <a href="{{ $password_reset_url }}">
                {{ __('adminlte::adminlte.i_forgot_my_password') }}
            </a>
        </p>
    @endif

    {{-- Register link --}}
    @if($register_url)
        <p class="my-0">
            <a href="{{ $register_url }}">
                {{ __('adminlte::adminlte.register_a_new_membership') }}
            </a>
        </p>
    @endif
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