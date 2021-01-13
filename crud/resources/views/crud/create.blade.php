@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add Data</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger alert-dismissible">
  	<button type="button" class="close" data-dismiss="alert">&times;</button>
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success alert-dismissible">
  	<button type="button" class="close" data-dismiss="alert">&times;</button>
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="post" action="{{url('crud')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" />
   </div>
   <div class="form-group">
    <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection
