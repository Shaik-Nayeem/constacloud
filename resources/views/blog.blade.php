
@extends('layouts.app');

@section('content')

<style type="text/css">
#card{


  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
}
h1{
  margin-left:420px;
  margin-top:25px;
}

</style>
<div class="container">
<div class="row">
<h1><b>Blogs</b></h1>
</div>
</div>
<div class="card-box col-md-5 " id="card">
<div class="container">

<form method="post" action="{{url('blog_insert')}}" enctype="multipart/form-data" >
@csrf

@if(count($errors)>0)

@foreach($errors->all() as $error)

<div class="alert alert-danger">
{{$error}}
</div>
@endforeach
@endif
  <div class="form-group">
    <label for="title"  >Title:</label>
    <input type="text" class="form-control col-sm-8" name="title"  id="title">
  </div>

  <div class="form-group">
    <label for="description"  >Description:</label>
    <input type="text" class="form-control" name="description"  id="description">
  </div>
  <div class="form-group"  >
    <label for="image" >Image</label>
    <input type="file" class="form-control-file " name="image"  id="avatar">
  </div>
 

  

  

  <div class="form-group">
    <input type="submit" align="center" id="submit" class="btn btn-primary" value="submit">
  </div>
</form>
</div>
</div>
</div>
@endsection