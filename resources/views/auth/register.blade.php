@extends('default')


  <div class="contenido">
<div class="contenedor-registracion container-fluid imgFondo d-flex flex-column justify-content-center align-items-center w-100">
  <div class="p-4">

    <form class="form-control p-5 margin-auto" enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
      @csrf
      <h2 class="mb-3 text-center">Registro</h2>
      <label class="input-group input-group-lg"> Nombre y apellido </label>
        <input id="name" type="text" class="w-100 mb-3 mt-2{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}">
        @if ($errors->has('name'))
          <div class="alert alert-warning">{{ $errors->first('name') }}</div>
        @endif


      <label class="input-group input-group-lg "> Ingresa tu e-mail</label>
      <input id="email" type="email" class="w-100 mb-3 mt-2{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

      @if ($errors->has('email'))
        <div class="alert alert-warning">
          {{ $errors->first('email') }}
        </div>
      @endif

      <label for="password" class="input-group input-group-lg ">Ingresa una contraseña</label>
        <input id="password" type="password" class="w-100 mb-3 mt-2{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

        @if ($errors->has('password'))
          <div class="alert alert-warning">
            {{ $errors->first('password') }}
          </div>
        @endif

        <label for="password-confirm" class="input-group input-group-lg">
          Confirma tu contraseña</label>
          <input id="password-confirm" type="password" class="w-100 mb-3 mt-2" name="password_confirmation">


      <button type="submit" name="button" class="btn btn-lg btn-primary btn-block btn-signin mt-3 mb-3">Registrar</button>
      <div class="d-flex justify-content-center">
        <p><a href="#!" class="btn btn-outline-dark">
          <span class="ion-social-facebook mr-2"></span>
          Registrate con Facebook</a>     ó
          <a href="{{ route('home') }}" class="text-dark">
            Volver al Inicio</a>
          </p>
        </div>
      </form>

    </div>

  </div>
</div>
