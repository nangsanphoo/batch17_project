@extends('backendtemplate')

@section('content')

<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
            	<div class="col">
            		<h1 class="h3 mb-0 text-gray-800">Member Edit Form</h1>
            	</div>
            </div>
          </div>
          <form action="{{route('members.update',$member->id)}}" method="post" enctype="multipart/form-data">
          	@csrf
          	@method('PUT')
		  <div class="form-group row">
		    <label class="col-sm-2">Code No</label>
		    <div class="col-sm-5"> 
		      <input type="text" class="form-control" name="codeno" value="{{$member->codeno}}" readonly="readonly">
		      
		    </div>
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2">Name</label>
		    <div class="col-sm-5">
		      <input type="text" class="form-control" name="name" value="{{$member->name}}">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2">Email</label>
		    <div class="col-sm-5">
		      <input type="text" class="form-control" name="email" value="{{$member->email}}">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2">Phone no</label>
		    <div class="col-sm-5">
		      <input type="text" class="form-control" name="phoneno" value="{{$member->phoneno}}">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label  class="col-sm-2 col-form-label">Photo</label>
		    <div class="col-sm-5">
		    	<input type="file" class="form-control-file" name="photo">
		    	<img src="{{asset($member->photo)}}" class="img-fluid w-25">
		    	<input type="hidden" name="oldphoto" value="{{$member->photo}}">
		    </div>
		    
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2">Gender</label>
		    <div class="col-sm-5">
		    	
		      	<input type="radio" name="gender" value="Male" <?php if($member->gender) echo "checked"; ?>>
		      	<label>Male</label>&nbsp;
		      	<input type="radio" name="gender" value="Female" >
		      	<label>Female</label>
		    </div>
		</div>
		  <div class="form-group row">
		    <label class="col-sm-2">Age</label>
		    <div class="col-sm-5">
		      <input type="text" class="form-control" name="age" value="{{$member->age}}">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2">Hair Style</label>
		    <div class="col-sm-5">
		      <input type="text" class="form-control" name="hair_style" value="{{$member->hair_style}}">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2">Hobbies</label>
		    <div class="col-sm-5">
		      <textarea name="hobbies" class="form-control" >{{$member->hobbies}}</textarea>
		    </div>
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2">Address</label>
		    <div class="col-sm-5">
		      <textarea name="address" class="form-control" >{{$member->address}}</textarea>
		    </div>
		  </div>
		  <div class="form-group row">
		    <label class="col-sm-2">Description</label>
		    <div class="col-sm-5">
		      <textarea name="description" class="form-control" >{{$member->description}}</textarea>
		    </div>
		  </div>
		  
		  <div class="form-group row">
		    <div class="col-sm-2">
		      <input type="submit" name="btnsubmit" value="Update" class="btn btn-primary">
		    </div>
		  </div>
		</form>
    </div>

@endsection