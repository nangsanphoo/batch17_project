
@extends('frontendtemplate')
@section('content')

<div class="contact" {{-- id="sign up" --}}>
  <div class="violet-overlay">
    <div class="container">
      <h2 class="text-center">Feature Profile</h2>

      <div class="container my-5">

        <div class="row justify-content-center">
          <div class="col-8">
            <form action=" {{-- {{route('viewdetailpage')}} --}} " method="POST" >
              <div class="row">
                <div class="col-12">
                  <div class="MultiCarousel" data-members="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                      @foreach($filters as $member)
                         <a href="{{route('viewdetailpage',$member->id)}}"> 
<<<<<<< HEAD
                          <table border="0">
                            <tr>
                              <td style="padding: 10px">
                                 <img src="{{$member->user->photo}}" class="img-responsive" width="300" height="300">
                              </td> 
                              <td style="padding-left: 30px">
                                Name : {{$member->user->name}}
                              </td>
                              <td style="padding-left: 50px">
                                <a href="{{route('viewdetailpage',$member->id)}} " class="btn btn-secondary my-2" style="background-color: #bd8cbf ; padding:10px 40px; " >View</a>
                              </td>
=======
                          <div class="pad15">
                            <img src="{{asset($member->photo)}}" class="img-fluid">
                            
                            <p class="text-truncate">{{$member->name}}</p>
>>>>>>> 255d676a78e059e6fdc5116729a5b2f79c5cd62b
                           
                            </tr>

                          </table> 
                          {{-- <div class="card-columns"> 
                            <div class="card">
                              <img src="{{$member->user->photo}}" class="img-responsive" width="300" height="300">
                              <span style="text-align: center;">Name : {{$member->user->name}}</span>
                              <a href="{{route('viewdetailpage',$member->id)}} " class="btn btn-secondary my-2" style="background-color: #bd8cbf ; padding:10px 40px; " >View</a>
                            </div>
                          </div> --}}
                        </a>
                      @endforeach 
                    </div>
                  </div>
                </div>
              </div>                         
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection