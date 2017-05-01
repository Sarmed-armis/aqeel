@extends('layouts.header')
@section('content')

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">

  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">الدخول الى صفحتك الشخصيه</p>

    <form action="{{ url('/login') }}" method="post">
           {{ csrf_field() }}
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" class="form-control" placeholder="البريد" name="email" value="{{ old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                          @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                     
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input  id="password" type="password" class="form-control" placeholder="كلمه المرور" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
 
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">الدخول</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  
    <!-- /.social-auth-links -->

    <a href="{{route('register')}}" class="text-center">تسجبل عضو جديد</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
