@extends('layouts.app')

@section('auth')
<form id="sign_in" method="POST" action="/login">
  {{ csrf_field() }}
    <div class="msg">Sign in to start your session</div>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="material-icons">person</i>
        </span>
        <div class="form-line">
            <input type="text" class="form-control" name="email" placeholder="Enter Email" required autofocus>
        </div>
    </div>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="material-icons">lock</i>
        </span>
        <div class="form-line">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8 p-t-5">
            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
            <label for="rememberme">Remember Me</label>
        </div>
        <div class="col-xs-4">
            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
        </div>
    </div>
    <div class="row m-t-15 m-b--20">
        <div class="col-xs-6">
            <a href="/system/register">Register Now!</a>
        </div>
    </div>
</form>
@endsection
