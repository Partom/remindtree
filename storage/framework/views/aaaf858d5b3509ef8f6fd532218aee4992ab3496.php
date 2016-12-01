 <?php $__env->startSection('header'); ?> <?php echo $__env->make('landing.sections.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php $__env->stopSection(); ?> <?php $__env->startSection('form'); ?>
<style>
    .wrapper {
        width: 900px;
        max-width: 100%;
        margin: auto;
    }
    
    form.multi-form {
        padding: 20px;
    }
    
    form.multi-form fieldset:not(.active) {
        display: none;
    }
    
    form.multi-form fieldset.active:first-of-type~ .buttons .prev,
    form.multi-form fieldset.active:first-of-type~ .buttons .submit {
        display: none;
    }
    
    form.multi-form fieldset.active:not(:last-of-type)~ .buttons .submit {
        display: none;
    }
    
    form.multi-form fieldset.active:last-of-type~ .buttons .next {
        display: none;
    }
    
    select.btn-mini {
        height: auto;
        line-height: 14px;
    }
    /* this is optional (see below) */
    
    select.btn {
        -webkit-appearance: button;
        -moz-appearance: button;
        appearance: button;
        padding-right: 16px;
    }
    
    select.btn-mini+ .caret {
        margin-left: -20px;
        margin-top: 9px;
    }
    
    .form-inline .form-group {
        margin-right: 10px;
    }
    
    .well-primary {
        color: rgb(255, 255, 255);
        /* background-color: rgb(66, 139, 202); */
        border-color: rgb(53, 126, 189);
    }
    
    .gorigh {
        float: right;
    }
    
    .glyphicon {
        margin-right: 5px;
    }
    
    .helpp {
        margin-left: 10px;
    }
    
    .hideme {
        display: none;
    }
.panel, .panel-group .panel-heading+.panel-collapse>.panel-body{
    border-color: #007EE5;
}


    
    

    .actives{
        background: #007EE5;
        background-image: -webkit-linear-gradient(top, #007EE5, #2980b9);
        background-image: -moz-linear-gradient(top, #007EE5, #2980b9);
        background-image: -ms-linear-gradient(top, #007EE5, #2980b9);
        background-image: -o-linear-gradient(top, #007EE5, #2980b9);
        background-image: linear-gradient(to bottom, #007EE5, #2980b9);
        -webkit-border-radius: 28;
        -moz-border-radius: 28;
        /*border-radius: 28px; */
        font-family: Arial;
        color: #ffffff;
       /* font-size: 20px; */
        padding: 10px 20px 10px 20px;
        text-decoration: none;
}
    
   /* .panel-default>.panel-heading:hover {
        background: #3cb0fd;
        background-image: -webkit-linear-gradient(top, #3cb0fd, #007EE5);
        background-image: -moz-linear-gradient(top, #3cb0fd, #007EE5);
        background-image: -ms-linear-gradient(top, #3cb0fd, #007EE5);
        background-image: -o-linear-gradient(top, #3cb0fd, #007EE5);
        background-image: linear-gradient(to bottom, #3cb0fd, #007EE5);
        text-decoration: none;
    }
        .panel-default>.panel-heading:active {
        background: #007EE5;
        background-image: -webkit-linear-gradient(top, #007EE5, #2980b9);
        background-image: -moz-linear-gradient(top, #007EE5, #2980b9);
        background-image: -ms-linear-gradient(top, #007EE5, #2980b9);
        background-image: -o-linear-gradient(top, #007EE5, #2980b9);
        background-image: linear-gradient(to bottom, #007EE5, #2980b9);
        -webkit-border-radius: 28;
        -moz-border-radius: 28;
        border-radius: 28px;
        font-family: Arial;
        color: #ffffff;
        font-size: 20px;
        padding: 10px 20px 10px 20px;
        text-decoration: none;
    }*/
</style>




<div style="padding-top: 100px;">
    <div class="left-content" data-scroll-index="4">
        <div class="container-fluid">
            <div class="row hidden-xs">
                <center id="ttl">
                    <h1 class="text-info">Create An account</h1></center>
            </div>
            <hr></hr>
            <div class="row">
                <div class="col-lg-6 col-md-6 no-padding">
                    <div class="left-content-content">
                        <h1>Have the power to change <br /> your result</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrudiorama excertitation monumni elit adipiiscing
                            ipsum tantularism managerism costiputat negeri sejuta pulau.</p>

                    </div>
                </div>
                <!-- /End Column -->
                <div class="row visible-xs">
                    <center id="ttl2">
                        <h1 class="text-info">Create An account</h1></center>
                </div>

                <div class="col-lg-6 col-md-6 no-padding">
                    <div class="left-content-image">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger" id="errors">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </ul>
    </div>
<?php endif; ?>


<form id="userreg" class="form-material" data-toggle="validator" method="POST" action="<?php echo e(url('/register')); ?>">
 <?php echo csrf_field(); ?>



                                        <div class="panel-group" id="accordion">
                                            <div class="panel panel-default">
                                                <div class="panel-heading actives">
                                                    <h4 class="panel-title actives">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="fa fa-unlock fa-fw">
                            </span>Account Details</a>
                        </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="form-group ">
                                                              
                                                                <div class="col-md-12 col-lg-12">
                                                                    <input id="email" type="email" name="email" class="form-control form-control-line" placeholder="jon-doe@email.com" data-error="Unvalid email address" required>
                                                                    <div class="help-block with-errors"></div>

                                                                </div>
                                                            </div>

                                                            <div class="form-group ">
                                                                
                                                                <div class="col-md-12 col-lg-12">
                                                                    <input type="password" class="form-control form-control-line" id="password" name="password" placeholder="password" data-error="You need to set a password" required>
                                                                    <div class="help-block with-errors"></div>

                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                
                                                                <div class="col-md-12 col-lg-12">
                                                                    <input type="password" class="form-control form-control-line" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" data-error="You need to Confirm your password" required>
                                                                    <div class="help-block with-errors"></div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th-list">
                            </span>ADDITIONAL INFO</a>
                        </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12">
                                                                <div class="form-group">
                                                                 
                                                                    <div class="col-md-12 col-lg-12">
                                                                        <input type="text" id="firstname" name="firstname" class="form-control form-control-line" placeholder="Your Firstname" data-error="Enter a valid First Name" required>
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group ">
                                                                 
                                                                    <div class="col-md-12 col-lg-12">
                                                                        <input type="text" id="lastname" name="lastname" class="form-control form-control-line" placeholder="Your Lastname" data-error="Enter a valid First Name" required>
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <?php if(Request::is('bregister')): ?>
                                                                <div class="form-group ">
                                                                    <label class="col-sm-12">Buisness Type</label>
                                                                    <div class="col-sm-12">
                                                                        <select id="btype" name="btype" class="form-control form-control-line" data-error="You have to choose one" required>
                                                            <div class="help-block with-errors"></div>
                            <option value="sports">Sports</option>
                            <option value="movies">Movies</option>
                            <option value="programming">Programming</option>
                            <option value="entreprise">Entreprise</option>
                            <option value="whatelse">WHATELSE</option>
                        </select>
                                                                    </div>
                                                                </div>


                                                                <div class="form-group ">
                                                                 
                                                                    <div class="col-md-12 col-lg-12">
                                                                        <input type="text" id="bname" name="bname" class="form-control form-control-line" placeholder="Business Name" data-error="Enter a valid Business name" required>
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                

                                                                <?php endif; ?>
                                                                <div class="form-group ">
                                                                   
                                                                    <div class="col-md-12 col-lg-12">
                                                                        <input type="text" id="address" name="address" class="form-control form-control-line" placeholder="Address" data-error="Enter a valid Address" required>
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>

                                                               
            <div class="form-group ">
               <label class="col-sm-12">Country</label>
            <?php echo Form::select('country', $countries,null,["class"=>"form-control form-control-line", "id"=> "country" , "onChange"=> "getState(this.value);" ,"data-error"=>"You have to choose one" ,"required"]);; ?>

            </div>
            <div class="form-group ">
               <label class="col-sm-12">state</label>
            <?php echo Form::select('state', array() ,null,["class"=>"form-control form-control-line", "id"=> "state" ,"onChange"=> "getCity(this.value);" ,"data-error"=>"You have to choose one" ,"required"]);; ?>

            </div>
            <div class="form-group ">
               <label class="col-sm-12">city</label>
            <?php echo Form::select('city', array() ,null,["class"=>"form-control form-control-line", "id"=> "city"  ,"data-error"=>"You have to choose one" ,"required"]);; ?>

            </div>





                                                                <div class="form-group ">
                                                                   
                                                                    <div class="col-md-12 col-lg-12">
                                                                        <input type="text" id="zipcode" name="zipcode" class="form-control form-control-line" placeholder="5100" data-error="Enter a valid ZipCode" required>
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>


                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="fa fa-mobile-phone fa-fw">
                            </span>Phone Details</a>
                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                
                                                                   
                                                                    <div class="col-md-10 col-lg-12">
                 <?php echo Form::text('phone_number', null, ["id"=>"phone_number", "type"=>"tel", "name"=>"phone", "class"=>"form-control form-control-line", "data-error"=>"Unvalid First name" , "required"]); ?>

                    <?php echo $errors->first('phone_number', '<p class="help-block">:message</p>'); ?>

                    <p class="help-block">Choose your country and dont include dial code</p>
                                                                    </div>
                                                               
                                                            </div>
<input type="hidden" name="phone_number" id="fnumber">
                                                            <div class="row">
                                                                <div class="col-md-12 col-lg-12">
                                                                    <div class="">
                                                                        <div class="form-group pull-right">
                                                                            <a id="verifynewuser" class="btn btn-success "><span class="">
                                            </span>Verify me</a>
                                                                        </div>

                                                                    </div>

                                                                    <div class="row hideme" id="verif_animation">

                                                                        <div class="form-group ">
                                                                            <div class="helpp">
                                                                                <span class="help-block "><small>You will recieve an sms shortly <i class="fa fa-fw fa-info-circle"></i></small></span>
                                                                            </div>
                                                                            <label class="col-md-12 col-lg-12">Verification Code</label>
                                                                            <div class="col-md-4">
                                                                                <input type="tel" id="verif_code" name="verif_code" class="form-control" placeholder="Verification Code">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row hideme" id="signupbt">
                                                                <hr></hr>


                                                                <div class="form-group">
                                                                    <button id="signupuser" type="submit" class="btn btn-info center-block" style="width: 80%;"><span class="">
                                            </span>Sign me up</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /End Column -->
            </div>
            <!-- /End Row -->
        </div>
        <!-- /End Container -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<!-- Content end -->

<!-- /Start Subscribe -->
<?php $__env->startSection('subscribe'); ?> <?php echo $__env->make('landing.sections.subscribe', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php $__env->stopSection(); ?>
<!-- /End Subscribe -->

<!-- /Start Footer -->
<?php $__env->startSection('footer'); ?> <?php echo $__env->make('landing.sections.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php $__env->stopSection(); ?>
<!-- /End Footer -->



<!-- /Start Custom Js -->

<?php $__env->startSection('js'); ?>
<?php echo $__env->make('landing.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('landing.layout.homelayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>