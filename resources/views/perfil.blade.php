@extends('default')
<head>
  <style>
  p {
    font-size: 1.2em;
  }

  .item2 { grid-area: menu; }
  .item3 { grid-area: main; }
  .item4 { grid-area: right; }
  .grid-container {
    display: grid;
    grid-template-areas:
    'header header header header header header'
    'menu main main main right right'
    'menu main main main right right	';
    grid-gap: 10px;
    background-color: white;
    padding: 10px;
  }
  .grid-container > div {
    <!-- text-align: right; -->
    padding: 50px 0;
    font-size: 1.2em;
  }
  .bg-white {
    background-color: white;
  }
  </style>
</head>

<div class="contenido">

  <div class="grid-container p-5 mt-5">

    <div class="item2 text-center">
      <h1>Perfil de  </h1>
      <h2>{{ $user->name }}</h2><iframe src="https://giphy.com/embed/4BD0RkmL479Sw" width="200" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/preto-e-branco-teletubbies-desenho-4BD0RkmL479Sw">via GIPHY</a></p>

    </div>
    <div class='item3 p-2 bg-white'>
      Tu perfil se encuentra vacío. Completalo desde el botón de configuración.
      <br><br><br>
      <em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</em>
    </div>
  </div>


</div>
