@extends('default')

<div style="background-image: {{ asset('images/mapa-mundi.png') }}">
  @section('main')

    <div class="contenido" style="width:75%; margin:auto; margin-top:100px; margin-bottom:100px;">

      <h3>Tus Planes de Viaje</h3>
      <ul class="list-group">

        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

        @include('travelplan-create')

        @foreach ($travelplans as $travelplan)

          <li class=" " style="background-color:rgb(255, 255, 255);">

            <div class="container bootstrap snippet">
              <div class="col-sm-8">
                <div class="panel panel-white post">  <!-- le saque la clase panel-shadow -->
                  <div class="post-heading">
                    <div class="pull-left image">
                      <img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                    </div>
                    <div class="pull-left meta">
                      <div class="title h5">
                        <a href="#"><b>{{$travelplan->user->name}}</b></a>
                        made a new Travelplan.
                      </div>
                      <h6 class="text-muted time"> {{ $travelplan->created_at }}</h6>
                    </div>
                  </div>
                  <div class="post-description">
                    <p>{{$travelplan->destino}}</p>
                    <div class="stats">
                      <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-thumbs-up icon"></i>2
                      </a>
                      <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-share icon"></i>12
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            {{-- <h6> Título: {{$travelplan->destino}}</h6>
            <p> <small> Fecha de creación: {{ $travelplan->created_at }} </small> </p>
            <p > {{$travelplan->contenido}} {{ $travelplan->user_id}} </p> --}}
            <a class="btn btn-primary btn-sm" href="/travelplan/{{$travelplan->id}}/edit">Editar</a>

            <form method="POST" action="/travelplan/{{$travelplan->id}}">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" href="/travelplan/{{$travelplan->id}}/edit">Eliminar publicacion</button>
            </form>
          </li>


        @endforeach
      </ul>
    </div>



  @endsection
</div>
