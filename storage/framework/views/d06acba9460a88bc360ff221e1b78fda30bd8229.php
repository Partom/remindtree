 <?php $__env->startSection('breadcumbs'); ?>


<div class="row bg-title">
  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
    <h4 class="page-title">Profile page</h4>
  </div>
  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a></li>
        <li><a href="<?php echo e(url('/groups')); ?>">Groups</a></li>
       <li class="active">Member</li>
    </ol>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style>
.glyphicon:before {
  margin-right: 5px;
}
.ss { 
    word-spacing: -5px;
}
</style>


<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="white-box">

    <h1>Groups </h1>

    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Name </th><th> Members Count </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->users->count()); ?></td>
                    <td>
                      
                        <a href="<?php echo e(url('/groups/' . $item->id)); ?>" class="btn btn-success btn-xs" title="View Group"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                          <?php if(Auth::user()->id == $item->owner_id): ?>
                        <a href="<?php echo e(url('/groups/' . $item->id . '/edit')); ?>" class="btn btn-primary btn-xs" title="Edit Group"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['/groups', $item->id],
                            'style' => 'display:inline'
                        ]); ?>

                            <?php echo Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Group" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Group',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            )); ?>

                        <?php echo Form::close(); ?>

                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </tbody>
        </table>
        <div class="pagination-wrapper"> <?php echo $groups->render(); ?> </div>
    </div>

        </div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>