@extends('frontendtemplate')

@section('content')

<div class="contact" {{-- id="sign up" --}}>
  <div class="violet-overlay">
    <div class="container">
      <h2 class="text-center">Ideal-Partner From</h2>

      <div class="container my-5">

        <div class="row justify-content-center">
          <div class="col-8">
            <form action="{{route('members.store')}}" method="POST" >
              @csrf
              <div class="form-row">
                <div class="col-md-8 ">
                  <div class="form-group" style="font-size:25px">
                    <label class="small mb-1" for="inputAge">Gender *</label>
                    
                    <select class="form-control " id="gender" name="gender" placeholder="Select Gender">
                      <option value="gender" >Select Gender</option>

                      <option value="Male">Male</option>
                      <option value="Female">Female</option>

                    </select>
                    
                  </div>
                </div>
              </div>
              <div class="form-row">

                <div class="col-md-8">

                  <div class="form-group" style="font-size:25px">
                    <label class="small mb-1" for="phoneno"> Phone No *</label>
                    <input type="text" name="phoneno">
                  </div>
                </div>
              </div>
              
              <div class="form-row">
                <div class="col-md-8 ">
                  <div class="form-group" style="font-size:25px">
                    <label class="small mb-1" for="inputAge"> Age*</label>
                    
                    <input type="text" name="age">
                    
                  </div>
                </div>
              </div>

              

             
              <div class="form-row">

                <div class="col-md-8">
                  <div class="form-group" style="font-size:25px">
                    <label class="small mb-1" for="inputHobby">Hobby *</label>
                   	<input type="text" name="hobbies">
                  </div>
                </div>
              </div> 

              <div class="col-md-8">


                <input type="submit" value="Create" class="btn btn-secondary my-4" style="background-color: #bd8cbf;padding: 3px ; float: right">
              </div>
            </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection