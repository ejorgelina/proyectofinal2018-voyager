@extends('default')
<head>
  <style>
  p {
    font-size: 1em;
  }

  .item2 { grid-area: menu; }
  .item3 { grid-area: main; }
  .item4 { grid-area: right; }
  .grid-container {
    display: grid;
    grid-template-areas:
    'header header header header header '
    'menu main main main main '
    'menu main main main main 	';
    grid-gap: 10px;
    background-color: white;
    padding: 10px;
  }
  .grid-container > div {
    <!-- text-align: right; -->
    padding: 50px 0;
    font-size: 1.2em;
  }

  </style>
</head>


<div class="grid-container p-5 mt-5">

  <div class="item2 text-center">
    <h1> Mi perfil: </h1>
    <h2>{{ $user->name }}</h2>
    <img src="https://avatarfiles.alphacoders.com/114/114469.png" width="200" height="200" style="border-radius: 50%;">

    <br>

    <h4> <em> Argentina </em> </h4>
  </div>



  <div class='item3 p-2 '>
    <div class="form-control p-5 margin-auto">

      <h4>  <strong>Nombre y apellido</strong> </h4>
<br><br>
      <hr/>
      <h4><strong>Ciudad de nacimiento</strong>  </h4>
      <br><br>
      <hr/>
      <h4>  <strong>Ocupación</strong>  </h4>
      <br><br>
      <hr/>
      <h4><strong>Fecha de nacimiento</strong>  </h4>
      <br><br>
      <hr/>
      <h4>  <strong>Idiomas que hablo</strong>  </h4>
      <br>
      <br>
      <hr/>
      <div>

        <h4> <strong>Intereses</strong>   </h4>
        <br><br>
      </div>
      <hr/>
      <div>
        <h4>  <strong>Más sobre mí</strong>   </h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <div>
        <a href="{{ route('configuracion') }}" class="btn btn-lg btn-primary btn-signin mt-3 mb-3">Modificar perfil</a>
      </div>

    </div>

  </div>
</div>
