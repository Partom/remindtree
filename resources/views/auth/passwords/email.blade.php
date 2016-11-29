@extends('landing.layout.homelayout')
@section('header')
@include('landing.sections.header')
@endsection
<!-- Main Content -->
@section('top')

<style>
.reseti {
  background: #F6F6F6;
  padding-top: 100px;
}
    </style>

    
<div class="reseti" data-scroll-index="6">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    </div>

@endsection

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
