
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
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                      <label class="small mb-1" for="inputAge"> Age:</label>
                                      <input class="form-control py-4" id="inputAge" type="text" placeholder="Enter Age" name="age" />
                                  </div>
                              </div>
                          </div>

                          <div class="form-row">

                            <div class="col-md-6">
                                <div class="form-group">
                                  <label class="small mb-1" for="inputPassword">Hair Style:</label>
                                  <input class="form-control py-4" id="inputStyle" type="password" placeholder="Enter Hair Style:" name="style" />
                                  <font id="error" color="red"></font>
                              </div>

                          </div>
                      </div>
                      <div class="form-row">
                        
                        <div class="col-md-6">
                            <div class="form-group">
                              <label class="small mb-1" for="inputConfirmPassword">Hobby:</label>
                              <input class="form-control py-4" id="inputHobby" type="text" placeholder="Enter Hobby" />
                              <font id="cerror" color="red"></font>

                          </div>
                      </div>
                  </div>
                  
                  <div class="col-md-6">
                      
                    <a href="{{route('viewdetailpage')}}" class="btn btn-secondary my-3" style="background-color: #bd8cbf ; padding:10px 40px; float: right" >Next</a>
                </div>
                
            </div>
        </div>
        @endsection