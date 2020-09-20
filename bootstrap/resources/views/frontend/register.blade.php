
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
                                      <input class="form-control py-4" id="inputName" type="text" placeholder="Enter name" name="name" />
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
                    <textarea class="form-control" name="address" id="address" placeholder="Enter  address"></textarea>
                  </div>
                </div>
              </div>

              <div class="form-row">

                <div class="col-md-10">

                  <div class="form-group" style="font-size:25px">
                    <label class="small mb-1" for="Date"> Birthday*</label>
                    <input class="form-control py-4" id="date" type="Date" placeholder="Enter Month" name="Date" />

                  </div>
                </div>
              </div>
              {{-- <div class="form-group" style="font-size:25px">
                <label class="small mb-1" for="gender"> I'm a*</label>
                <select class="form-control " id="gender" name="gender" placeholder="Select Gender">
                  <option value="gender" >Select Gender</option>

                  <option value="Male">Male</option>
                  <option value="female">Female</option>

                </select>
              </div>
            </div> --}}

            <div class="form-row">

              <div class="col-md-10">
                <div class="form-group" style="font-size:25px">
                  <label for="photo" class="">Profile*</label>
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