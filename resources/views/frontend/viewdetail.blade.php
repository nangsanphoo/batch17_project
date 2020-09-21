
@extends('frontendtemplate')
@section('content')

<div class="contact" {{-- id="sign up" --}}>
  <div class="violet-overlay">
    <div class="container">
      <h2 class="text-center">View Detail Formm</h2>

      <div class="container my-5">

        <div class="row justify-content-center">
          <div class="col-8">

           <table class="table" border="0" >
            <tr>
<<<<<<< HEAD
              <td rowspan="6">
                <img src="{{asset($members->user->photo)}}" style="width: 300px; height: 400px" class="img-fluid">
=======
              <td rowspan="8">
                <img src="{{asset($members->photo)}}" style="width: 300px; height: 400px" class="img-fluid">
>>>>>>> 255d676a78e059e6fdc5116729a5b2f79c5cd62b
              </td>

              <td>Name :   {{$members->user->name}} 
              </td>
            </tr>

<<<<<<< HEAD
=======
            <tr>
              <td>
               Email :  {{$members->email}} 
             </td>
           </tr>

           <tr>
            <td>
             Phone No :  {{$members->phoneno}} 
           </td>
         </tr>

<<<<<<< HEAD

         
=======
>>>>>>> ea1e4329bfb94a9fb138e65dae4ca5962fa7d8bf
         <tr>
          <td>
           Gender :  {{$members->gender}} 
         </td>
       </tr>
>>>>>>> 255d676a78e059e6fdc5116729a5b2f79c5cd62b

       <tr>
        <td>
         Age :  {{$members->age}} 
       </td>
     </tr>

     <tr>
      <td>
       Hobbies :  {{$members->hobbies}}  
     </td>
   </tr>

<<<<<<< HEAD
=======
   <tr>
    <td>
     Address :  {{$members->address}}  
   </td>
 </tr>
>>>>>>> ea1e4329bfb94a9fb138e65dae4ca5962fa7d8bf

 <tr>
  <td>
   Description :  {{$members->description}} 
 </td>
</tr>
<<<<<<< HEAD

</table>

</div>
</div>
</div>

=======

</table>

</div>
</div>
</div>

>>>>>>> ea1e4329bfb94a9fb138e65dae4ca5962fa7d8bf

<<<<<<< HEAD
 <div class="text-left">
   <a href="{{route('partnerpage')}}" class="btn btn-secondary my-3" style="background-color: #bd8cbf ; padding:10px 40px;" >Back</a>
   <a href="{{route('matchjoin',$members->id)}}" class="btn btn-secondary my-3" style="background-color: #bd8cbf ; padding:10px 40px; float: right">Join</a>
 </div>
=======
<div class="text-left">
 <a href="{{route('partnerpage')}}" class="btn btn-secondary my-3" style="background-color: #bd8cbf ; padding:10px 40px;" >Back</a>
 <a href="{{route('paymentpage')}}" class="btn btn-secondary my-3" style="background-color: #bd8cbf ; padding:10px 40px; float: right" >Join</a>
</div>
>>>>>>> 255d676a78e059e6fdc5116729a5b2f79c5cd62b
</div>
</div>
</div>
@endsection