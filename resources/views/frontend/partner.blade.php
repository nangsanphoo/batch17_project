
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
                    <label class="small mb-1" for="gender"> I'm a*</label>
                    <select class="form-control " id="gender" name="gender" placeholder="Select Gender">
                      <option value="gender" >Select Gender</option>

                      <option value="Male">Male</option>
                      <option value="female">Female</option>

                    </select>
                  </div>
                </div>
              </div>
              {{-- <div class="form-row">

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
              </div> --}}
             {{--  <div class="form-row">

                <div class="col-md-8">

                  <div class="form-group" style="font-size:25px">
                    <label class="small mb-1" for="Date"> Birthday*</label>
                    <input class="form-control py-4" id="Date" type="Date" placeholder="Enter Month" name="Date" />

                  </div>
                </div>
              </div> --}}
              <div class="form-row">
                <div class="col-md-8 ">
                  <div class="form-group" style="font-size:25px">
                    <label class="small mb-1" for="inputAge"> Age*</label>
                    
                    <select class="form-control " id="inputAge" name="age" placeholder="Select Age">
                      <option value="gender" >Select Age</option>

                      <option value="A1">20</option>
                      <option value="A2">21</option>
                       <option value="A3">23</option>
                      <option value="A4">24</option>
                       <option value="A5">25</option>
                      <option value="A6">26</option>
                       <option value="A7">27</option>
                      <option value="A8">28</option>
                       <option value="A9">29</option>
                      <option value="A10">30</option>
                       <option value="A11">31</option>
                      <option value="A12">32</option>
                       <option value="A13">33</option>
                      <option value="A14">34</option>
                       <option value="A15">35</option>
                      <option value="A16">36</option>
                       <option value="A17">37</option>
                      <option value="A18">38</option>
                       <option value="A19">39</option>
                      <option value="A20">40</option>
                       

                    </select>
                    
                  </div>
                </div>
              </div>

              

             {{--  <div class="form-row">

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
              </div> --}}

              <div class="col-md-8">

<<<<<<< HEAD
                <input type="submit" value="Search" class="btn btn-secondary my-3" style="background-color: #bd8cbf;padding: 10px 40px; float: right">
=======
                <input type="submit" value="Search" class="btn btn-secondary my-3" style="background-color: #bd8cbf ; padding:10px 40px; float: right" >
>>>>>>> a6944fd3e107ca3a42b1be8b880a8f470e3535f2
              </div>
            </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection