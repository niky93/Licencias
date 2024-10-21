@extends('layouts.app')
 
@section('title', 'Registro - Licencias de Funcionamiento')
 
@section('content')
<main class="d-flex align-items-center py-4 bg-body-tertiary">
<section class="form-signin w-50 m-auto">
  <form method="POST" action="{{ route('users.register') }}">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Registrar nuevo usuario</h1>

    <div class="form-floating">
      <input name="name" type="text" class="form-control" id="inputName" placeholder="Juan Perez" required>
      <label for="inputName">Nombre Completo</label>
    </div>
    <div class="form-floating">
      <input name="ci" type="text" class="form-control" id="inputCI" placeholder="1234567" required>
      <label for="inputCI">Carnet de Identidad</label>
    </div>
    <div class="form-floating">
      <input name="phone" type="text" class="form-control" id="inputPhone" placeholder="71234568" required>
      <label for="inputName">Teléfono</label>
    </div>
    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="inputEmail" placeholder="usuario@gmail.com" required>
      <label for="inputEmail">Correo Electrónico</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password" required>
      <label for="inputPassword">Contraseña</label>
    </div>

    <button class="btn btn-success w-100 py-2 my-2" type="submit">Registrarme</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2024</p>
  </form>
</section>
</main>
@endsection