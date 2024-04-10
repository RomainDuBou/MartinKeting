<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MartinKeting | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}" />
</head>

<body>
    <nav class="navMenu">
        <img class="logoNav" src="{{asset('images/maRtinKeting.png')}}">
        <a href="{{ route('prospects.index') }}" class="@yield('prospects-active')">Prospects</a>
        <a href="{{ route('clients.index') }}" class="@yield('clients-active')">Clients</a>
        <a href="{{ route('ventes.index') }}" class="@yield('ventes-active')">Ventes</a>
        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            <button class="deconnexionButton" type="submit">Déconnexion</button>
        </form>
    </nav>

    @yield('content')
</body>

</html>
