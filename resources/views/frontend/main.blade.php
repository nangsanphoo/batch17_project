@extends('frontendtemplate')
@section('content')

<header id="home">
            <div class="overlay">
                <div class="container">
                    <div>
                        <h1><span>Dating Site</span><br>Sign up now and meet someone!</h1>
                        <p>Welcome to Datenow,if you join you will meet someone.We're one of the biggest dating company.</p>
                        <button><a href="{{route('registerpage')}}" class="text-uppercase">sign up</a></button>
                    </div>
                </div>
            </div>
</header>

@endsection