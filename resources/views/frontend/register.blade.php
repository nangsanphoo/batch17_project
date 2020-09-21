
@extends('frontendtemplate')
@section('content')

<div class="contact" {{-- id="sign up" --}}>
 
    <div class="violet-overlay">
        <div class="container">
            <h2 class="text-center">Register From</h2>

            <div class="container my-5">

                <div class="row justify-content-center">
                    <div class="col-8">
                        <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-10">
                                    <div class="form-group" style="font-size:25px">
                                      <label class="small mb-1" for="inputName"> Username*</label>
                                      <input class="form-control py-4" id="inputName" placeholder="Enter name" type="text" name="name" />
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">

                            <div class="col-md-10">

                                <div class="form-group" style="font-size:25px">
                                    <label class="small mb-1" for="inputEmailAddress">Email*</label>
                                    <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" />
                                </div>
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="col-md-10">
                                <div class="form-group" style="font-size:25px">
                                  <label class="small mb-1" for="inputPassword">Password*</label>
                                  <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
                                  <font id="error" color="red"></font>
                              </div>

                          </div>
                      </div>
                      <div class="form-row">

                        <div class="col-md-10">
                            <div class="form-group" style="font-size:25px">
                              <label class="small mb-1" for="inputConfirmPassword">Confirm Password*</label>
                              <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" name = "password_confirmation"/>
                              <font id="error" color="red"></font>

                          </div>
                      </div>
                  </div>


              <div class="form-row">

                <div class="col-md-10">

                  <div class="form-group" style="font-size:25px">
                    <label class="small mb-1" for="address"> Address* </label>
                    <textarea class="form-control" name="address" placeholder="Enter address"></textarea>
                  </div>
                </div>
              </div>

              <div class="form-row">

                <div class="col-md-10">

                  <div class="form-group" style="font-size:25px">
<<<<<<< HEAD
                    <label class="small mb-1" for="Date"> Birthday*</label>
                    <input class="form-control py-4" id="date" type="Date" placeholder="Enter Month" name="DOB" />
=======
                    <label class="small mb-1" for="birthday"> Birthday*</label>
                    <input class="form-control py-4" id="birthday" type="Date" placeholder="Enter Month" name="birthday" />
>>>>>>> 255d676a78e059e6fdc5116729a5b2f79c5cd62b

                  </div>
                </div>
              </div>
              

            <div class="form-row">

              <div class="col-md-10">
                <div class="form-group" style="font-size:25px">
<<<<<<< HEAD
                  <label for="photo" class="">Profile*</label>
=======
                  <label for="photo" class="">Photo*</label>
>>>>>>> 255d676a78e059e6fdc5116729a5b2f79c5cd62b
                  <input type="file" class="form-control-file" id="photo" value="Choose File" name="photo">
                </div>
              </div>
            </div>

            <div class="form-row">

              <div class="col-md-10">

                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">

                  <button type="submit" class="btn btn-primary mainfullbtncolor btn-block"> Create Account </button>
                </div>
              </div>
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