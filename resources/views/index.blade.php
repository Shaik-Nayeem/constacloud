@extends('layouts.app');
@section('content')
<div class="card-box col-md-12">
<div class="container">
<div class="row">
@if(session('info'))
{{session('info')}}

@endif


<!--<table class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedy="datatable_info">
  
  
  <table id="datatable-buttons" class="table table-striped table-bordered">
<thead>
    <tr role="row">
      <th scope="col">S.no</th>
       <th class="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">Avatar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  -->
  
<!--
  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
  @if(count($articles)>0)
      @foreach($articles->all() as $article)
    <tr>
      <td >{{$article->id}}</td>
      <td>{{$article->email}}</td>
      <td>{{$article->name}}</td>
      <td><img src="/uploads/{{$article->avatar}}" height=50px width=50px</td>
      <td>
<a href="{{url('index')}}" class="btn btn-primary">View</a>
<a href="/update/{{$article->id}}" class="btn btn-success">Update</a>
<a href="/delete/{{$article->id}}" class="btn btn-danger">Delete</a>
      
      
      </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
</div>
</div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
-->

<div class="card card-cascade narrower mt-5">

<!--Card image-->
<div class="view view-cascade gradient-card-header purple-gradient narrower py-4 mx-4 mb-3 d-flex justify-content-center align-items-center">

    <h4 class="white-text font-weight-bold text-uppercase mb-0">Table name</h4>

</div>
<!--/Card image-->

<div class="px-4">

    <!--Table-->
    <table class="table table-hover table-responsive-md mb-0">

        <!--Table head-->
        <thead>
        <tr role="row">
      <th scope="col">S.no</th>
       <th class="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">Avatar</th>
      <th scope="col">Action</th>
    </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
        @if(count($articles)>0)
      @foreach($articles->all() as $article)
    <tr>
      <td >{{$article->id}}</td>
      <td>{{$article->email}}</td>
      <td>{{$article->name}}</td>
      <td><img src="/uploads/{{$article->avatar}}" height=50px width=50px</td>
      <td>
<a href="{{url('index')}}" <button class="btn btn-icon waves-effect waves-light btn-info m-b-5"> <i class="fa fa-keyboard-o"></i></a>
<a href="/update/{{$article->id}}" class="btn btn-icon waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-wrench"></i></a>
<a href="/delete/{{$article->id}}" class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i></a>
 
      
      </td>
    </tr>
    @endforeach
    @endif
        </tbody>
        <!--Table body-->
    </table>

</div>











<hr class="my-0">

<!--Bottom Table UI-->
<div class="d-flex justify-content-center">

    <!--Pagination -->
    <nav class="my-4 pt-2">
        <ul class="pagination pagination-circle pg-purple mb-0">

            <!--First-->
            <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link">First</a></li>

            <!--Arrow left-->
            <li class="page-item disabled">
                <a class="page-link" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
            </li>

            <!--Numbers-->
            <li class="page-item active"><a class="page-link">1</a></li>
            <li class="page-item"><a class="page-link">2</a></li>
            <li class="page-item"><a class="page-link">3</a></li>
            <li class="page-item"><a class="page-link">4</a></li>
            <li class="page-item"><a class="page-link">5</a></li>

            <!--Arrow right-->
            <li class="page-item">
                <a class="page-link" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
            </li>

            <!--First-->
            <li class="page-item clearfix d-none d-md-block"><a class="page-link">Last</a></li>

        </ul>
    </nav>
    <!--/Pagination -->

</div>
<!--Bottom Table UI-->

</div>
</div>
@endsection