
@extends('frontendtemplate')
@section('content')

<div class="contact" {{-- id="sign up" --}}>
  <div class="violet-overlay">
    <div class="container">
      <h2 class="text-center">Ideal-Partner From</h2>

      <div class="container my-5">

        <div class="row justify-content-center">
          <div class="col-8">
            <form action="{{route('profilepage')}}" method="POST" >
              @csrf
              <div class="form-row">

                <div class="col-md-8">

                  <div class="form-group" style="font-size:25px">
                    <label class="small mb-1" for="gender"> Seeking a*</label>
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
                    <label class="small mb-1" for="age"> Age *</label>
                    <input type="text" name="age">
                    
                  </div>
                </div>
              </div>

              <div class="form-row">

                <div class="col-md-8">
                  <div class="form-group {{ $errors->has('hobbies') ? 'has-error' : ''}}" style="font-size:25px">
                    <label class="small mb-1" for="inputHobby">Hobby *</label>
                    <select class="form-control" id="inputHobby" name="hobbies" placeholder="Select..." >
                      <option value="age" >Select Hobby</option>

                      <option value="dancing">Dancing</option>
                      <option value="singing">Singing</option>

                    </select>
                      
                  </div>
                </div>
              </div> 

              <div class="col-md-8">
               <input type="submit" value="Search" class="btn btn-secondary my-4" style="background-color: #bd8cbf;padding: 0px 20px ; float: right">

             </div>
           </form>

                @if(Auth::check())
                @if(Auth::user()->getRoleNames()[0]=='User')

                <a href="{{route('members.create')}}" class="btn btn-secondary my-4" style="background-color: #bd8cbf">Request to become Member</a> 
                @endif

                @if(Auth::user()->getRoleNames()[0]=='Member')
               <a href="" class="primary-btn2 mt-3">You Are Member</a>
                @endif

                @else
                <input type="submit" value="Want to Be Member" class="btn btn-secondary my-4" style="background-color: #bd8cbf;padding: 3px ; float: left ; width: 40%">
                @endif
              </div>
            </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection