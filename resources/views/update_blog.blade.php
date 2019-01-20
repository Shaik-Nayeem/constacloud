
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
<h1>Update_Blogs:</h1>
</div>
</div>
<div class="card-box col-md-5 " id="card">
<div class="container">

<form method="post" action="{{url('blogedit',array($blog->id))}}" enctype="multipart/form-data" >
@csrf

@if(count($errors)>0)

@foreach($errors->all() as $error)

<div class="alert alert-danger">
{{$error}}
</div>
@endforeach
@endif
  <div class="form-group">
    <label for="title" class="col-sm-0" >Title</label>
    <input type="text" class="form-control col-sm-6" name="title" value="<?=$blog->title;?>"  >
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-0" >Description</label>
    <input type="text" class="form-control col-sm-6" name="description" value="<?=$blog->description;?>"  id="name" >
  </div>
  <div class="form-group"  >
    <label for="avatar" lass="col-sm-0">Image</label>
    <input type="file" class="form-control-file " name="image"  value="<?=$blog->image;?>" id="avatar">
  </div>

  

  <div class="form-group" class="col-md-4" center>
    <input type="submit" class="btn btn-primary" value="submit">
  </div>
</form>
</div>
</div>

@endsection