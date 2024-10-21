@extends('layouts.app')
 
@section('title', 'Registro - Licencias de Funcionamiento')
 
@section('content')
<main class="d-flex align-items-center py-4 bg-body-tertiary">
<section class="form-signin w-50 m-auto">
  <form method="POST" action="{{ route('users.register') }}">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Registrar nuevo usuario</h1>

    <div class="form-floating mb-2">
      <input name="name" type="text" class="form-control" id="inputName" placeholder="Juan" required>
      <label for="inputName">Nombres</label>
    </div>
    <div class="form-floating mb-2">
      <input name="last_name" type="text" class="form-control" id="inputLastName" placeholder="Perez" required>
      <label for="inputLastName">Apellidos</label>
    </div>
    <div class="form-floating mb-2">
      <input name="ci" type="text" class="form-control" id="inputCI" placeholder="1234567" required>
      <label for="inputCI">Carnet de Identidad</label>
    </div>
    <div class="form-floating mb-2">
      <input name="address" type="text" class="form-control" id="inputAddress" placeholder="Calle Santa Cruz #24" required>
      <label for="inputAddress">Dirección</label>
    </div>
    <div class="form-floating mb-2">
      <input name="phone" type="number" class="form-control" id="inputPhone" placeholder="71234568" maxlength="8" required>
      <label for="inputName">Teléfono</label>
    </div>
    <div class="form-floating mb-2">
      <input name="email" type="email" class="form-control" id="inputEmail" placeholder="usuario@gmail.com" required>
      <label for="inputEmail">Correo Electrónico</label>
    </div>
    <div class="form-floating mb-2">
      <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password" required>
      <label for="inputPassword">Contraseña</label>
    </div>

    <button class="btn btn-success w-100 py-2 my-2" type="submit">Registrarme</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2024</p>
  </form>
</section>
</main>
@endsection