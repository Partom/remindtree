 <?php $__env->startSection('breadcumbs'); ?>


<div class="row bg-title">
  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
    <h4 class="page-title">Profile page</h4>
  </div>
  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a></li>
      <li> <a href="<?php echo e(url('/teams')); ?>">teams</a></li>
      <li class="active">Edit team</li>
    </ol>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="white-box">

    <h1>Edit team <?php echo e($team->id); ?></h1>

    <?php echo Form::model($team, [
        'method' => 'PATCH',
        'url' => ['/teams', $team->id],
        'class' => 'form-horizontal',
        'files' => true
    ]); ?>


                    <div class="form-team <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                <?php echo Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>


        <div class="form-team">
            <div class="col-sm-offset-3 col-sm-3">
                <?php echo Form::submit('Update', ['class' => 'btn btn-primary form-control']); ?>

            </div>
        </div>
    <?php echo Form::close(); ?>


    <?php if($errors->any()): ?>
        <ul class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </ul>
    <?php endif; ?>

</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>