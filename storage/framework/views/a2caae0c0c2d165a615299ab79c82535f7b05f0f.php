 <?php $__env->startSection('breadcumbs'); ?>


<div class="row bg-title">
  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
    <h4 class="page-title">Profile page</h4>
  </div>
  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a></li>
      <li class="active">Profile page</li>
    </ol>
  </div>
</div>

<?php $__env->stopSection(); ?>



<!-- Section Content Start -->
<?php $__env->startSection('content'); ?>

<style>
.fit{
width: 120px;
  
    margin: 0 auto;
    margin-bottom: 10px;

}


</style>
<link rel="stylesheet" href="<?php echo e(asset('css/intlTelInput.css')); ?>">
<div class="row">
  
  <div class="col-md-12 col-xs-12">
    <div class="white-box">
      <ul class="nav nav-tabs tabs customtab">
        <li class="tab">
          <a href="profile.html#home" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-home"></i></span> <span class="hidden-xs">Activity</span> </a>
        </li>
        <li class="tab">
          <a href="profile.html#profile" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Profile</span> </a>
        </li>
        
        <li class="active tab">
          <a href="profile.html#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Settings</span> </a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane" id="home">
          <div class="steamline">
            <div class="sl-item">
              <div class="sl-left"> <img src="../plugins/images/users/genu.jpg" alt="user" class="img-circle" /> </div>
              <div class="sl-right">
                <div class="m-l-40"><a href="profile.html#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                  <p>assign a new task <a href="profile.html#"> Design weblayout</a></p>
                  <div class="m-t-20 row"><img src="../plugins/images/img1.jpg" alt="user" class="col-md-3 col-xs-12" /> <img src="../plugins/images/img2.jpg" alt="user" class="col-md-3 col-xs-12" /> <img src="../plugins/images/img3.jpg" alt="user" class="col-md-3 col-xs-12"
                    /></div>
                </div>
              </div>
            </div>
            <hr>
            <div class="sl-item">
              <div class="sl-left"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle" /> </div>
              <div class="sl-right">
                <div class="m-l-40"> <a href="profile.html#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                  <div class="m-t-20 row">
                    <div class="col-md-2 col-xs-12"><img src="../plugins/images/img1.jpg" alt="user" class="img-responsive" /></div>
                    <div class="col-md-9 col-xs-12">
                      <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus
                        sed augue semper porta. Mauris massa</p>
                      <a href="profile.html#" class="btn btn-success"> Design weblayout</a></div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="sl-item">
              <div class="sl-left"> <img src="../plugins/images/users/ritesh.jpg" alt="user" class="img-circle" /> </div>
              <div class="sl-right">
                <div class="m-l-40"><a href="profile.html#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                  <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed
                    augue semper </p>
                </div>
              </div>
            </div>
            <hr>
            <div class="sl-item">
              <div class="sl-left"> <img src="../plugins/images/users/govinda.jpg" alt="user" class="img-circle" /> </div>
              <div class="sl-right">
                <div class="m-l-40"><a href="profile.html#" class="text-info">John Doe</a> <span class="sl-date">5 minutes ago</span>
                  <p>assign a new task <a href="profile.html#"> Design weblayout</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="profile">
          <div class="row">
            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong> <br>
              <p class="text-muted">Johnathan Deo</p>
            </div>
            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong> <br>
              <p class="text-muted">(123) 456 7890</p>
            </div>
            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong> <br>
              <p class="text-muted">johnathan@admin.com</p>
            </div>
            <div class="col-md-3 col-xs-6"> <strong>Location</strong> <br>
              <p class="text-muted">London</p>
            </div>
          </div>
          <hr>
          <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean
            vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries </p>
          <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <h4 class="font-bold m-t-30">Skill Set</h4>
          <hr>
          <h5>Wordpress <span class="pull-right">80%</span></h5>
          <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">50% Complete</span> </div>
          </div>
          <h5>HTML 5 <span class="pull-right">90%</span></h5>
          <div class="progress">
            <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">50% Complete</span> </div>
          </div>
          <h5>jQuery <span class="pull-right">50%</span></h5>
          <div class="progress">
            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span> </div>
          </div>
          <h5>Photoshop <span class="pull-right">70%</span></h5>
          <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">50% Complete</span> </div>
          </div>
        </div>
        <div class="tab-pane  active" id="settings">
          <div class="row">

            
          <?php echo Form::model($user, [ 'method' => 'PUT', 'url' => ['profil/update', $user->id], 'class' => 'form-horizontal form-material','files' => true ]); ?>

          <?php if(Session::has('flash_message')): ?>
          <div class="form-group">
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <?php echo e(Session::get('flash_message')); ?> </div>
          </div>
          <?php endif; ?>
          <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="panel panel-inverse">
              <div class="panel-heading"> Account informations
                <div class="pull-right"><a href="panels-wells.html#" data-perform="panel-collapse"><i class="ti-minus"></i></a> </div>
              </div>
              <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body">


                  <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                    <?php echo Form::label('email', 'Email', ["for"=>"email" , "class"=>"col-md-12"]); ?>

                    <div class="col-sm-6">
                      <?php echo Form::text('email', null, ["id"=>"email", "type"=>"email", "name"=>"email", "class"=>"form-control form-control-line"]); ?> <?php echo $errors->first('email', '
                      <p class="help-block">:message</p>'); ?>

                    </div>
                  </div>

                  <div class="form-group <?php echo e($errors->has('firstname') ? 'has-error' : ''); ?>">
                    <?php echo Form::label('firstname', 'First Name', ["for"=>"firstname" , "class"=>"col-md-12"]); ?>

                    <div class="col-sm-6">
                      <?php echo Form::text('firstname', null, ["id"=>"firstname", "type"=>"firstname", "name"=>"firstname", "class"=>"form-control form-control-line"]); ?> <?php echo $errors->first('firstname', '
                      <p class="help-block">:message</p>'); ?>

                    </div>
                  </div>

                  <div class="form-group <?php echo e($errors->has('lastname') ? 'has-error' : ''); ?>">
                    <?php echo Form::label('lastname', 'Last Name', ["for"=>"lastname" , "class"=>"col-md-12"]); ?>

                    <div class="col-sm-6">
                      <?php echo Form::text('lastname', null, ["id"=>"lastname", "type"=>"lastname", "name"=>"lastname", "class"=>"form-control form-control-line"]); ?> <?php echo $errors->first('lastname', '
                      <p class="help-block">:message</p>'); ?>

                    </div>
                  </div>


                  <div class="col-md-12 m-b-20">
                    <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light pull-right"><span><i class="ion-upload m-r-5"></i>Upload Avatar</span>
                      <input type="file" class="upload" name="avatar">
                    </div>
                    <div><img src="<?php echo e($user->avatar != null ? asset('uploads/avatars/'. $user->avatar) : asset('placeholder.png')); ?>" alt="user-img" class="img-circle fit"></div>
                  </div>

                  <div class="col-sm-12">
                    <?php echo Form::submit('Update', ['class' => 'btn btn-success ']); ?>

                  </div>

                </div>
              </div>
            </div>
          </div>






          <hr></hr>
          <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="panel panel-inverse">
              <div class="panel-heading"> Change Password
                <div class="pull-right"><a href="panels-wells.html#" data-perform="panel-collapse"><i class="ti-plus"></i></a> </div>
              </div>
              <div class="panel-wrapper collapse" aria-expanded="true">
                <div class="panel-body">

                  <div class="form-group <?php echo e($errors->has('oldpassword') ? 'has-error' : ''); ?>">
                    <?php echo Form::label('oldpassword', 'Old password', ["for"=>'oldpassword' , "class"=>"col-md-12"]); ?>

                    <div class="col-sm-6">
                      <?php echo Form::password('oldpassword', ["id"=>'oldpassword', "type"=>'oldpassword', "name"=>'oldpassword', "class"=>"form-control form-control-line"]); ?> <?php echo $errors->first('oldpassword', '
                      <p class="help-block">:message</p>'); ?>

                    </div>
                  </div>

                  <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                    <?php echo Form::label('password', 'New Password', ["for"=>'password' , "class"=>"col-md-12"]); ?>

                    <div class="col-sm-6">
                      <?php echo Form::password('password', ["id"=>'password', "type"=>'password', "name"=>'password', "class"=>"form-control form-control-line"]); ?> <?php echo $errors->first('password', '
                      <p class="help-block">:message</p>'); ?>

                    </div>
                  </div>

                  <div class="form-group <?php echo e($errors->has('password_confirmation') ? 'has-error' : ''); ?>">
                    <?php echo Form::label('password_confirmation', 'Confirm new password', ["for"=>'password_confirmation' , "class"=>"col-md-12"]); ?>

                    <div class="col-sm-6">
                      <?php echo Form::password('password_confirmation', ["id"=>'password_confirmation', "type"=>'password_confirmation', "name"=>'password_confirmation', "class"=>"form-control form-control-line"]); ?> <?php echo $errors->first('password_confirmation',
                      '
                      <p class="help-block">:message</p>'); ?>

                    </div>
                  </div>

                  <div class="col-sm-12">
                    <?php echo Form::submit('Update', ['class' => 'btn btn-success ']); ?>

                  </div>

                </div>
              </div>
            </div>
          </div>

          <hr></hr>

          <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="panel panel-inverse">
              <div class="panel-heading"> Edit Details
                <div class="pull-right"><a href="panels-wells.html#" data-perform="panel-collapse"><i class="ti-plus"></i></a> </div>
              </div>
              <div class="panel-wrapper collapse" aria-expanded="true">
                <div class="panel-body">
                  <div class="form-group ">
                    <label class="col-sm-12">Country</label> <?php echo Form::select('country', $countries,$user->country,["class"=>"form-control form-control-line", "id"=> "country" , "onChange"=> "getState(this.value);" ]);; ?>

                  </div>
                  <div class="form-group ">
                    <label class="col-sm-12">state</label> <?php echo Form::select('state', array($user->state) ,null,["class"=>"form-control form-control-line", "id"=> "state" ,"onChange"=> "getCity(this.value);" ]);; ?>

                  </div>
                  <div class="form-group ">
                    <label class="col-sm-12">city</label> <?php echo Form::select('city', array($user->city) ,null,["class"=>"form-control form-control-line", "id"=> "city" ]);; ?>

                  </div>

                  <?php if($user->type == 'business'): ?>

                  <div class="form-group ">
                    <label class="col-sm-12">Business type</label> <?php echo Form::select('btype', ['1' => '1', '2' => '2'], $user->btype,["class"=>"form-control form-control-line", "id"=> "btype" ]);; ?>

                  </div>
                  <div class="form-group <?php echo e($errors->has('bname') ? 'has-error' : ''); ?>">
                    <?php echo Form::label('bname', 'Business name', ["for"=>"bname" , "class"=>"col-md-12"]); ?>

                    <div class="col-sm-6">
                      <?php echo Form::text('bname', null, ["id"=>"bname", "type"=>"bname", "name"=>"bname", "class"=>"form-control form-control-line"]); ?> <?php echo $errors->first('bname', '
                      <p class="help-block">:message</p>'); ?>

                    </div>
                  </div>
                  <?php endif; ?>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <?php echo Form::submit('Update', ['class' => 'btn btn-success ']); ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>




          <hr></hr>

          <div class="col-lg-12 col-sm-12 col-md-12">
            <div class="panel panel-inverse">
              <div class="panel-heading"> Phone number Details
                <div class="pull-right"><a href="panels-wells.html#" data-perform="panel-collapse"><i class="ti-plus"></i></a> </div>
              </div>
              <div class="panel-wrapper collapse" aria-expanded="true">
                <div class="panel-body">


                  <?php echo Form::label('phone_number', 'Phone Number', ["for"=>"phone_number" , "class"=>"col-md-12"]); ?>

                  <div class="col-sm-6">
                    <?php echo Form::text('phone_number', null, ["id"=>"phone_number", "type"=>"tel", "name"=>"phone_number", "class"=>"form-control form-control-line"]); ?> <?php echo $errors->first('phone_number', '
                    <p class="help-block">:message</p>'); ?>

                    <p class="help-block">Choose your country and dont include dial code</p>
                  </div>
                  <div class="col-sm-12">
                    <?php echo Form::submit('Update', ['class' => 'btn btn-success ']); ?>

                  </div>

                </div>
              </div>
            </div>
          </div>
          

          <?php echo Form::close(); ?> <?php if($errors->any()): ?>
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
</div>
<!-- /.row -->

<?php $__env->stopSection(); ?>
<!-- Section Content End -->


<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('js/intlTelInput.js')); ?>"></script>utils
<script src="<?php echo e(asset('js/utils.js')); ?>"></script>
<?php echo $__env->make('landing.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>