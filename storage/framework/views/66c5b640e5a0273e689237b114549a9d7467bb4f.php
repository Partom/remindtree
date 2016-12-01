 <?php $__env->startSection('breadcumbs'); ?>
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Manage Contacts</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a></li>
            <li class="active">Contacts</li>
        </ol>
    </div>
</div>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<style>
.table-sortable tbody tr {
cursor: move;
}
</style>
<link href="<?php echo e(asset('plugins/bower_components/tablesaw-master/dist/tablesaw.css')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.css')); ?> " rel="stylesheet" />


<div class="white-box">
    <div class="sttabs tabs-style-linetriangle">
        <nav>
            <ul>
                <li class="tab-current"><a href="#section-linetriangle-1"><span>View Contacts</span></a></li>
                <li class=""><a href="#section-linetriangle-2"><span>Add Contacts</span></a></li>
            </ul>
        </nav>
        <div class="content-wrap">
            <section id="section-linetriangle-1" class="content-current">
                <h2>Tabbing 2</h2>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="stack" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>
                                <thead>
                                    <tr>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Name</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Phone</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Email</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1"><abbr title="Rotten Tomato Rating">Group</abbr></th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                                    <tr>
                                        <td class="title"><a href="javascript:void(0)"><?php echo e($contact->getName()); ?></a></td>
                                        <td><?php echo e($contact->phone_number); ?></td>
                                        <td><?php echo e($contact->email); ?></td>
                                        <td>
                                            <select class="selectpicker bs-select-hidden" multiple="" data-style="form-control">
                                                <?php $__currentLoopData = $groupi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                <option <?php echo e((in_array($group,$contact->groups->pluck('name', 'id')->toarray() )) ? "selected" : ""); ?>><?php echo e($group); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                            </select>

                                        </td>
                                        <td><?php echo e($contact->created_at); ?></td>
                                        <td>
                                            <?php echo Form::open([
                                            'method'=>'DELETE',
                                            'url' => ['/contacts', $contact->id],
                                            'style' => 'display:inline'
                                            ]); ?>

                                            <?php echo Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Group" />', array( 'type' => 'submit', 'id' => 'deleteme', 'class' => 'btn btn-danger btn-xs', 'title' => 'Delete Group',
                                                )); ?>

                                                <?php echo Form::close(); ?>

                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </section>
                <section id="section-linetriangle-2" class="">
                    <h3>Choose Contacts to add</h3>
                    <div class="row clearfix">
                        <div class="col-md-12 table-responsive">
                            <?php echo Form::open(['url' => '/groups/adduser', 'class' => 'form-horizontal', 'Method' => 'POST']); ?>

                            <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            Phone number
                                        </th>
                                        <th class="text-center">
                                            Email
                                        </th>
                                        <th class="text-center">
                                            First name
                                        </th>
                                        <th class="text-center">
                                            Last name
                                        </th>
                                        
                                        <th class="text-center" style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id='addr0' data-id="0" class="hidden">
                                        <td data-name="phone_number">
                                            <?php echo Form::text('email', null, ['class' => 'form-control' ,'name'=>'phone_number[0]' , 'placeholder'=>'Phone number']); ?>

                                        </td>
                                        <td data-name="email">
                                            <?php echo Form::email('email', null, ['class' => 'form-control','name'=>'email[0]' , 'placeholder'=>'Email']); ?>

                                        </td>
                                        <td data-name="firstname">
                                            <?php echo Form::text('firstname', null, ['class' => 'form-control','name'=>'firstname[0]' , 'placeholder'=>'FirstName (optional)']); ?>

                                        </td>
                                        <td data-name="lastname">
                                            <?php echo Form::text('lastname', null, ['class' => 'form-control','name'=>'lastname[0]' , 'placeholder'=>'LastName (optional)']); ?>

                                        </td>
                                        
                                        <td data-name="del">
                                            <button nam "del0" class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <hr>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-12">Groups</label> <?php echo Form::select('group_id', $groups,null,["class"=>"form-control form-control-line", "id"=> "Groups",'name' => 'group_id' ]);; ?>

                    </div>
                    <a id="add_row" class="btn btn-info pull-right">Add More</a>
                    <div style="padding-top 50px;">
                        <div class="form-group pull-right">
                            <div class="col-sm-12">
                                <?php echo Form::submit('Save', ['class' => 'btn btn-success']); ?>

                            </div>
                        </div>
                        <div class="form-group pull-left">
                            <div class="col-sm-12">
                                <?php echo Form::button('Cancel', ['class' => 'btn btn-danger']); ?>

                            </div>
                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                </section>
            </div>
            <!-- /content -->
        </div>
    </div>
    <?php $__env->stopSection(); ?> <?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('admin_assets/js/cbpFWTabs.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_assets/js/jquery-ui.min.js')); ?> "></script>
    <script src=" <?php echo e(asset('plugins/bower_components/tablesaw-master/dist/tablesaw.js')); ?> "></script>
    <script src="<?php echo e(asset('plugins/bower_components/tablesaw-master/dist/tablesaw-init.js')); ?>"></script>


<script src="plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>




    <script type="text/javascript">
    (function() {
    [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
    new CBPFWTabs(el);
    });
    })();
    $(document).ready(function() {
    $("#add_row").on("click", function() {
    // Dynamic Rows Code
    // Get max row id and set new id
    var newid = 0;
    $.each($("#tab_logic tr"), function() {
    if (parseInt($(this).data("id")) > newid) {
    newid = parseInt($(this).data("id"));
    }
    });
    newid++;
var tr = $("<tr></tr>", {
id: "addr" + newid,
"data-id": newid
});
// loop through each td and create new elements with name of newid
$.each($("#tab_logic tbody tr:nth(0) td"), function() {
var cur_td = $(this);
var children = cur_td.children();
// add new td and element if it has a nane
if ($(this).data("name") != undefined) {
var td = $("<td></td>", {
"data-name": $(cur_td).data("name")
});
var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
c.attr("name", $(cur_td).data("name") + "[" + newid + "]");
c.appendTo($(td));
td.appendTo($(tr));
} else {
var td = $("<td></td>", {
'text': $('#tab_logic tr').length
}).appendTo($(tr));
}
});
// add delete button and td
/*
$("<td></td>").append(
$("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
.click(function() {
$(this).closest("tr").remove();
})
).appendTo($(tr));
*/
// add the new row
$(tr).appendTo($('#tab_logic'));
$(tr).find("td button.row-remove").on("click", function() {
$(this).closest("tr").remove();
});
});
// Sortable Code
var fixHelperModified = function(e, tr) {
var $originals = tr.children();
var $helper = tr.clone();
$helper.children().each(function(index) {
$(this).width($originals.eq(index).width())
});
return $helper;
};
$(".table-sortable tbody").sortable({
helper: fixHelperModified
}).disableSelection();
$(".table-sortable thead").disableSelection();
$("#add_row").trigger("click");
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>