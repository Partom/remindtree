@extends('landing.layout.homelayout')


<!-- /Start Header -->
@section('header')
@include('landing.sections.header')
@endsection
<!-- /End Header -->

<!-- /Start top -->
@section('top') 
@include('landing.sections.top')
@endsection
<!-- /End Top -->

<!-- /Start form Area -->
@section('form') 
@include('landing.sections.form')
@endsection
<!-- /End form Area -->

<!-- /Start Feature -->
@section('feature') 
@include('landing.sections.feature') 
@endsection
<!-- /End Feature -->

<!-- /Start Video Area -->
{{-- @section('video') 
@include('landing.sections.video') 
@endsection --}}
<!-- /End Video Area -->

{{--
<!-- /Start Content Area -->
@section('content') 
@include('landing.sections.content') 
@endsection
<!-- /End Content Area -->

<!-- /Start Pricing Area -->
@section('pricing') @include('landing.sections.pricing') 
@endsection
<!-- /End Pricing Area -->--}}

<!-- /Start Brand -->
@section('brand') 
@include('landing.sections.brand') 
@endsection
<!-- /End Brand -->

<!-- /Start Testimonial -->
@section('testimonial') 
@include('landing.sections.testimonial')
 @endsection
<!-- /End Testimonial -->

<!-- /Start Subscribe -->
@section('subscribe') 
@include('landing.sections.subscribe')
 @endsection
<!-- /End Subscribe -->

<!-- /Start Footer -->
@section('footer') 
@include('landing.sections.footer')
 @endsection
<!-- /End Footer -->

<!-- /Start Custom Js -->
@section('js')


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








@endsection
<!-- /End Custom Js -->