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
                  <a href="{{url('profile')}}" class="btn btn-default btn-flat">الصفحه الشخصيه</a>
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

        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">


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
<?php
use App\Company;

 $companys=Company::all();


 ?>
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          <div class="box box-primary">

            <table id="example2" class="table table-bordered table-hover">
                          <thead>
                          <tr>

                            <th>تقديم</th>
                            <th>العدد</th>
                            <th>اسم المشرف</th>
                            <th>اسم الشركه</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($companys as $company)

                              <tr>

<td>
  @if(Auth::user()->tech==0)
    <input type="hidden" id="token" value="{{ csrf_token() }}">
<button id="{{$company->id}}"class="btn btn-primary getJob">تقديم</button>
    @endif
</td>

  <td>{{$company->numbers}}</td>
                                <td>  {{$company->lectname}}  </td>

                                  <td>{{$company->companyname}}</td>

                              </tr>

   @endforeach

  </tbody>


</table>


          <!-- /.box -->

          <!-- quick email widget -->

          <div class="box box-info">


            <div class="box-header">




                  @if(auth::user()->tech==1)
              <i class="fa fa-briefcase"></i>


              <h3 class="box-title">ادخال اسم الشركات</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="{{url('/Companystore')}}" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="comapnyname" placeholder="اسم الشركه">
                </div>

                  <input type="text" class="form-control" name="lectname" placeholder="اسم المشرف">
                </div>



                <div class="form-group">
                  <input type="text" class="form-control" name="numbers" placeholder="عدد الطلاب">
                </div>


                <div class="box-footer clearfix">
                  <button type="submit" class="pull-right btn btn-default" id="sendEmail">اضافه
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
                    {{ csrf_field() }}
              </form>
            </div>

          </div>
@endif





        </section>


        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->

              <!-- /. tools -->




            <!-- /.box-body-->

          <!-- /.box -->

          <!-- solid sales graph -->


    <!-- /.content -->
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
    </section>
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="dist/sweetalert.min.js"></script>


      <script>

        $(document).ready(function () {

            $('body').on('click','.getJob',function () {
           var id=$(this).attr('id');
                var token = $('#token').val();
                $.ajax({
                    type: "POST",
                    url: 'jobs/add',
                    data: {
                        id:id,
                        _token: token
                    },
                    success: function (msg) {
                        if (msg=='success'){
                            swal({
                                title: "تم العمليه",
                                text: 'لقد تمت عمليه التقديم على الشركه',
                                type: "success",
                                confirmButtonText: "عوده"
                            });

                        }
                        else{
                            swal({
                                title: "حدث خطاء ما",
                                text: 'لا يمكن التقديم على هذه الشركه حاليا',
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
