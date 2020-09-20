
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

                  

                  <div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}" style="font-size:25px">
                    <label class="small mb-1" for="gender"> I'm a*</label>
                    <select class="form-control" id="gender" name="gender" placeholder="Select Gender"> 
                      <option value="gender" >Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      
                    </select>
                    @if($errors->has('gender'))
                    <span class="help-block">
                      {{ $errors->first('gender')}}
                    </span>
                    @endif
                  </div>
                </div>
              </div>
              
              <div class="form-row">
                <div class="col-md-8 ">
                  <div class="form-group {{ $errors->has('age') ? 'has-error' : ''}}" style="font-size:25px">
                    <label class="small mb-1" for="inputAge"> Age*</label>
                    
                    <select class="form-control" id="inputAge" name="age" placeholder="Select Age">

                      <option value="age" >Select Age</option>

                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>

                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                      <option value="32">32</option>
                      <option value="33">33</option>
                      <option value="34">34</option>
                      <option value="35">35</option>
                      <option value="36">36</option>
                      <option value="37">37</option>
                      <option value="38">38</option>
                      <option value="39">39</option>
                      <option value="40">40</option>


                    </select>
                    @if($errors->has('inputAge'))
                    <span class="help-block">
                      {{ $errors->first('inputAge')}}
                    </span>
                    @endif
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
                      <option value="swimming">Swimming</option>

                      <option value="reading">Reading</option>
                      <option value="photography">Photography</option>
                      <option value="acting">Acting</option>
                      <option value="painting">Painting</option>
                      <option value="backing">Backing</option>
                      <option value="boxing">Boxiong</option>
                      <option value="cooking">Cooking</option>
                      <option value="cycling">Cycling</option>
                      <option value="fitness">Fitness</option>
                      <option value="hiking">Hiking</option>
                      <option value="beauty">Beauty</option>
                      <option value="traveling">Travelling</option>
                      <option value="shopping">Shopping</option>
                      <option value="yoga">Yoga</option>


                    </select>
                    @if($errors->has('hobbies'))
                    <span class="help-block">
                      {{ $errors->first('hobbies')}}
                    </span>
                    @endif
                  </div>
                </div>
              </div> 

              <div class="col-md-8">
               <input type="submit" value="Search" class="btn btn-secondary my-4" style="background-color: #bd8cbf;padding: 0px 20px ; float: right">

             </div>
           </form>

         </div>
       </div>
     </div>
   </div>
 </div>
</div>

@endsection