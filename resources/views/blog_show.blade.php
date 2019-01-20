@extends('layouts.app');
@section('content')

<div class="container">
<div class="row">
<h1><b>Blogs:</b></h1>
</div>
</div>
<div class="card-box">
<div class="container">

@if(session('info'))
{{session('info')}}
@endif

 
  
      @foreach($blog->all() as $blo)
     @if($blo->status < $blo->status2)
      <div class="row">
      <img src="/upload_test1/{{$blo->image}}" height=50px width=50px > <span><img src="/upload_test1/{{$blo->image}}" height=50px width=50px ></span>


        </div>

        <div class="row">
        <img src="/upload_test1/{{$blo->image}}" height=50px width=250px >
        </div>

    @else
    <div class="row">
        <img src="/upload_test1/{{$blo->image}}" height=50px width=250px >
        </div>

          <div class="row">
      <img src="/upload_test1/{{$blo->image}}" height=50px width=50px > <span><img src="/upload_test1/{{$blo->image}}" height=50px width=50px ></span>


        </div>

       

  @endif

   @if($blo->status < $blo->status2)

  <div class="row">
      <h2>Latest uploade picture:</h2>{{ $bio->image }}


        </div>
      
     
    @endforeach

 
</div>
</div>
</div>
@endsection