@extends('layouts.header')

@section('content')


<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>تسجيل</b>الطلبه</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">قم بعمليه تسجيل لحاسبك الشخصي</p>

    <form  method="post" action="{{ route('register') }}">
      {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input  id="name" name="name"type="text" class="form-control" placeholder="الاسم" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
           @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
      </div>
      <div class="form-group has-feedback">
        <input   name="email" type="email" class="form-control" placeholder="البريد" required>

        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
           @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="كلمه المرور" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
      </div>
      <div class="form-group has-feedback">
        <input    type="password" class="form-control" placeholder="تاكيد الرمز"  name="password_confirmation" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">تسجيل</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

 

    <a href="{{ route('login') }}" class="text-center">لدي فعلا حساب مسبقا</a>
  </div>
  <!-- /.form-box -->
</div>