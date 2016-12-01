<!-- Section Breadcumb Start -->
<?php $__env->startSection('breadcumbs'); ?>

<div class="row bg-title">
    <!-- .page title -->
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Send Sms</h4>
    </div>
    <!-- /.page title -->
    <!-- .breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="starter-page.html#">Dashboard</a></li>
            <li class="active">Send Sms</li>
        </ol>
    </div>
    <!-- /.breadcrumb -->
</div>

<?php $__env->stopSection(); ?>
<!-- Section Breadcumb End -->

<!-- Section Content Start -->
<?php $__env->startSection('content'); ?>


<style>

</style>

<link href="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<link href="plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />
<link href="plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
<link href="plugins/bower_components/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">



 <div class="row">
<div class="col-sm-12">
  <div class="white-box p-l-20 p-r-20">
  <h2>Send a Reminder</h2>
    <div class="row">
      <div class="col-md-12">
        <form class="form-material form-horizontal" method="POST" action="<?php echo e(url('send')); ?> ">
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">To:</label>
              <div class="col-md-6">
                <input name="group" type="text" value="<?php echo e($groups); ?>" data-role="tagsinput" placeholder="add tags"/>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Message</label>
              <div class="col-md-6">
                <textarea name="message" class="form-control" rows="3" placeholder="Hi bro dont forget the thing"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Schedule for</label>
              <div class="col-md-6">
                <div class="radio-list">
                  <label class="radio-inline p-0">
                    <div class="radio radio-info">
                      <input type="radio" name="radio" id="now" value="now" >
                  <label for="radio1">Send Immidiatly</label>
                  </div>
                  </label>
                  <label class="radio-inline">
                    <div class="radio radio-info">
                      <input type="radio" name="radio" id="schedule" value="schedule" checked="checked">
                  <label for="radio2">Schedule</label>
                  </div>
                  </label>
                </div>
              </div>
            </div>
        <div id="ctrl" class="">
            <div class="form-group">
              <label class="control-label col-md-3">TimeZone</label>
              <div class="col-md-6">
                <div class="col-sm-12">
                  <select name="tz" class="form-control">
                    <option>GMT</option>
                    <option>UTC</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3"></label>
              <div class="col-md-6">
                <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Schedule For</label>
              <div class="col-md-6">
               <div class="input-group">
                <input name="date" type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy">
                <span class="input-group-addon"><i class="icon-calender"></i></span>
              </div>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Pick Time</label>
              <div class="col-md-6">
               
                <div class="input-group clockpicker">
                  <input name="time" type="text" class="form-control" value="09:30">
                  <span class="input-group-addon"> <span class="glyphicon glyphicon-time"></span> </span> 
                </div>
              </div>
            </div>

                        <div class="form-group">
              <label class="control-label col-md-3"></label>
              <div class="col-md-6">
                <span class="help-block">
                <small>Use this time as a reference</small>
                <div class="body_" id="body_"><div id="timediv"></div></div></span>
              </div>
            </div>

           </div> 




            <div class="col-md-offset-3 col-md-9">
              <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Send</button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<!-- Section Content End -->

<?php $__env->startSection('js'); ?>
<script src="plugins/bower_components/moment/moment.js"></script>
<script src="plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="plugins/bower_components/moment/moment.js"></script>
<!-- Clock Plugin JavaScript -->
<script src="plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js"></script>
<!-- Color Picker Plugin JavaScript -->
<script src="plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
<script src="plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
<script src="plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
<!-- Date Picker Plugin JavaScript -->
<script src="plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- Date range Plugin JavaScript -->
<script src="plugins/bower_components/timepicker/bootstrap-timepicker.min.js"></script>
<script src="plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<script type="text/javascript">
$('#single-input').clockpicker({
  placement: 'bottom',
  align: 'left',
  autoclose: true,
  'default': 'now'

});

$('.clockpicker').clockpicker({
    donetext: 'Done',
    
})
  .find('input').change(function(){
    console.log(this.value);
});

$('#check-minutes').click(function(e){
  // Have to stop propagation here
  e.stopPropagation();
  input.clockpicker('show')
      .clockpicker('toggleView', 'minutes');
});



    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
      });
      
    jQuery('#date-range').datepicker({
        toggleActive: true
      });
    jQuery('#datepicker-inline').datepicker({
        
        todayHighlight: true
      });

// Daterange picker

$('.input-daterange-datepicker').daterangepicker({
          buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-danger',
                cancelClass: 'btn-inverse'
        });

     var interval = setInterval(timestamphome, 1000);
 function timestamphome(){
 var date;
date = new Date();
var offset = Intl.DateTimeFormat().resolvedOptions().timeZone;
 
 var time = document.getElementById('timediv'); 
 time.innerHTML = date.toLocaleTimeString() + ' | Time Zone : ' + offset;


  }

$(document).ready(function() {
   $('input[type="radio"]').click(function() {
       if($(this).attr('id') == 'schedule') {
            $('#ctrl').show("slow");           
       }

       else {
            $('#ctrl').hide("slow");   
       }
   });
});
 </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>