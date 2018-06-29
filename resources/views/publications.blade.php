@extends('default')

<div id= "fondo" style="background-image: {{ asset('images/mapa-mundi.png') }}">
  @section('main')

    <div class="contenido" style="width:75%; margin:auto; margin-top:100px; margin-bottom:100px;">
      <div class="container-fluid">

      <h3>Tus publicaciones</h3>

      <ul class="list-group">

        {{-- <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"> --}}

        @include('publication-create')



          @foreach ($publications as $publication)

            <ul class="list-group">
              <li class="p-3 m-4">

                <div class="col-12" style="margin:auto;">

                  <div class="panel panel-white post" style="background-color: rgba(255, 255, 255, 0.43)">
                    <div class="post-heading">
                      <div class="d-flex pull-left image justify-content-between">
                        <!-- PONER AVATAR DEL USUARIO ACA ABAJO -->


                        <img src="https://avatarfiles.alphacoders.com/114/114469.png" width="50px" height="50px" style="border-radius:50%;">
                        <h6 class="text-muted time "> {{ $publication->created_at }}</h6>
                      </div>
                      <div class="pull-left meta">
                        <div class="title h5">
                          <h6 class="text-capitalize font-weight-bold">
                            <a href="#"><b> {{Auth::user()->name}}</b></a>


                          </div>

                        </div>
                      </div>


                      <div class="post-description">

                        <div class="post-description">
                          <p>{{$publication->contenido}}</p>
                          @if ($publication->foto)
                            <img src="{{$publication->foto}}" width="50px">
                          @endif


                        </div>
                        <div class=" d-flex align-items-start justify-content-end">
                          <a class="btn btn-primary btn-sm mt-2 mr-2" href="/publication/{{$publication->id}}/edit">Editar</a>

                          <form method="POST" action="/publication/{{$publication->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mt-2" href="/publication/{{$publication->id}}/edit">Eliminar publicacion</button>
                          </form>



                        </div>
                      </div>
                    </div>
                  </div>



                </li>


              @endforeach
            </ul>
          </div>



        @endsection
      </div>
    </div>
