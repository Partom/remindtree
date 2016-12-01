<!-- /Start Header -->
<?php $__env->startSection('header'); ?>
<?php echo $__env->make('landing.sections.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<!-- /End Header -->

<!-- /Start top -->
<?php $__env->startSection('top'); ?> 
<?php echo $__env->make('landing.sections.top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<!-- /End Top -->

<!-- /Start form Area -->
<?php $__env->startSection('form'); ?> 
<?php echo $__env->make('landing.sections.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<!-- /End form Area -->

<!-- /Start Feature -->
<?php $__env->startSection('feature'); ?> 
<?php echo $__env->make('landing.sections.feature', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<?php $__env->stopSection(); ?>
<!-- /End Feature -->

<!-- /Start Video Area -->

<!-- /End Video Area -->



<!-- /Start Brand -->
<?php $__env->startSection('brand'); ?> 
<?php echo $__env->make('landing.sections.brand', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<?php $__env->stopSection(); ?>
<!-- /End Brand -->

<!-- /Start Testimonial -->
<?php $__env->startSection('testimonial'); ?> 
<?php echo $__env->make('landing.sections.testimonial', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php $__env->stopSection(); ?>
<!-- /End Testimonial -->

<!-- /Start Subscribe -->
<?php $__env->startSection('subscribe'); ?> 
<?php echo $__env->make('landing.sections.subscribe', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php $__env->stopSection(); ?>
<!-- /End Subscribe -->

<!-- /Start Footer -->
<?php $__env->startSection('footer'); ?> 
<?php echo $__env->make('landing.sections.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php $__env->stopSection(); ?>
<!-- /End Footer -->

<!-- /Start Custom Js -->
<?php $__env->startSection('js'); ?>


<script>
    // Facebook button
    $(function() {
        var all_classes = "";
        var timer = undefined;
        $.each($('li', '.social-class'), function(index, element) {
            all_classes += " btn-" + $(element).data("code");
        });
        $('li', '.social-class').mouseenter(function() {
            var icon_name = $(this).data("code");
            if ($(this).data("icon")) {
                icon_name = $(this).data("icon");
            }
            var icon = "<i class='fa fa-" + icon_name + "'></i>";
            $('.btn-social', '.social-sizes').html(icon + "Sign in with " + $(this).data("name"));
            $('.btn-social-icon', '.social-sizes').html(icon);
            $('.btn', '.social-sizes').removeClass(all_classes);
            $('.btn', '.social-sizes').addClass("btn-" + $(this).data('code'));
        });
        $($('li', '.social-class')[Math.floor($('li', '.social-class').length * Math.random())]).mouseenter();
    });


    $("#features").click(function() {
        $('html, body').animate({
            scrollTop: $("#fts").offset().top
        }, 900);
});
</script>








<?php $__env->stopSection(); ?>
<!-- /End Custom Js -->
<?php echo $__env->make('landing.layout.homelayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>