<nav class="navbar navbar-expand-md navbar-dark bg-success mb-4">
  <div class="container-fluid">
    <img alt="GMS-Logo" height="48" class="px-4" src="https://www.gmsantacruz.gob.bo/images/LOGO-DEL-GAMSCS-ok-02.png"/>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> --}}
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-md-0">
        @guest
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Ingresar</a>
        </li>
        @endguest

        @auth
        <li class="nav-item">
          <span class="nav-link active" aria-current="page">Hola <strong>{{ auth()->user()->name }}</strong></span>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('users.logout') }}">Salir</a>
        </li>
        @endauth

      </ul>
    </div>
  </div>
</nav>