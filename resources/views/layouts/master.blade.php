<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name', 'error')}}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/5a37eae510.js" crossorigin="anonymous"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="https://kit.fontawesome.com/5a37eae510.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>{{ config('app.name') }}</title>
    </head>
    <body>
    <!-- Authentication Links -->
    @guest
        <div id="app">
            @include('partials.navbar')
        </div>
        <br>
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    @endguest
    @auth
    @if(Auth::user()->blocked == '1')
         <div id="app">
            @include('partials.navbar')
        </div>
        <div class="container">
            <br>
            <h3 class="pb-3 mb-4 border-bottom">
                Dit account is geblokkeerd
             </h3>
             <p>Uw account is helaas tijdelijk/permanent geblokkeerd vanwege 1 van de volgende redenen:</p>
             <p>- Er zijn verdachte activiteiten op uw account.</p>
             <p>- Uw account is mogelijk als bot geindentificeerd als bot.</p>
             <p>- U heeft onze regels verbroken.</p><br>
             <p>Om meer te weten te komen achter de reden van uw blokkade stuur een mail via ons contact formulier met de volgende gegevens</p>
             <p>- Uw Gebruikersnaam</p>
             <p>- Uw E-mail</p><br>
             <p>- Waarom u mogelijk denkt geblokkeerd te zijn</p><br>
             <p>na het verzenden van deze mail zult u te horen krijgen wat de reden is en of deze blokkade te verheffen is.</p>
             <br>
             <form id="logout-form" action="{{ route('logout') }}" method="POST">
                <button class="btn btn-success"><a style="text-decoration: none; color: black;" href="{{ route('logout') }}">log uit</a></button>
                @csrf
            </form>
        </div>
    @else 
        <div id="app">
            @include('partials.navbar')
        </div>
        <br>
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    @endif
    @endauth
    
    
    
</body>
</html>