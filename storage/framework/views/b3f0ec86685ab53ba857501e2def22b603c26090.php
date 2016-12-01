<!-- Section Breadcumb Start -->
<?php $__env->startSection('breadcumbs'); ?>

<div class="row bg-title">
    <!-- .page title -->
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Dashboard</h4>
    </div>
    <!-- /.page title -->
    <!-- .breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="starter-page.html#">Dashboard</a></li>
            <li class="active">Starter Page</li>
        </ol>
    </div>
    <!-- /.breadcrumb -->
</div>

<?php $__env->stopSection(); ?>
<!-- Section Breadcumb End -->

<!-- Section Content Start -->
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Blank Starter page</h3>
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>
<!-- Section Content End -->
<?php echo $__env->make('admin.layout.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>