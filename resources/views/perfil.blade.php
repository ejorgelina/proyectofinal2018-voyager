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
      <h1>  Perfil </h1>
      <h2>{{ $user->name }}</h2>
      <iframe src="https://giphy.com/embed/w8f9g2x44aGI" width="200"  frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/dance-friday-t-w8f9g2x44aGI"></a></p>

      <br>

      <h4> <em> falta COMPLETAR PAIS </em> </h4>
    </div>



    <div class='item3 p-2 '>
      <form class="form-control p-5 margin-auto" enctype="multipart/form-data"  method="post">

        <label class="input-group input-group-lg"><strong>Nombre y apellido</strong></label>
        <input type="text" name="name" class="w-100 mb-3 mt-2"  value="">

        <label class="input-group input-group-lg "><strong>Ciudad de nacimiento</strong></label>
        <input type="text" name="name" class="w-100 mb-3 mt-2"  value="">

        <label class="input-group input-group-lg "><strong>Ocupación</strong></label>
        <input type="text" name="" class="w-100 mb-3 mt-2"  value="">

        <label class="input-group input-group-lg "><strong>Fecha de nacimiento</strong></label>
        <input type="date" name="" class="w-100 mb-3 mt-2" value="">

        <span class="pseudo-label"><strong>Idiomas que hablo</strong></span>
        <div class="container-inline actions">
          <select name='language'>
            <option value="ach" selected>Español</option>
            <option value="afr">Inglés</option>
            <option value="ain">Francés</option>
            <option value="aka">Portugués</option>
            <option value="alq">Chino</option>
            <option value="amh">Japonés</option>
            <option value="aoc">Koreano</option>
            <option value="ara">Alemán</option>
            <option value="arc">Arabe</option>
            <option value="arg">Italiano</option>
            <option value="arn">Hebreo</option>
            <option value="ase">Polaco</option>
            <option value="asf">Turco</option>
            <option value="asq">Guaraní</option>
            <option value="ast">Noruego</option>
            <option value="ava">Rumano</option>
          </select>
          <a href="#!" class="badge badge-primary">Añadir idioma</a>
        </div>
        <br>
        <div>
          <label class="input-group input-group-lg "><strong>Intereses</strong></label>
          <input type="text" name="name" class="w-100 mb-3 mt-2"  value="" placeholder="Agrega tus intereses separados por una coma">
        </div>
        <div>
          <label class="input-group input-group-lg"><strong>Otros</strong></label>
          <textarea cols="90%" id="" name="" rows="8">Más información sobre mí
          </textarea>
        </div>

        <div>
          <a href="#" class="btn btn-lg btn-primary btn-block btn-signin mt-3 mb-3">Guardar cambios</a>
        </div>

      </form>
<div>
  @php
      dd($user->friends);
  @endphp

  @foreach ($user->friends() as $friend)
    {{$friend}}
  @endforeach
</div>

    </div>
  </div>
