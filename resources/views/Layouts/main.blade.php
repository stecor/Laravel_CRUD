<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
        {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        --}}
        <link rel="stylesheet" href="/css/app.css"> 
    </head>
    <body>
      
      <header>
        <div class="container">
          <nav>
            <a href="#">Home</a>
            <a href="#">about</a>
            <a href="#">search</a>
            <a href="#">contact</a>
          </nav>
        </div>
      </header>
      <div class="container">

        <div class="container">
            @yield('content')
        </div>
      
    </body>
</html>