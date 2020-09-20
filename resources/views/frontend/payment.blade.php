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
			  			<form action="{{-- {{route('paymentpage')}} --}}" method="POST" >
                     		

			  				{{-- <div class="form-group">
			  					<label for="name">Name</label>
			  					<input type="text" class="form-control" id="name_on_card" name="name">
			  				</div> --}}
			  				<div class="form-group ">
			  					<label for="cardno">Card No.</label>
			  					<input class="form-control py-4" id="cardno" type="text" placeholder="Enter card no." name="cardno">
				               
			  				</div>
			  				<div class="form-group ">
			  					<label for="amount">Amount</label>
			  					<input class="form-control py-4" id="amount" type="text" name="amount">
				               
			  				</div>

			  				
			  				{{-- <div class="row">
			  					<div class="col-md-6">
			  						<div class="form-group">
			  							<label for="address">Address</label>
			  							<input type="text" class="form-control" id="address" name="address">
			  						</div>
			  					</div>

			  					<div class="col-md-3">
			  						<div class="form-group">
			  							<label for="city">City</label>
			  							<input type="text" class="form-control" id="city" name="city">
			  						</div>
			  					</div>

			  					<div class="col-md-3">
			  						<div class="form-group">
			  							<label for="province">Province</label>
			  							<input type="text" class="form-control" id="province" name="province">
			  						</div>
			  					</div>
			  				</div> --}}

			  				{{-- <div class="row">
			  					<div class="col-md-4">
			  						<div class="form-group">
			  							<label for="postalcode"> Postal Code</label>
			  							<input type="text" class="form-control" id="postalcode" name="postalcode">
			  						</div>
			  					</div>
			  					<div class="col-md-4">
			  						<div class="form-group">
			  							<label for="country">Country</label>
			  							<input type="text" class="form-control" id="country" name="country">
			  						</div>
			  					</div>
			  					<div class="col-md-4">
			  						<div class="form-group">
			  							<label for="postalcode">Phone</label>
			  							<input type="text" class="form-control" id="phone" name="phone">
			  						</div>
			  					</div>
			  				</div> --}}

			  				{{-- <div class="row">
			  					<div class="col-md-6">
			  						<div class="form-group">
			  							<label for="cc_number">Credit Card Number</label>
			  							<input type="text" class="form-control" id="cc_number" name="cc_number">
			  						</div>
			  					</div>
			  					<div class="col-md-3">
			  						<div class="form-group">
			  							<label for="expiry">Expiry</label>
			  							<input type="text" class="form-control" id="expiry" name="expiry">
			  						</div>
			  					</div>
			  					<div class="col-md-3">
			  						<div class="form-group">
			  							<label for="cvc">CVC</label>
			  							<input type="text" class="form-control" id="cvc" name="cvc">
			  						</div>
			  					</div>
			  				</div> --}}

			  				{{-- <div class="form-group">
			  					<label for="cc_number">Credit Card Number</label>

			  					<div id="card-element"></div>

			  					<div id="card-errors" role="alert"></div>
			  				</div>

			  				<div class="spacer"></div> --}}

			  				<div class="row justify-content-center">
			  					<div class="col-md-6 my-5">
			  						<button type="submit" class="btn btn-success form-control" style="background-color: #bd8cbf;color: black">Pay Now</button>
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