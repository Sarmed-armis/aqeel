@extends('layouts.header')

@section('content')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>التدريب الصيفي </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ادراه التدريب الصيفي </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- User Account: style can be found in dropdown.less -->

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/profile-icon.png" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  {{Auth::user()->name}} -  المتدرب
                  <small>{{Auth::user()->created_at}}</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">المتابعين</a>
                    12
                  </div>
                  <div class="col-xs-4 text-center">


                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  @if(Auth::user()->tech==0)
                  <a href="{{url('profile')}}" class="btn btn-default btn-flat">الصفحه الشخصيه</a>
                    @endif
                </div>
                <div class="pull-right">
      <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            تسجيل الخروج</a>
                                              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </div>
              </li>

      </div>
    </nav>
  </header>




  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/profile-icon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{auth::user()->name}}</p>


          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">



    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
    ادراه  التدريب الميداني

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> الرئسيه</a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->

          <div class="small-box bg-aqua">
            @if(Auth::user()->tech==1)
            <div class="inner">

              <h3>150</h3>

              <p>اعداد المتدربين</p>
            </div>

            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            @endif
            <a href="#" class="small-box-footer">للمزيد <i class="fa fa-arrow-circle-right"></i></a>
          </div>

        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53</h3>

              <p>   الشركات  والمشرفين</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{url('Companyinfo')}}" class="small-box-footer">المزيد <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->

        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->

          <!-- /.nav-tabs-custom -->

          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          <div class="box box-primary">






          <!-- /.box -->

          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Email</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>
          </div>
          </div><?php
            use App\user;
            $users=user::all();

            ?>

 @if(Auth::user()->tech==1)
<div class="box">
  <div class="box-header">
    <h1 class="box box-info text-right">تاكيد الطلاب</h1>
  </div>

  <table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>

<th>تاكيد</th>
      <th>الرمز</th>

      <th>الحاله</th>

      <th>اسم الطالب</th>

    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
      @if($user->tech==0)
    <tr>
      <td>
        <input type="hidden" id="token" value="{{ csrf_token() }}">
        <button id="{{$user->id}}"class="btn btn-primary getagree">تفعيل</button>
      </td>
<td>{{$user->code}}</td>
      <td>
        @if($user->agree==1)
          مقيول
          @else
        غير مقبول
          @endif
      </td>

      <td>
        {{$user->name}}
      </td>
    </tr>
    @endif
      @endforeach
    </tbody>
  </table>
</div>
          @endif
        </section>

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">الجامعه المستنصريه كليه العلوم</a>.</strong> All rights
    reserved.
  </footer>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->

<!-- Sparkline -->




      <script src="dist/sweetalert.min.js"></script>
      <script>

          $(document).ready(function () {

              $('body').on('click','.getagree',function () {
                  var id=$(this).attr('id');
                  var token = $('#token').val();
                  $.ajax({
                      type: "POST",
                      url: 'user/agree',
                      data: {
                          id:id,
                          _token: token
                      },
                      success: function (msg) {
                          if (msg=='success'){
                              swal({
                                  title: "تم العمليه",
                                  text: 'تم تاكيد الطالب',
                                  type: "success",
                                  confirmButtonText: "عوده"
                              });

                          }
                          else{
                              swal({
                                  title: "حدث خطاء ما",
                                  text: 'لم تمم العمليهٍ',
                                  type: "error",
                                  confirmButtonText: "عوده"
                              });

                          }
                          setTimeout(function(){
                              location.reload();
                          }, 2000);
                      },
                      error: function (msg) {
                          var erroes='';
                          for(datas in msg.responseJSON){
                              erroes+=msg.responseJSON[datas]+'</br>';
                          }
                          $('#error').show().html(erroes);
                      }
                  });

              });


          });
      </script>
</body>
</html>
@endsection
