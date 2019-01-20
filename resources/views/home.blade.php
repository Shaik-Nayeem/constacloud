@extends('layouts.app')

@section('content')
<div class="container">
@if(session('info'))
{{session('info')}}
@endif
<div class="alert alert-success col-md-8">
@if(Session::has('message'))
<p>{{ Session::get('message') }}</p>
@endif
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    
                        <div class="alert alert-success" role="alert">
                            <h3>Welcome Admin!</h3>
                        </div>
                

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
