
@extends('layouts.app');

@section('content')

<div class="container">
<div class="row">
<h2>Add Posts:</h2>
</div>
</div>

<div class="container">

<form method="post" action="{{url('edit',array($articles->id))}}" enctype="multipart/form-data" >
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
    <input type="email" class="form-control col-sm-6" name="email" value="<?=$articles->email;?>"  id="email" >
  </div>

  <div class="form-group">
    <label for="name" class="col-sm-0" >Name</label>
    <input type="text" class="form-control col-sm-6" name="name" value="<?=$articles->name;?>"  id="name" >
  </div>
  <div class="form-group"  >
    <label for="avatar" lass="col-sm-0">Avatar</label>
    <input type="file" class="form-control-file " name="avatar"  value="<?=$articles->avatar;?>" id="avatar">
  </div>

  

  <div class="form-group" class="col-md-4" center>
    <input type="submit" class="btn btn-primary" value="submit">
  </div>
</form>
</div>
</div>
@endsection