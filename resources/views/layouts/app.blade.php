<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MartinKeting | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}"> 
</head>

<body>
  @include('layouts.header')

  <main>
      @yield('content')
  </main>

  @include('layouts.footer')
</body>
</html>

