
@extends('layouts.app')
@section('content')

<!-- sample modal content -->
<!-- Create Banners-->

<div class="card-box">
<div class="container">
<div class="row">
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title"><h2>Add Banners</h2></h4>
                                        </div>
                                        <div class="modal-body">
                                        <form method="post" action="{{url('insert')}}"  enctype="multipart/form-data" >
                                        {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-12">
                                                
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label col-md-5">Email</label>
                                                        <input type="email" class="form-control"  name="email"  id="email" placeholder="name@example.com">
                                                    </div>
                                                </div>
                                                </div>

                                                <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name" class="control-label">Name</label>
                                                        <input type="text" class="form-control" name="name"  id="name" placeholder="shaiks">
                                                    
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="avatar" class="control-label">Avatar</label>
                                                        <input type="file" class="form-control-file " name="avatar"  id="avatar">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
   
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" value="submit">
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- /.modal -->

</div>
</div>
<div class="container">
<div class="row">


<div id="con-close-modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form method="post" action="{{url('blog_insert')}}"  enctype="multipart/form-data" >
                                        {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-12">
                                                
                                                    <div class="form-group">
                                                        <label for="title" class="control-label col-md-5">Title</label>
                                                        <input type="text" class="form-control"  name="title"  id="title" placeholder="name@example.com">
                                                    </div>
                                                </div>
                                                </div>

                                                <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name" class="control-label">Description</label>
                                                        <input type="text" class="form-control" name="description"  id="description" placeholder="shaiks">
                                                    
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="avatar" class="control-label">Image</label>
                                                        <input type="file" class="form-control-file " name="image"  id="image">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
   
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" value="submit">
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- /.modal -->





</div>





<div class="card-box">
<div class="container">
<div class="row">

<div class="card-box">
<div class="container">
<div class="row">
<div id="con-close-modal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title"><h2>View</h2></h4>
                                        </div>
                                        <div class="modal-body">
										
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
 </div>
   
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" value="submit">
                                        </div>
										
										
										
  </form>
                                    </div>
                                </div>
                            </div><!-- /.modal -->

</div>
</div>




<div class="card-box">
<div class="container">
<div class="row">

<div class="card-box">
<div class="container">
<div class="row">
<div id="con-close-modal4" class="modal fadebs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class=="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title"><h2>View</h2></h4>
                                        </div>
                                        <div class="modal-body">
										
<div class="card card-cascade narrower mt-5">

<!--Card image-->
<div class="view view-cascade gradient-card-header purple-gradient narrower py-4 mx-4 mb-3 d-flex justify-content-center align-items-center">

    <h4 class="white-text font-weight-bold text-uppercase mb-0">View Blogs</h4>

</div>
<!--/Card image-->

<div class="px-4">

    <!--Table-->
    <table class="table table-hover table-responsive-md mb-0">

        <!--Table head-->
        <thead>
        <tr role="row">
      <th scope="col">S.no</th>
       <th class="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
        @if(count($blog)>0)
      @foreach($blog->all() as $blo)
    <tr>
      <td >{{$blo->id}}</td>
      <td>{{$blo->title}}</td>
      <td>{{str_limit (strip_tags($blo->description),45)}}
      @if(strlen(strip_tags($blo->description))>45)

      <a href="views/{{$blo->id}}" class="btn btn-primary">Read more</a>

  @endif
  </td>
      <td><img src="/upload_test1/{{$blo->image}}" height=50px width=50px</td>
      <td>
      <td>
<a href="{{url('index')}}" class="btn btn-icon waves-effect waves-light btn-info m-b-5"> <i class="fa fa-keyboard-o"></i></a>
<a href="/blogupdate/{{$blo->id}}" class="btn btn-icon waves-effect waves-light btn-warning m-b-5"> <i class="fa fa-wrench"></i></a>
<a href="/blogdelete/{{$blo->id}}" class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-remove"></i></a>
      
      
      
      </td>
    </tr>
    @endforeach
    @endif
        </tbody>
        <!--Table body-->
    </table>

</div>
 </div>
   
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" value="submit">
                                        </div>
										
										
										
  </form>
                                    </div>
                                </div>
                            </div><!-- /.modal -->

</div>
</div>














                             <div class="button-list">
                                <!-- Custom width modal 
                                <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modal">Custom width Modal</button>
                                -->
                                <!-- Full width modal -->

                                <button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal1">Add-Blogs</button>
                                <!-- Full width modal -->
                                
                                <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add-Banners</button>
                                <!-- Full width modal -->
                                
                                <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal3">View-Banners</button>
                                <!-- Full width modal -->
                                
                                <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal4">View_Blogs</button>
                                <!-- Full width modal -->
                                
                               <!-- <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#panel-modal">Panel in Modal</button>
                          -->
                          
                            </div>

</div>
</div>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Modal-Effect -->
        <script src="assets/plugins/custombox/dist/custombox.min.js"></script>
        <script src="assets/plugins/custombox/dist/legacy.min.js"></script>


@endsection
