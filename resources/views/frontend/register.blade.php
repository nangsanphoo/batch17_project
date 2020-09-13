
@extends('frontendtemplate')
@section('content')

<div class="contact">
    <div class="violet-overlay">
    <div class="container">
        <h2 class="text-center">Register From</h2>
                    
    <div class="container my-5">

        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{route('registerpage')}}" method="POST">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="inputName"> Username*</label>
                              <input class="form-control py-4" id="inputName" type="text" placeholder="Enter Name" name="name" />
                            </div>
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="inputPassword">Password*</label>
                              <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
                              <font id="error" color="red"></font>
                            </div>

                        </div>
                    </div>
                    <div class="form-row">
                        
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="inputConfirmPassword">Confirm Password*</label>
                              <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                              <font id="cerror" color="red"></font>

                            </div>
                        </div>
                    </div>
                <div class="form-row">

                <div class="col-md-6">

                    <div class="form-group">
                        <label class="small mb-1" for="inputEmailAddress">Email*</label>
                        <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" />
                    </div>
                </div>
                </div>
                <div class="form-row">

                <div class="col-md-6">

                    <div class="form-group">
                        <label class="small mb-1" for="inputName"> I'm a*</label>
                              <input class="form-control py-4" id="inputName" type="text" placeholder="Enter Name" name="name" />
                    </div>
                </div>
                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label class="small mb-1" for="inputName"> Seeking a*</label>
                              <input class="form-control py-4" id="inputName" type="text" placeholder="Enter Name" name="name" />
                    </div>
                </div>
                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label class="small mb-1" for="inputName"> Birthday*</label>
                        <input class="form-control py-4" id="inputName" type="text" placeholder="Enter Month" name="month" />
                        <input class="form-control py-4" id="inputName" type="text" placeholder="Enter Day" name="day" />
                        <input class="form-control py-4" id="inputName" type="text" placeholder="Enter Year" name="year" />
                    </div>
                </div>
                </div>
                    
                <div class="col-md-6">

                    <div class="form-group">
                        <label class="small mb-1" for="address"> Address </label>
                        <textarea class="form-control" name="address"></textarea>
                    </div>
                </div>
                    
                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        
                        <button type="submit" class="btn btn-primary mainfullbtncolor btn-block"> Create Account </button>
                    </div>
                </form>

                <div class=" mt-3 text-center ">
                    <a href="{{route('loginpage')}}" class="loginLink text-decoration-none">Have an account? Go to login</a>
                </div>
            </div>
        </div>
        
        
        

    </div>
        </div>
    </div>
</div>
@endsection