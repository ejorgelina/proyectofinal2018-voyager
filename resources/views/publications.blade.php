@extends('default')

<div style="background-image: {{ asset('images/mapa-mundi.png') }}">
  @section('main')


    <div class="contenido" style="width:75%; margin:auto; margin-top:100px; margin-bottom:100px;">

      <h3>Tus publicaciones</h3>
      <ul class="list-group">
        @foreach ($publications as $publication)
          <li class="border rounded border-info p-3 m-4" style="background-color:rgb(255, 255, 255);">
            <h6> Título: {{$publication->titulo}}</h6>
            <p> <small> Fecha de creación: {{ $publication->created_at }} </small> </p>
            <p > {{$publication->contenido}} </p></li>
          @endforeach
        </ul>
      </div>



    @endsection
  </div>
