@extends('layouts.app')
 
@section('title', 'Ingresar - Licencias de Funcionamiento')
 
@section('content')
<main class="d-flex align-items-center py-4 bg-body-tertiary">
  <section class="form-signin w-50 m-auto">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="my-auto">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('users.login') }}">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Ingresar con su cuenta de Usuario</h1>

      <div class="form-floating mb-2">
        <input name="email" type="email" class="form-control" id="inputEmail" placeholder="usuario@gmail.com" required>
        <label for="inputEmail">Correo Electrónico</label>
      </div>
      <div class="form-floating mb-2">
        <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password" required>
        <label for="inputPassword">Contraseña</label>
      </div>

      <button class="btn btn-success w-100 py-2 my-2" type="submit">Ingresar</button>
      <a href="{{ route('register') }}">
        <button class="btn btn-outline-success w-100 py-2" type="button">Registrarme</button>
      </a>
      <p class="mt-5 mb-3 text-body-secondary">&copy; 2024</p>
    </form>
</section>
</main>
@endsection