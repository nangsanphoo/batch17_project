
@extends('frontendtemplate')
@section('content')

<div class="contact">
  <div class="violet-overlay">
    <div class="container">
      <h2 class="text-center">Contact Us</h2>

      <div class="container my-5">

        <div class="row justify-content-center">
          <div class="col-8">
            <form action="{{route('contactpage')}}" method="POST" >


             <section class="contact-section">
              <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118968.56198203056!2d99.53958503069242!3d21.280666472111605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30d4415cf792df8d%3A0x77ab811d8ded7cea!2sKeng%20Tung!5e0!3m2!1sen!2smm!4v1600058753441!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
              </div>
              </section>

            <div class="col-md-12">
              <div class="row">
                <h4><strong>Get in touch with us</strong></h4>               
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row">
                <div class="dbox w-100 d-flex">
              
              <div class="text">
                <p><span>Address:</span> Kyaing Tong, Shan State</p>
              </div>
            </div>


            <div class="dbox w-100 d-flex">
           
              <div class="text">
                <p><span>Phone:</span>+95-9441-1182-1-3</a></p>
              </div>
            </div>

                        

            </form>
          </div>
        </div>

      </div>
    
  </div>
</div>
@endsection