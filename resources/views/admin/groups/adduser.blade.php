@extends('admin.layout.adminlayout') @section('breadcumbs')


<div class="row bg-title">
  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
    <h4 class="page-title">Profile page</h4>
  </div>
  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
    <ol class="breadcrumb">
      <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
      <li ><a href="{{url('/groups')}}">Groups</a></li>
      <li class="active">Add User to group</li>
    </ol>
  </div>
</div>

@endsection

@section('content')
<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="white-box">

    <h1>Add User to {{ $group->name }}</h1>
    <hr/>

    {!! Form::open(['url' => '/groups/adduser', 'class' => 'form-horizontal', 'Method' => 'POST','files' => true]) !!}

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'User email', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-3">
                {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
            </div>
        </div>
        {!! Form::hidden('group_id', $group->id , ['class' => 'form-control','name' => 'group_id'  ]) !!}
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