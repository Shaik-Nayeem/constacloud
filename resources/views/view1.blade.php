<html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<body>

<div class="container">
<div class="row">
@if(count($blog)>0)
      @foreach($blog->all() as $blo)
    <tr>
      <td >{{$blo->id}}</td>
      <td>{{$blo->title}}</td>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/upload_test1/{{$blo->image}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$blo->title}}</h5>
    <p class="card-text">{{$blo->description}}</p>
    <a href="/" class="btn btn-primary">Go Back</a>
    @endforeach
    @endif
  </div>
</div>
</div>
</div>
</body>


</html>