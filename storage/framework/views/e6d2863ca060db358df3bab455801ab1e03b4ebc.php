<!-- /Load Styles -->
<?php echo $__env->make('landing.partials.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- /Load Styles -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div id="preloader_1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    



    <!-- ======= Start ======= -->
    <div class="content-wrap">
        <div class="content">
            <!-- /Start Header -->
            <?php echo $__env->yieldContent('header'); ?>
            <!-- /End Header -->

            <!-- /Start top -->
            <?php echo $__env->yieldContent('top'); ?>
            <!-- /End Top -->

            <!-- /Start Form -->
            <?php echo $__env->yieldContent('form'); ?>
            <!-- /End Form -->

            <!-- /Start Feature -->
            <?php echo $__env->yieldContent('feature'); ?>
            <!-- /End Feature -->

            <!-- /Start Video Area -->
            <?php echo $__env->yieldContent('video'); ?>
            <!-- /End Video Area -->

            <!-- /Start Content Area -->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- /End Content Area -->

            <!-- /Start Pricing Area -->
            <?php echo $__env->yieldContent('pricing'); ?>
            <!-- /End Pricing Area -->

            <!-- /Start Brand -->
            <?php echo $__env->yieldContent('brand'); ?>
            <!-- /End Brand -->

            <!-- /Start Testimonial -->
            <?php echo $__env->yieldContent('testimonial'); ?>
            <!-- /End Testimonial -->

            <!-- /Start Subscribe -->
            <?php echo $__env->yieldContent('subscribe'); ?>
            <!-- /End Subscribe -->

            <!-- /Start Footer -->
            <?php echo $__env->yieldContent('footer'); ?>
            <!-- /End Footer -->
        </div>
        <!-- /End Content -->
    </div>
    <!-- /End Content Wrap -->
    <!-- ======= End ======= -->



    <!-- Start Modal -->
    <?php echo $__env->make('landing.sections.parts.contactmodal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- /End Modal -->





    <!-- Back To Top -->
    <a id='backTop'><i class="fa fa-angle-up"></i></a>

    <!-- /Load Scripts -->
    <?php echo $__env->make('landing.partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

    <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
        });
    </script>
    
    <?php echo $__env->yieldContent('js'); ?>
    <!-- /Load Scripts -->

    <script>
$(document).ready(function() {
   if (window.location.hash != null && window.location.hash != '') 
        $('body').animate({
            scrollTop: $(window.location.hash).offset().top
        }, 1500);

        var fade_out = function() {
  $("#errors").slideUp(1000, function() {
    $(this).remove();
});
}

setTimeout(fade_out, 5000);

});

        </script>
</body>

</html>