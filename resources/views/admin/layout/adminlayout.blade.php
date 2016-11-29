<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Favicon icon -->
      <link rel="icon" type="image/png" sizes="16x16" href="http://themedesigner.in/demo/eliteadmin-package/plugins/images/favicon.png">
      <title>Elite Admin - is a responsive admin template</title>
      <!-- Bootstrap Core CSS -->
     @include('admin.partials.css')
</head>
   <body class="fix-sidebar">
      <!-- Preloader -->
      <div class="preloader">
         <div class="cssload-speeding-wheel"></div>
      </div>
    <div id="wrapper">
         <!-- Top Navigation -->
         @include('admin.partials.top-navbar')
         <!-- End Top Navigation -->
         <!-- Left navbar-header -->
        @include('admin.partials.left-navbar')
         <!-- Left navbar-header end -->


         <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">


            @yield('breadcumbs')

               <!-- .row -->
            @yield('content')
               <!-- .row -->


               
               <!-- .right-sidebar -->
               @include('admin.partials.chat-sidebar')
               <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2016 &copy; Elite Admin brought to you by themedesigner.in </footer>
        </div>
         <!-- /#page-wrapper -->
    </div>
      <!-- /#wrapper -->

      <!-- Scripts -->
     @include('admin.partials.js')

     <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
        });

       </script>
        @yield('js');
   </body>
</html>