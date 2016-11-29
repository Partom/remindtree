@extends('admin.layout.adminlayout') @section('breadcumbs')


<div class="row bg-title">
  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
    <h4 class="page-title">Profile page</h4>
  </div>
  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
    <ol class="breadcrumb">
      <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
      <li class="active">Groups</li>
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

    <h1>Groups <a href="" data-toggle="modal" data-target="#add-contact" id="creategroup" class="btn btn-primary btn-sm pull-right ss" title="Add New Group"><span class="glyphicon glyphicon-plus " aria-hidden="true"/>New group</a></h1>
    <div class="table">
        <table id="groupstable" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    {{-- <th>S.No</th> --}}
                    <th> Name </th><th> Members Count </th><th>Actions</th>
                </tr>
            </thead>


            <tbody id="tablebody">

            @foreach($groups as $item)

                <tr>
                    {{-- <td>{{ $item->created_at }}</td> --}}
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->users->count() }}</td>
                    <td>
                        <a href="{{ url('/groups/' . $item->id) }}" class="btn btn-success btn-xs" title="View Group"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/groups/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Group"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                       <input type="hidden" value="{{$item->id}}" id="deleteid">
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Group" />', array(
                                    'type' => 'button',
                                    'id' => 'deleteme',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Group',
                            )) !!}
                        
                    </td>
                </tr>
            @endforeach
            </tbody>
            
        </table>
        <center>
            <div id="emptytable" class="hidden">
           <blockquote>You Dont have any group yet </blockquote>                       
            </div>
        </center>
        <div class="pagination-wrapper" id="pagination"> {!! $groups->render() !!} </div>
    </div>

        </div>
</div>
</div>
</div>




<div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                      <h4 class="modal-title" id="myModalLabel">Create a new Group</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                  
                                                          <div class="form-group">
                                                            <div class="col-md-12 m-b-20">
                                                              <input type="text" id="groupname" name="name" class="form-control" placeholder="Group name">
                                                            </div>
                                                        
                                                          </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" id="addgroup" class="btn btn-info waves-effect" data-dismiss="">Create</button>
                                                      <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                  </div>
                                                 
                                                  <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                             </div>



                                             
@endsection




@section('js')
<script>
     $(document).ready(function(){

if ($('#tablebody').children().length == 0){
  $( "#emptytable").removeClass('hidden');
   $( "#pagination").addClass('hidden');
}
 });
 $(document).on('click', '#addgroup', function() {
         
     var data = $( "#groupname").val();
        $.ajax({
            type: 'POST',
            url: '/groups',
            data: {'name':data},
            success: function(data) {
                 console.log(data)
                if(data.status == 'success')
                {

                    var controls = '<td><a href="{{url("/groups/")}}/' +data.id +'" class="btn btn-success btn-xs" title="View Group" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a><a style="margin-left: 4px;" href="http://localhost:8000/groups/' +data.id +'/edit" class="btn btn-primary btn-xs" title="Edit Group"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a><form method="POST" action="http://localhost:8000/groups/' +data.id +'" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input type="hidden" value="' +data.id +'" id="deleteid"><button id="deleteme" type="button" class="btn btn-danger btn-xs" title="Delete Group" style="margin-left: 4px;"><span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Group"></span></button></form></td>';


                $('#groupstable > tbody ').prepend('<tr><td>'+ data.name +'</td><td>'+ data.count +'</td>'+controls+'</tr>');
                $( "#add-contact").modal('hide');
                $( "#groupname").val('');
                $( "#emptytable").addClass('hidden');
                $( "#pagination").removeClass('hidden');
                }
                else
                {
                    console.log('add name')
                }
                
               
            },
            error: function(data) {
               console.log(data);
            }
        });
        return false;
    });


     $(document).on('click', '#deleteme', function(event) {

       var id = $(this).prev("input").val();
       var tr = $(this).closest('tr');

        console.log(tr);
        $.ajax({
            type: 'POST',
            url: '/groups/'+ id,
            data: {'id':id},
            success: function(data) {
               console.log('success');
               
               tr.remove();
             if ($('#tablebody').children().length == 0){
  $( "#emptytable").removeClass('hidden');
   $( "#pagination").addClass('hidden');
}
               
            },
            error: function(data) {
               console.log(data);
            }
        });
        return false;
    });




</script>
@endsection