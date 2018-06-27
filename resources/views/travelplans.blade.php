@extends('default')

<div style="background-image: {{ asset('images/mapa-mundi.png') }}">
  @section('main')

    <div class="contenido" style="width:75%; margin:auto; margin-top:100px; margin-bottom:100px;">
      
      <h3> Tus Planes de viaje </h3>
      <ul class="list-group">
        @foreach ($travelplans as $travelplan)
          <li class="border rounded border-info p-3 m-4" style="background-color:rgb(255, 255, 255);">
            <h5> Destino: {{$travelplan->destino}} </h5>
            <p> Fecha de salida:  {{$travelplan->fecha_de_salida}} </p>
            <p> Fecha de regreso: {{$travelplan->fecha_de_regreso}} </p>
            <p> Presupuesto: {{$travelplan->presupuesto}} </p>
            <p> {{$travelplan->detalle}} </p>
            <p> <small> Fecha de creación: {{ $travelplan->created_at }} </small> </p>
          </li>
          @endforeach
        </ul>
      </div>
    @endsection
  </div>
