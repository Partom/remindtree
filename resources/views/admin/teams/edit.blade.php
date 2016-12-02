@extends('admin.layout.adminlayout') @section('breadcumbs')


<div class="row bg-title">
  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
    <h4 class="page-title">Profile page</h4>
  </div>
  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
    <ol class="breadcrumb">
      <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
      <li> <a href="{{url('/teams')}}">teams</a></li>
      <li class="active">Edit team</li>
    </ol>
  </div>
</div>

@endsection

@section('content')
<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="white-box">

    <h1>Edit team {{ $team->id }}</h1>

    {!! Form::model($team, [
        'method' => 'PATCH',
        'url' => ['/teams', $team->id],
        'class' => 'form-horizontal',
        'files' => true
    ]) !!}

                    <div class="form-team {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


        <div class="form-team">
            <div class="col-sm-offset-3 col-sm-3">
                {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
            </div>
        </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</div>
</div>
</div>
</div>
@endsection