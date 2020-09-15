
@extends('frontendtemplate')
@section('content')

<div class="contact" {{-- id="sign up" --}}>
  <div class="violet-overlay">
    <div class="container">
      <h2 class="text-center">Ideal-Partner From</h2>

      <div class="container my-5">

        <div class="row justify-content-center">
          <div class="col-8">
            <form action="{{route('partnerpage')}}" method="POST" >
              <div class="form-row">

                <div class="col-md-8">

                  <div class="form-group" style="font-size:25px">
                    <label class="small mb-1" for="gender"> I'm a*</label>
                    <select class="form-control " id="gender" name="gender" placeholder="Select Gender">
                      <option value="gender" >Select Gender</option>

                      <option value="Male">Male</option>
                      <option value="female">Female</option>

                    </select>
                  </div>
                </div>
              </div>
              <div class="form-row">

                <div class="col-md-8">

                  <div class="form-group"style="font-size:25px">
                    <label class="small mb-1" for="gender"> Seeking a*</label>
                    <select class="form-control " id="gender" name="gender" placeholder="Select Gender">
                      <option value="gender" >Select Gender</option>

                      <option value="Male">Male</option>
                      <option value="female">Female</option>

                    </select>
                  </div>
                </div>
              </div>
              <div class="form-row">

                <div class="col-md-8">

                  <div class="form-group" style="font-size:25px">
                    <label class="small mb-1" for="Date"> Birthday*</label>
                    <input class="form-control py-4" id="Date" type="Date" placeholder="Enter Month" name="Date" />

                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-8 ">
                  <div class="form-group" style="font-size:25px">
                    <label class="small mb-1" for="inputAge"> Age*</label>
                    <input class="form-control py-4" id="inputAge" type="text" placeholder="Enter Age" name="age" />
                  </div>
                </div>
              </div>

              <div class="form-row">

                <div class="col-md-8">
                  <div class="form-group" style="font-size:25px">
                    <label class="small mb-1" for="inputPassword">Hair Style*</label>
                    <input class="form-control py-4" id="inputStyle" type="password" placeholder="Enter Hair Style:" name="style" />
                    <font id="error" color="red"></font>
                  </div>

                </div>
              </div>
              <div class="form-row">

                <div class="col-md-8">
                  <div class="form-group" style="font-size:25px">
                    <label class="small mb-1" for="inputConfirmPassword">Hobby*</label>
                    <input class="form-control py-4" id="inputHobby" type="text" placeholder="Enter Hobby" />
                    <font id="error" color="red"></font>

                  </div>
                </div>
              </div>

              <div class="col-md-8">

                <a href="#" class="btn btn-secondary my-3" style="background-color: #bd8cbf ; padding:10px 40px; float: right" >Next</a>
              </div>
            </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection