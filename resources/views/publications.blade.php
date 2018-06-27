@extends('default')

<div style="background-image: {{ asset('images/mapa-mundi.png') }}">
  @section('main')

    <div class="contenido" style="width:75%; margin:auto; margin-top:100px; margin-bottom:100px;">

      <h3>Tus publicaciones</h3>
      <ul class="list-group">

        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

        @include('publication-create')

        @foreach ($publications as $publication)

          <li class="border rounded border-info p-3 m-4" style="background-color:rgb(255, 255, 255);">

            <div class="container bootstrap snippet">
              <div class="col-sm-8">
                <div class="panel panel-white post">  <!-- le saque la clase panel-shadow -->
                  <div class="post-heading">
                    <div class="pull-left image">
                      <img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                    </div>
                    <div class="pull-left meta">
                      <div class="title h5">
                        <a href="#"><b>{{$publication->user->name}}</b></a>
                        made a post.
                      </div>
                      <h6 class="text-muted time"> {{ $publication->created_at }}</h6>
                    </div>
                  </div>
                  <div class="post-description">
                    <p>{{$publication->contenido}}</p>
                    @if ($publication->foto)
                      <img src="{{$publication->foto}}" width="50px">
                    @endif  
                    <div class="stats">
                      <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-thumbs-up icon"></i>2
                      </a>
                      <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-share icon"></i>12
                      </a>
                    </div>

                  </div>
                  <div class="post-footer">
                    <div class="input-group">
                      <input class="form-control" placeholder="Add a comment" type="text">
                      <span class="input-group-addon">
                        <a href="#"><i class="fa fa-edit"></i></a>
                      </span>
                    </div>
                    <ul class="comments-list">
                      <li class="comment">
                        <a class="pull-left" href="#">
                          <img class="avatar" src="https://bootdey.com/img/Content/user_1.jpg" alt="avatar">
                        </a>
                        <div class="comment-body">
                          <div class="comment-heading">
                            <h4 class="user">Gavino Free</h4>
                            <h5 class="time">5 minutes ago</h5>
                          </div>
                          <p>Sure, oooooooooooooooohhhhhhhhhhhhhhhh</p>
                        </div>
                        <ul class="comments-list">
                          <li class="comment">
                            <a class="pull-left" href="#">
                              <img class="avatar" src="https://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                            </a>
                            <div class="comment-body">
                              <div class="comment-heading">
                                <h4 class="user">Ryan Haywood</h4>
                                <h5 class="time">3 minutes ago</h5>
                              </div>
                              <p>Relax my friend</p>
                            </div>
                          </li>
                          <li class="comment">
                            <a class="pull-left" href="#">
                              <img class="avatar" src="https://bootdey.com/img/Content/user_2.jpg" alt="avatar">
                            </a>
                            <div class="comment-body">
                              <div class="comment-heading">
                                <h4 class="user">Gavino Free</h4>
                                <h5 class="time">3 minutes ago</h5>
                              </div>
                              <p>Ok, cool.</p>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>



            {{-- <h6> Título: {{$publication->titulo}}</h6>
            <p> <small> Fecha de creación: {{ $publication->created_at }} </small> </p>
            <p > {{$publication->contenido}} {{ $publication->user_id}} </p> --}}
            <a class="btn btn-primary btn-sm" href="/publication/{{$publication->id}}/edit">Editar</a>

            <form method="POST" action="/publication/{{$publication->id}}">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" href="/publication/{{$publication->id}}/edit">Eliminar publicacion</button>
            </form>
          </li>


        @endforeach
      </ul>
    </div>



  @endsection
</div>
