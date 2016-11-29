<!-- /Load Styles -->
@include('landing.partials.css')
<!-- /Load Styles -->
<meta name="csrf-token" content="{{ csrf_token() }}">
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

    {{-- @include('landing.partials.nav') --}}



    <!-- ======= Start ======= -->
    <div class="content-wrap">
        <div class="content">
            <!-- /Start Header -->
            @yield('header')
            <!-- /End Header -->

            <!-- /Start top -->
            @yield('top')
            <!-- /End Top -->

            <!-- /Start Form -->
            @yield('form')
            <!-- /End Form -->

            <!-- /Start Feature -->
            @yield('feature')
            <!-- /End Feature -->

            <!-- /Start Video Area -->
            @yield('video')
            <!-- /End Video Area -->

            <!-- /Start Content Area -->
            @yield('content')
            <!-- /End Content Area -->

            <!-- /Start Pricing Area -->
            @yield('pricing')
            <!-- /End Pricing Area -->

            <!-- /Start Brand -->
            @yield('brand')
            <!-- /End Brand -->

            <!-- /Start Testimonial -->
            @yield('testimonial')
            <!-- /End Testimonial -->

            <!-- /Start Subscribe -->
            @yield('subscribe')
            <!-- /End Subscribe -->

            <!-- /Start Footer -->
            @yield('footer')
            <!-- /End Footer -->
        </div>
        <!-- /End Content -->
    </div>
    <!-- /End Content Wrap -->
    <!-- ======= End ======= -->



    <!-- Start Modal -->
    @include('landing.sections.parts.contactmodal')
    <!-- /End Modal -->





    <!-- Back To Top -->
    <a id='backTop'><i class="fa fa-angle-up"></i></a>

    <!-- /Load Scripts -->
    @include('landing.partials.scripts') 

    <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
        });
    </script>
    
    @yield('js')
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