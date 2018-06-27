@extends('default')

<div style="background-image: {{ asset('images/mapa-mundi.png') }}">
  @section('main')


    <div class="contenido" style="width:75%; margin:auto; margin-top:100px; margin-bottom:100px;">

      <h3>Tus publicaciones</h3>
      <div class="contenido d-flexs">
        @if ($errors)
          @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
          @endforeach
        @endif
        <form action="/publications/create"  enctype="multipart/form-data" method="POST">
          {{ csrf_field() }}
          <ul class="list-group">
            <li class="border rounded border-info p-3 m-4">
              <label>Titulo</label> <br>
              <input class= "form-control" type="text" name="titulo">
              <br><br>
              <textarea class= "form-control" name="contenido" placeholder="Que hay de nuevo viejo?"></textarea>
              <br><br>
              <input type="file" name="foto">
              <br><br>
              <button class= "btn btn-primary btn-block" type="submit" name="button">Publicar</button>
            </li>
          </ul>

        </form>
      </div>







      <ul class="list-group">
        @foreach ($publications as $publication)
          <li class="border rounded border-info p-3 m-4" style="background-color:rgb(255, 255, 255);">
            <h6> Título: {{$publication->titulo}}</h6>
            <p> <small> Fecha de creación: {{ $publication->created_at }} </small> </p>
<<<<<<< HEAD
=======
            <p > {{$publication->contenido}} {{ $publication->user_id}} </p></li>
          @endforeach
        </ul>
      </div>
>>>>>>> 9a8998a0eba303722822f8dccc20c1799f9ad510




                  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
                  <div class="container bootstrap snippet">
                      <div class="col-sm-8">
                          <div class="panel panel-white post panel-shadow">
                              <div class="post-heading">
                                  <div class="pull-left image">
                                      <img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                                  </div>
                                  <div class="pull-left meta">
                                      <div class="title h5">
                                          <a href="#"><b>{{$publication->user->name}}</b></a>
                                          made a post.
                                      </div>
                                      <h6 class="text-muted time">1 minute ago</h6>
                                  </div>
                              </div>
                              <div class="post-description">
                                  <p>{{$publication->contenido}}</p>
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

















            <p > {{$publication->contenido}} </p>
            <a class="btn btn-primary btn-sm" href="/publication/{{$publication->id}}/edit">Editar publicar</a>
            <button type="submit" name="btn-update"> Actualizar publicacion</button>
          </li>
        @endforeach
      </ul>
    </div>



  @endsection
</div>





<style media="screen">
.panel-shadow {
  box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
}
.panel-white {
border: 1px solid #dddddd;
}
.panel-white  .panel-heading {
color: #333;
background-color: #fff;
border-color: #ddd;
}
.panel-white  .panel-footer {
background-color: #fff;
border-color: #ddd;
}

.post .post-heading {
height: 95px;
padding: 20px 15px;
}
.post .post-heading .avatar {
width: 60px;
height: 60px;
display: block;
margin-right: 15px;
}
.post .post-heading .meta .title {
margin-bottom: 0;
}
.post .post-heading .meta .title a {
color: black;
}
.post .post-heading .meta .title a:hover {
color: #aaaaaa;
}
.post .post-heading .meta .time {
margin-top: 8px;
color: #999;
}
.post .post-image .image {
width: 100%;
height: auto;
}
.post .post-description {
padding: 15px;
}
.post .post-description p {
font-size: 14px;
}
.post .post-description .stats {
margin-top: 20px;
}
.post .post-description .stats .stat-item {
display: inline-block;
margin-right: 15px;
}
.post .post-description .stats .stat-item .icon {
margin-right: 8px;
}
.post .post-footer {
border-top: 1px solid #ddd;
padding: 15px;
}
.post .post-footer .input-group-addon a {
color: #454545;
}
.post .post-footer .comments-list {
padding: 0;
margin-top: 20px;
list-style-type: none;
}
.post .post-footer .comments-list .comment {
display: block;
width: 100%;
margin: 20px 0;
}
.post .post-footer .comments-list .comment .avatar {
width: 35px;
height: 35px;
}
.post .post-footer .comments-list .comment .comment-heading {
display: block;
width: 100%;
}
.post .post-footer .comments-list .comment .comment-heading .user {
font-size: 14px;
font-weight: bold;
display: inline;
margin-top: 0;
margin-right: 10px;
}
.post .post-footer .comments-list .comment .comment-heading .time {
font-size: 12px;
color: #aaa;
margin-top: 0;
display: inline;
}
.post .post-footer .comments-list .comment .comment-body {
margin-left: 50px;
}
.post .post-footer .comments-list .comment > .comments-list {
margin-left: 50px;
}
</style>
