@extends('backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row mb-5">
  		<div class="col-md-12">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Member Detail Page</h1>
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-md-4">
            <img src="{{asset($member->photo)}}" class="img-fluid">
        </div>
        <div class="col-md-8">
    		<p>{{$member->name}}</p>
            <p>{{$member->codeno}}</p>
            <p>{{$member->email}}</p>
            <p>{{$member->age}} </p>
            <p>{{$member->hair_style}}</p>
            <p>{{$member->hobbies}}</p>
            <p>{{$member->address}}</p>
            
    	</div>

        <div class="col-md-12 my-4">
            <h4>
                Description:
            </h4>

            <p>{{$member->description}}</p>
        </div>
    </div>

 	</div>
@endsection