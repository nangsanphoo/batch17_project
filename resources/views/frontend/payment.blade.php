@extends('frontendtemplate')
@section('content')

<div class="contact">
  <div class="violet-overlay">
  	<div class="container">
  		{{-- <div class="col-md-6 col-md-offset "> --}}
  			<h1 class="text-center">Payment Form</h1>
  			<div class="spacer"></div>
  			{{-- @if (session()->has('success_massage'))
  			<div class="alert alert-success">
  				{{session()->get('success_message')}}
  			</div>
  			@endif

  			@if(count($errors)->0)
  			<div class="alert alert-danger">
  				<ul>
  					@foreach($errors->all() as $error)
  					<li>{{$error}}</li>
  					@endforeach

  				</ul>
  			</div>
  			@endif --}}
  			<div class="container my-5">

		        <div class="row justify-content-center">
		        	<div class="col-8">
			  			<form action="{{-- {{route('payments.store')}} --}}" method="POST">	
			  				@csrf
			  				{{-- <div class="form-group">
			  					<label for="name">Name</label>
			  					<input type="text" class="form-control" id="name_on_card" name="name">
			  				</div> --}}
			  				<div class="form-group ">
			  					<label for="cardno">Card No.</label>
			  					<input class="form-control py-4" id="cardno" type="text" name="cardno">
			  					@error('cardno')
						    	<div class="text-danger">{{$message}}</div>
						    	@enderror
				               
			  				</div>
			  				<div class="form-group ">
			  					<label for="amount">Amount</label>
			  					<input class="form-control py-4" id="amount" type="text" name="amount" value="10000">
			  					@error('amount')
						    	<div class="text-danger">{{$message}}</div>
						    	@enderror
				               
			  				</div>

			  				
			  				<div class="row justify-content-center">
			  					<div class="col-md-6 my-5">
			  						<a href="" class="btn btn-secondary my-3" style="background-color: #bd8cbf ; padding:10px 40px; float: right" >Pay Now</a>
			  					</div>
			  				</div>

			  			</form>
			  		</div>
			  	</div>
			</div>
  		
  	    </div>
  	</div>
</div>

@endsection