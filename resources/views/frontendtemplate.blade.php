<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cupid's Heart</title>
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.min.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{asset('frontend/imgs/cup66.jpg')}}" alt="#" width="80" height="60"></a>
                <p style="color: white"><i>CUPID'S <span style="color: violet">HEART</span></i></p>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="show-menu">
                    <ul class="navbar-nav ml-auto">
                        
                

                            <a class="nav-link" href="{{route('mainpage')}}">Home <span class="sr-only">(current)</span></a>
                        @role('Customer')
            <span classs="float-right d-xl-block d-lg-block d-md-block d-none">
              <a id="navbarDropdown" class="nav-link dropdown-toggle loginLink" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
            </span>
            @else
        

                            <a class="nav-link" href="{{route('loginpage')}}">Login</a>
                            <a class="nav-link" href="{{route('registerpage')}}">sign up</a>
                        @endrole
                        
                            <a class="nav-link" href="{{route('contactpage')}}">contact us</a>
                        
                    </ul>
                </div>
            </div>
        </nav>
        
        @yield('content')
        
        <footer>
            <div class="container">
                
            </div>
            <div class="copyright text-center">
                <p>Copyright 2020  Design by Cupid's Heart Company</a></p>
            </div>
        </footer>
        
        <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script>
            $(function () {
                
                'use strict';
                
                var winH = $(window).height();
                
                $('header').height(winH);  
                
                $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
                
                $('.navbar ul li a.search').on('click', function (e) {
                    e.preventDefault();
                });
                $('.navbar a.search').on('click', function () {
                    $('.navbar form').fadeToggle();
                });
                
                $('.navbar ul.navbar-nav li a').on('click', function (e) {
                    
                    var getAttr = $(this).attr('href');
                    
                    e.preventDefault();
                    $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
                });
            })
        </script>
    </body>
</html>