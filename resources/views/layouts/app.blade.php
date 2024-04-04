<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MartinKeting | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('styles/style.css')}}"/>
</head>

<body>
  <nav class="navMenu">
    <a href="{{route('prospects.index')}}">Prospects</a>
    <a href="#">Clients</a>
    <a href="#">Ventes</a>
    <div class="dot"></div>
  </nav>
    
@yield('content')
</body>
</html>