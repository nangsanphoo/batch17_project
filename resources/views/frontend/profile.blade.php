
@extends('frontendtemplate')
@section('content')

<div class="contact" {{-- id="sign up" --}}>
  <div class="violet-overlay">
    <div class="container">
      <h2 class="text-center">Feature Profile</h2>

      <div class="container my-5">

        <div class="row justify-content-center">
          <div class="col-8">
            <form action="{{route('profilepage')}}" method="POST" >
              <div class="row">
                <div class="col-12">
                  <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                      {{-- @foreach($items as $item)
                      <div class="item">
                        <a href="{{route('itempage',$item->id)}}">
                          <div class="pad15">
                            <img src="{{asset($item->photo)}}" class="img-fluid">
                            <p class="text-truncate">{{$item->name}}</p>
                            <p class="item-price">
                              <strike>250,000 Ks </strike> 
                              <span class="d-block">{{$item->price}} Ks</span>
                            </p> --}}


                            <a href="{{route('viewdetailpage')}}" class="btn btn-secondary my-3" style="background-color: #bd8cbf ; padding:10px 40px; ">View</a>
{{-- 
              </div>
            </a>
          </div>
          @endforeach --}}
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