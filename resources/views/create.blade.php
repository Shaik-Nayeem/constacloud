
@extends('layouts.app');

@section('content');

<style type="text/css">
#card{


  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
}
h1{
  margin-left:375px;
}
</style>
<div class="container ">
<div class="row">
<h1 ><b>Add New-Posts</b></h1>
</div>
</div>
<div class="card-box col-md-5 " id="card">
<div class="form-group">
<div class="container centered">

<form method="post" action="{{url('insert')}}" align="center" enctype="multipart/form-data" >
@csrf

@if(count($errors)>0)

@foreach($errors->all() as $error)

<div class="alert alert-danger">
{{$error}}
</div>
@endforeach
@endif
  <div class="form-group">
    <label for="email" class="col-sm-0" >Email address</label>
    <input type="email" class="form-control"  name="email"  id="email" placeholder="name@example.com">
  </div>

  <div class="form-group ">
    <label for="name" class="col-sm-0" >Name</label>
    <input type="text" class="form-control" name="name"  id="name" placeholder="shaiks">
  </div>
  <div class="form-group "  >
    <label for="avatar" lass="col-sm-0">Avatar</label>
    <input type="file" class="form-control-file " name="avatar"  id="avatar">
  </div>

  <div class="form-group "center>
    <input type="submit" class="btn btn-primary" value="submit">
  </div>
</form>
</div>
</div>
</div>
@endsection