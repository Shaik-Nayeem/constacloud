extends('layouts.app')

@section('content')

                <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">Avatar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
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
@endsection

