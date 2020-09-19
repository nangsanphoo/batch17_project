
@extends('frontendtemplate')
@section('content')

<div class="contact" {{-- id="sign up" --}}>
  <div class="violet-overlay">
    <div class="container">
      <h2 class="text-center">View Detail From</h2>

      <div class="container my-5">

        <div class="row justify-content-center">
          <div class="col-8">

           <table class="table" border="0" >
            <tr>
              <td rowspan="7">
                <img src="{{asset($members->photo)}}" style="width: 300px; height: 400px" class="img-fluid">
              </td>

              <td>Name :   {{$members->name}} 
              </td>
            </tr>

            <tr>
              <td>
               Gender :  {{$members->gender}} 
             </td>
           </tr>

           <tr>
            <td>
             Age :  {{$members->age}}  
           </td>
         </tr>


         <tr>
          <td>
           Description :  {{$members->description}} 
         </td>
       </tr>

     </table>

   </div>
 </div>
</div>

<div class="text-left">
 <a href=" {{route('partnerpage')}}" class="btn btn-secondary my-3" style="background-color: #bd8cbf ; padding:10px 40px;" >Back</a>
 <a href="#" class="btn btn-secondary my-3" style="background-color: #bd8cbf ; padding:10px 40px; float: right" >Join</a>
</div>
</div>
</div>
</div>
@endsection