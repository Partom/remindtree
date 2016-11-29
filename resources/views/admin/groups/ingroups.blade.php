@extends('admin.layout.adminlayout') @section('breadcumbs')


<div class="row bg-title">
  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
    <h4 class="page-title">Profile page</h4>
  </div>
  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
    <ol class="breadcrumb">
      <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('/groups')}}">Groups</a></li>
       <li class="active">Member</li>
    </ol>
  </div>
</div>

@endsection

@section('content')
<style>
.glyphicon:before {
  margin-right: 5px;
}
.ss { 
    word-spacing: -5px;
}
</style>


<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="white-box">

    <h1>Groups </h1>
{{-- <a href="{{ url('/groups/create') }}" class="btn btn-primary btn-sm pull-right ss" title="Add New Group"><span class="glyphicon glyphicon-plus " aria-hidden="true"/>New group</a> --}}
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Name </th><th> Members Count </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($groups as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->users->count() }}</td>
                    <td>
                      
                        <a href="{{ url('/groups/' . $item->id) }}" class="btn btn-success btn-xs" title="View Group"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                          @if(Auth::user()->id == $item->owner_id)
                        <a href="{{ url('/groups/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Group"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/groups', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Group" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Group',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            )) !!}
                        {!! Form::close() !!}
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $groups->render() !!} </div>
    </div>

        </div>
</div>
</div>
</div>
@endsection
