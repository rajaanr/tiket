<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>


    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/preloader.css') }}" rel="stylesheet">
    @yield('style')
  </head>
  <body>
    {{-- <div id="preloader"></div> --}}
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Welcome, {{ auth()->user()->name }}</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap"><form action="/logout" method="POST">@csrf
      <button class="btn btn-dark border-0 nav-link px-4" href="#">Sign out</button>
    </form>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class=" col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      @auth
          @if (auth()->user()->role == 'admin')
          <div class="position-sticky pt-3 sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">
                  <span data-feather="home" class="align-text-bottom"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/listuser">
                  <span data-feather="file" class="align-text-bottom"></span>
                List User
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/addticket">
                  <span data-feather="file" class="align-text-bottom"></span>
                Tiket
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/buyticket">
                  <span data-feather="file" class="align-text-bottom"></span>
                Pemesanan Tiket
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/generate">
                  <span data-feather="file" class="align-text-bottom"></span>
                Generate laporan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">
                  <span data-feather="shopping-cart" class="align-text-bottom"></span>
                  Home
                </a>
              </li>

            </ul>
          </div>
          @endif
          @if (auth()->user()->role == 'operator')
          <div class="position-sticky pt-3 sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <span data-feather="home" class="align-text-bottom"></span>
                  Dashboard
                </a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/addticket2">
                  <span data-feather="file" class="align-text-bottom"></span>
                Tiket
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/buyticket2">
                  <span data-feather="file" class="align-text-bottom"></span>
                Pemesanan Tiket
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/">
                  <span data-feather="shopping-cart" class="align-text-bottom"></span>
                  Home
                </a>
              </li>

              @endif
              @if (auth()->user()->role == 'customer')
              <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                      <span data-feather="home" class="align-text-bottom"></span>
                      Dashboard
                    </a>
                  </li>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/buyticket3">
                      <span data-feather="file" class="align-text-bottom"></span>
                    Pemesanan Tiket
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/">
                      <span data-feather="shopping-cart" class="align-text-bottom"></span>
                      Home
                    </a>
                  </li>
                </div>

              @endif

            </ul>
          </div>



      @endauth

    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     <div class=" mt-4">
      @yield('isi')
    </div>

    </main>
  </div>
</div>
@yield('script')
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script>

</script>
  </body>
</html>
