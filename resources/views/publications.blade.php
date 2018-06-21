@extends('default')

@section('main')
  <div class="contenido" style="width:80%; margin:auto;">

      <h1>Bienvenido {{ $user->name }}</h1>

      <h4>Tus publicaciones</h4>
      <ul class="list-group">
        @foreach ($user->publications as $publication)
          <li class="border rounded border-info p-3 m-4">
            <h6> Título: {{$publication->titulo}}</h6>
          <p> Fecha de creación: XX-XX-XXXX </p>
          <p> {{$publication->contenido}} </p></li>
        @endforeach
      </ul>

  </div>
@endsection
