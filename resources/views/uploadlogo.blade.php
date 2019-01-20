@extends('layouts.app');

@section('content')

<div class="container">

<form method="post" action="{{url('insert')}}" enctype="multipart/form-data" >
@csrf

@if(count($errors)>0)

@foreach($errors->all() as $error)

<div class="alert alert-danger">
{{$error}}
</div>
@endforeach
@endif

  <div class="form-group"  >
    <label for="avatar" lass="col-sm-0">Avatar</label>
    <input type="file" class="form-control-file " name="logo"  id="avatar">
  </div>

  

  <div class="form-group" class="col-md-4" center>
    <input type="submit" class="btn btn-primary" value="submit">
  </div>
</form>
</div>
</div>
@endsection