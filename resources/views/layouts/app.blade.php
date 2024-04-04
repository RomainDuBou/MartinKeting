<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MartinKeting | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('styles/style.css')}}"/>
</head>

<body>
      <nav>
        <div class="navbar">
          <div class="logo"><a href="#">Blogs</a></div>
          <ul class="menu">
            <li><a href="{{route('prospects.create')}}">Créer un nouveau prospect</a></li>
            {{-- <li><a href="{{route('blog.store')}}">Voir les posts</a></li> --}}
          </ul>
        </div>
      </nav>
    
@yield('content')
</body>
</html>