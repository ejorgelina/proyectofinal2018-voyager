@extends('default')

<div class="contenido">
          <div class="contenedor-registracion container-fluid imgFondo d-flex flex-column justify-content-center align-items-center w-100">
              <div class="p-4" style="max-width: 420px;">
                  <form class="form-control p-5 margin-auto" method="POST" action="{{ route('login') }}">
                  @csrf

                  <h2 class="mb-3 text-center">Bienvenido</h2>
                    <label for="email" class="input-group input-group-lg"> Ingresa tu e-mail o nombre de usuario</label>
                    <input id='email' type="email"  class="w-100 mb-3 mt-2 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">
                      @if ($errors->has('email'))
                        <div class="alert alert-danger">
                          {{ $errors->first('email') }}
                          <b class="ion-android-alert"></b>
                        </div>
                      @endif

                    <label for="password" class="input-group input-group-lg ">Ingresa tu contraseña</label>
                    <input id="password" type="password" class="w-100 mb-3 mt-2{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                          @if ($errors->has('password'))
                             <div class="alert alert-danger">
                                  {{ $errors->first('password') }}
                                  <b class="ion-android-alert"></b>
                              </div>
                          @endif

          <div class="align-items-center">
              <label>
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
              </label>

              <button type="submit" class="btn btn-lg btn-primary btn-block btn-signin mt-3 mb-3">
             Login
              </button>

              <a href="{{ route('password.request') }}" class="text-dark">  ¿Olvidaste tu contraseña?
              </a>

         </div>



      </form>
    </div>
  </div>
</div>


{{-- <?php
    if (isset($_GET['primeraVez'])) {
      echo "<div class='alert alert-info text-center'>
<strong><h3>¡Gracias por registrarte!</h3></strong>
<h5>Iniciá sesión para acceder a tu perfil</h5></div>";
}
?> --}}
