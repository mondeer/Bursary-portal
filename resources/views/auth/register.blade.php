@extends('layouts.app')

@section('auth')
<form id="sign_up" method="POST" action="/system/register">
  {{ csrf_field() }}
    <div class="msg">Register a new membership</div>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="material-icons">person</i>
        </span>
        <div class="form-line">
            <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" required autofocus>
        </div>
    </div>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="material-icons">person</i>
        </span>
        <div class="form-line">
            <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" required autofocus>
        </div>
    </div>
    <div class="input-group">
      <span>
        Role
      </span>
      <div class="form-line">
        <select class="form-control" name="role">
          <option value="student">TECUSA Member</option>
          <option value="village">Village CDF Rep</option>
        </select>
      </div>
    </div>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="material-icons">email</i>
        </span>
        <div class="form-line">
            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
        </div>
    </div>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="material-icons">lock</i>
        </span>
        <div class="form-line">
            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
        </div>
    </div>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="material-icons">lock</i>
        </span>
        <div class="form-line">
            <input type="password" class="form-control" name="confirm_password" minlength="6" placeholder="Confirm Password" required>
        </div>
    </div>
    <div class="form-group">
        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
    </div>

    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

    <div class="m-t-25 m-b--5 align-center">
        <a href="/login">You already have a membership?</a>
    </div>
</form>
@endsection
