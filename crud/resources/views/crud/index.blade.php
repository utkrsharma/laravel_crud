@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Employee Data</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('crud.create')}}" class="btn btn-primary">Add</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Edit</th>
    <th>Delete</th>
   </tr>
   @foreach($employees as $row)
   <tbody>
   <tr>
    <td>{{$row['first_name']}}</td>
    <td>{{$row['last_name']}}</td>
    <td><a href="{{action('CrudController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
    <td>
      <form method="post" class="delete_form" action="{{action('CrudController@destroy', $row['id'])}}">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE" />
      <button type="submit" class="btn btn-danger">Delete</button>
     </form>
    </td>
   </tr>
   </tbody>
   @endforeach
  </table>
 </div>
</div>

<!-- <div id="modal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">
    <div class="modal-dialog modal-m">
      <div class="modal-content">
        <div class="modal-header"><h3 style="margin:0;"></h3></div>
        <div class="modal-body">
          <div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" style="width: 100%"></div></div>
          </div>
          </div></div></div> -->

<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  //$('#modal').modal('show');
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
@endsection