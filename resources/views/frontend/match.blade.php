@extends('frontendtemplate')

@section('content')

<div class="contact" {{-- id="sign up" --}}>
  <div class="violet-overlay">
    <div class="container">
      <h2 class="text-center">Match From</h2>

      <div class="container my-2">

        <div class="row justify-content-center">
          <div class="col-10">
            <!-- Content Row -->
            @foreach($matches as $match)
            <table class="table" border="0" style="">
               <tr>
                <td>
                  <img src="{{asset($match->user->photo)}}" style="width: 300px; height: 300px" class="img-fluid">

                <td>
                <img src="{{asset('frontend/imgs/heart.png')}}" style="width: 200px; height: 200px;padding-top: 50px;" class="img-fluid">
                </td>
                <td>
                  <img src="{{asset($match->member->user->photo)}}" style="width: 300px; height: 300px" class="img-fluid">
                </td>
              </tr>
               <tr>
                <td>Name : {{$match->user->name}}  </td>
                <td></td>
                <td>Name : {{$match->member->user->name}}  </td>
              </tr>
 -

         </table>
         @endforeach
         <div class="row justify-content-center">
                  <div class="col-md-6 my-5">
                    <a href="{{route('contactpage')}}" class="btn btn-secondary my-3" style="background-color: #bd8cbf ; padding:10px 40px;" >Contact Us to Meet Your True Partner</a>
                  </div>
                </div>
       </div>
     </div>
     <!-- /.container-fluid -->
   </div>

 </div>
</div>
</div>

@endsection


