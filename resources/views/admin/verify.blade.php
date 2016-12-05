@extends('admin.layout.adminlayout')


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">You Have to verify your email</h3>
            <a href="{{ url('/') }}/email-verification/check/{{Auth::user()->verification_token}}?email={{Auth::user()->email}}" class="btn btn-link">Resend email</a>
        </div>
    </div>
</div>




@endsection