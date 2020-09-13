@extends('frontendtemplate')
@section('content')

<div class="contact">

    <div class="violet-overlay">

      <div class="container">
        <h1 class="text-center "> Login from</h1>
      </div>
  </div>
 </div>
  
  <!-- Content -->
  <div class="container my-5">

    <div class="row justify-content-center">
      <div class="col-8">
        <form action="login" method="POST">
            <div class="form-row">
                <div class="col-md-6">

      <div class="col-5">
        <form action="{{route('loginpage')}}" method="POST">

         
              <div class="form-group">
                <label class="small mb-1" for="inputEmailAddress">Email</label>
                <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" name="email" />
                
              </div>
          	</div>
          </div>
            <div class="form-row">
               <div class="col-md-6">
              
              <div class="form-group">
                <label class="small mb-1" for="inputPassword">Password</label>
                <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
                
              </div>
          </div>
      </div>
            <div class="form-row">
                <div class="col-md-6">

          
              <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>

                </div>
                  </div>
              

                  <a class="small" href="#">Forgot Password?</a>

              </div>
              </div>
              <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                
                <button type="submit" class="btn btn-secondary mainfullbtncolor btn-block">Login</button>
              </div>


          </form>

          <div class=" mt-3 text-center ">
            <a href="{{route('registerpage')}}" class="loginLink text-decoration-none">Need an account? Sign Up!</a>
          </div>
      </div>
    </div>

  </div>
@endsection