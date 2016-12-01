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
     <?php echo $__env->make('admin.partials.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
   <body class="fix-sidebar">
      <!-- Preloader -->
      <div class="preloader">
         <div class="cssload-speeding-wheel"></div>
      </div>
    <div id="wrapper">
         <!-- Top Navigation -->
         <?php echo $__env->make('admin.partials.top-navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
         <!-- End Top Navigation -->
         <!-- Left navbar-header -->
        <?php echo $__env->make('admin.partials.left-navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
         <!-- Left navbar-header end -->


         <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">


            <?php echo $__env->yieldContent('breadcumbs'); ?>

               <!-- .row -->
            <?php echo $__env->yieldContent('content'); ?>
               <!-- .row -->


               
               <!-- .right-sidebar -->
               <?php echo $__env->make('admin.partials.chat-sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
               <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2016 &copy; Elite Admin brought to you by themedesigner.in </footer>
        </div>
         <!-- /#page-wrapper -->
    </div>
      <!-- /#wrapper -->

      <!-- Scripts -->
     <?php echo $__env->make('admin.partials.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

     <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
        });

       </script>
        <?php echo $__env->yieldContent('js'); ?>;
   </body>
</html>