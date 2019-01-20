


<div class="card-box">
<div class="container">
<div class="row">

<div class="card-box">
<div class="container">
<div class="row">
<div id="con-close-modal4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
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
       <th class="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">Avatar</th>
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
      <td>{{$blo->email}}</td>
      <td>{{$blo->name}}</td>
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