<nav class="navbar navbar-expand-sm navbar-light bg-navcustom">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}">
      <img class="img-fluid nav-logo-custom" src="https://logos-world.net/wp-content/uploads/2020/05/Facebook-Logo-2019.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Facebooknavbar" aria-controls="Facebooknavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="Facebooknavbar">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Admin</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-sm-0 me-md-5">
            <li class="nav-item dropdown text-white">
              @if (Auth::user())
              <img src="{{Storage::url(Auth::user()->img)}}" class="profilepicNavb rounded-5 " alt="">
              @endif
                <a class="nav-link active dropdown-toggle d-inline" href="#" data-bs-toggle="dropdown" aria-expanded="false">@if (Auth::user()) Benvenuto {{Auth::user()->name}} @else Entra in facebook @endif</a>
                <ul class="dropdown-menu">
                  @auth
                  <li><a class="dropdown-item" href="{{route('show_profile')}}">Profilo</a></li>
                  @endauth
                  @guest
                  <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                  <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                  @endguest
                  <li>
                    @auth
                    <form method="POST" action="/logout">
                    @csrf
                    <button class="btn text-danger">LOGOUT</button>
                    </form>
                    @endauth
                  </li>
                </ul>
              </li>
            </ul>
      </div>
    </div>
  </nav>