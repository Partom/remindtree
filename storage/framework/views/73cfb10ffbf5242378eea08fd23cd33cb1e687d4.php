 <?php $__env->startSection('breadcumbs'); ?>


<div class="row bg-title">
  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
    <h4 class="page-title">Profile page</h4>
  </div>
  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a></li>
      <li> <a href="<?php echo e(url('/groups')); ?>">Groups</a></li>
      <li class="active">Show Group</li>
    </ol>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<style>
.sp {
margin-right: 5px;

}

  </style>
<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="white-box">

    <h1>Group <span id="grp-title-name"><?php echo e($group->name); ?></span>
         <?php if(Auth::user()->id == $group->owner_id): ?>
         
        <a  class="btn btn-primary btn-xs" title="Edit Group" data-toggle="modal" data-target="#rename-modal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        <?php echo Form::open([
            'method'=>'DELETE',
            'url' => ['groups', $group->id],
            'style' => 'display:inline'
        ]); ?>

            <?php echo Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete Group',
                    'onclick'=>'return confirm("Confirm delete?")'
            )); ?>

        <?php echo Form::close(); ?>

        <?php endif; ?>
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td><?php echo e($group->id); ?></td>
                </tr>
                <tr><th> Group Name </th><td id="grp-name" > <?php echo e($group->name); ?> </td></tr>
                 <tr><th> Members Count </th><td> <?php echo e($group->users->count()); ?> </td></tr>
            </tbody>
        </table>
    </div>
  
    







<div class="right-aside2">
                        <div class="right-page-header">
                          <h2>Members</h2>
                          <h4>Add Members </h4>
                         
<?php echo Form::hidden('group_id', $group->id , ['class' => 'form-control','name' => 'group_id','id' => 'group_id' ]); ?>

<div class="input-group m-t-10 col-lg-9 col-md-9">
   <input id="useremail" type="email" name="email" class="form-control form-control" placeholder="New user email" data-error="Unvalid email address" required>
<span class="input-group-btn">


       <button type="button" class="btn btn-info btn-rounded " id="adduser"><span id="spinner" class=""></span>Add New Contact</button>
</span> <div class="help-block with-errors "></div> </div>

                            <div class="col-xs-12 hidden-lg hidden-md" style="height:50px;"></div>      

                    <div class="pull-right"><input type="text" id="demo-input-search2" placeholder="search contacts" class="form-control"></div>
                        </div>
   <div class="col-xs-12 hidden-lg hidden-md" style="height:50px;"></div>
                        <div class="clearfix"></div>
                        <div class="scrollable">
                            <div class="table-responsive">
                                <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                  <thead>
                                    <tr>

                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Phone</th>
                                      <th>Type</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <tr>
                                      <td><a href="users/<?php echo e($user->id); ?>">
                                      <?php if($user->avatar == null): ?>
                                      <img src="<?php echo e(url('uploads/avatars/placeholder.png')); ?>" alt="user" class="img-circle"/>
                                      <?php else: ?>
                                      <img src="<?php echo e(url('uploads/avatars/'.$user->avatar)); ?>" alt="user" class="img-circle"/>
                                      <?php endif; ?>
                                       <?php echo e($user->getname()); ?></a></td>
                                      <td><?php echo e($user->email); ?></td>
                                      <td><?php echo e($user->phone_number); ?></td>
                                      <td><span class="label label-danger"><?php echo e($user->type); ?></span> </td>
                                        <?php echo Form::open(['url' => 'groups/removeuser', 'class' => 'form-horizontal', 'Method' => 'POST']); ?>

                                      <td><button type="submit" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button></td>
                                      <input type="hidden" name="group_id" value="<?php echo e($group->id); ?>">
                                      <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                                      <?php echo Form::close(); ?>

                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                        <td colspan="7"><div class="text-right">
                                            <ul class="pagination">
                                            </ul>
                                          </div></td>
                                      </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>















</div>
</div>
</div>
</div>

<div id="rename-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Rename Group</h4>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="control-label">New name</label>
                        <input type="text" class="form-control" id="group-name">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button id="rename" type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>







<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<script>


$(document).on('click', '#adduser', function() {
 
  $( "#spinner").addClass("fa fa-spinner fa-spin");
     var email = $( "#useremail").val();
     var group_id = $( "#group_id").val();
        $.ajax({
            type: 'POST',
            url: '/groups/adduser',
            data: {'email':email, 'group_id':group_id},
            success: function(data) {
                 console.log(data.data)
                if(data.status == 'success')
                {

                    var controls = '<form method="POST" action="<?php echo e(url("groups/removeuser")); ?> " accept-charset="UTF-8" class="form-horizontal"></form><td><button type="submit" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button></td><input type="hidden" name="group_id" value="'+group_id+'"><input type="hidden" name="user_id" value="'+data.data.id+'"></form>';


                $('#demo-foo-addrow > tbody ').prepend('<tr><td>'+ data.data.firstname + ' '+ data.data.lastname  + '</td><td>'+ data.data.email +'</td><td>'+ data.data.phone_number +'</td><td>'+ data.data.type +'</td>'            +controls+'</tr>');
                $( "#add-contact").modal('hide');
                $( "#useremail").val('');
                $( "#emptytable").addClass('hidden');
                $( "#pagination").removeClass('hidden');
                }
                else
                {
                    console.log('add name')
                }
                
                $( "#spinner").removeClass("fa fa-spinner fa-spin");
            },
            error: function(data) {
               console.log(data);
                               $( "#spinner").removeClass("fa fa-spinner fa-spin");
            }
        });
        return false;
    });



$(document).on('click', '#rename', function() {

     var name = $( "#group-name").val();
     var gp_id = $( "#group_id").val();

        $.ajax({
            type: 'PATCH',
            url: '/groups/'+gp_id,
            data: {'name':name},
            success: function(data) {
              console.log(data);
              $( "#rename-modal").modal('hide');
               $( "#grp-name").text(data.name);
                $( "#grp-title-name").text(data.name);
            },
            error: function(data) {
               
            }
        });
        return false;
    });






</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>