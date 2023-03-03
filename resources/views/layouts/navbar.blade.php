<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @yield('style')
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container"><div>
          <a class="navbar-brand" href="#">Guci express</a>
        </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-lg-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome, {{ (auth()->user()->role) }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                  <li><form action="/logout" method="POST">@csrf
                    <button class=" border-0 px-3 bg-white p-1" type="submit">Logout</button>
                  </form></li>
                </ul>
              </li>
                  @else
                  <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                  </li>
              @endauth
              
            </ul>
          </div>
        </div>
      </nav>

      <div class="mt-4 container">
        @yield('body')
      </div>
 <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>   
</body>
</html>