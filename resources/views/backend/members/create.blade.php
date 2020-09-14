@extends('backendtemplate')

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="row">
            <div class="col">
            	<h1 class="h3 mb-0 text-gray-800">Member Create Form</h1>
            </div>
        </div>
    </div>
    <form action="{{route('members.store')}}" method="post" enctype="multipart/form-data">
        @csrf
		<div class="form-group row">
			<label class="col-sm-2">Code No</label>
			<div class="col-sm-5"> 
		    	<input type="text" class="form-control " name="codeno">
		    	@error('codeno')
		    	<div class="text-danger">{{$message}}</div>
		    	@enderror
			</div>
		</div>
		<div class="form-group row">
		    <label class="col-sm-2">Name</label>
		    <div class="col-sm-5">
		      	<input type="text" class="form-control" name="name">
		      	@error('name')
		      	<div class="text-danger">{{$message}}</div>
		      	@enderror
		    </div>
		</div>
		<div class="form-group row">
		    <label class="col-sm-2">Email</label>
		    <div class="col-sm-5">
		      	<input type="text" class="form-control" name="email">
		      	@error('email')
		      	<div class="text-danger">{{$message}}</div>
		      	@enderror
		    </div>
		</div>
		<div class="form-group row">
		    <label class="col-sm-2">Phone No.</label>
		    <div class="col-sm-5">
		      	<input type="text" class="form-control" name="phoneno">
		      	@error('phoneno')
		      	<div class="text-danger">{{$message}}</div>
		      	@enderror
		    </div>
		</div>
		<div class="form-group row">
		    <label  class="col-sm-2 col-form-label">Photo</label>
		    <div class="col-sm-5">
		    	<input type="file" class="form-control-file" name="photo">
		    	@error('photo')
			      <div class="text-danger">{{$message}}</div>
			    @enderror
		    </div>
		    
		</div>
		<div class="form-group row">
		    <label class="col-sm-2">Gender</label>
		    <div class="col-sm-5">
		      	<input type="radio" name="gender">
		      	<label>Male</label>&nbsp;
		      	<input type="radio" name="gender">
		      	<label>Female</label>
		    </div>
		</div>
		<div class="form-group row">
		    <label class="col-sm-2">Address</label>
		    <div class="col-sm-5">
		      	<textarea name="address" class="form-control"></textarea>
		      	@error('description')
		      	<div class="text-danger">{{$message}}</div>
		      	@enderror
		    </div>
		</div>
		<div class="form-group row">
		    <label class="col-sm-2">Description</label>
		    <div class="col-sm-5">
		      	<textarea name="description" class="form-control"></textarea>
		      	@error('description')
		      	<div class="text-danger">{{$message}}</div>
		      	@enderror
		    </div>
		</div>
		{{-- <div class="form-group row">
		  	<label class="col-md-2">Brand</label>
		    <div class="col-md-5">
		    	<select class="form-control form-control-md" name="brand">
			    	<optgroup label="Choose Brand">
			    		@foreach($brands as $brand)
			    		<option value="{{$brand->id}}">{{$brand->name}}</option>
			    		@endforeach
			    	</optgroup>
		    	</select>
		    </div>
		</div>
		<div class="form-group row">
		  	<label class="col-md-2">Subcategory</label>
		  	<div class="col-md-5">
		  		<select class="form-control form-control-md" name="subcategory">
			    	<optgroup label="Choose Subcategory">
			    		@foreach($subcategories as $subcategory)
			    		<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
			    		@endforeach
			    	</optgroup>
		    	</select>
		  	</div>
		    
		</div> --}}
		<div class="form-group row">
		    <div class="col-sm-2">
		      	<input type="submit" name="btnsubmit" value="Create" class="btn btn-primary">
		    </div>
		</div>
	</form>
</div>

@endsection