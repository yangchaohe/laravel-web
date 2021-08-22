<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title') - 余光微博</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a href="/" class="navbar-brand">Web App</a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item"><a href="/help" class="nav-link">Help</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      @yield('content')
    </div>

  </body>
</html>
