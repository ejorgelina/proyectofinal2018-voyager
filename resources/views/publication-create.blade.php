
<div class=" d-flexs">
  @if ($errors)
    @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
  @endif

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


  <form action="/publication"  enctype="multipart/form-data" method="POST">
    {{ csrf_field() }}
    <ul class="list-group">
      <li class="p-3 m-4">

        <div class="col-12" style="margin:auto; background-color:rgba(255, 255, 255);">
          <div class="panel panel-white post ">
            <div class="post-heading">
              <div class="pull-left image">
                <!-- PONER AVATAR DEL USUARIO ACA ABAJO -->

                <img src="https://avatarfiles.alphacoders.com/114/114469.png" width="50px" height="50px" style="border-radius:50%;">
              </div>
              <div class="pull-left meta">
                <div class="title h5">
                  <h6 class="text-capitalize font-weight-bold">
                    <a href="#"><b> {{Auth::user()->name}}</b></a>

                  </div>

                </div>
              </div>


              <div class="post-description d-flex justify-content-center col-10">
                <div class="d-inline-block">
                  <div class="input-group">

                    <textarea name="contenido" class="form-control" placeholder="¿Qué hay de nuevo?" type="text"></textarea>
                    {{-- <input class="form-control" placeholder="Que hay de nuevo?" type="text"> --}}
                    <span class="input-group-addon">
                      <a href="#"><i class="fa fa-edit"></i></a>
                    </span>

                  </div>
                  <br><br>


                  <input class = "" type="file" name="foto"> <button class="btn btn-primary" type="submit" name="button">Publicar</button>
                  <br><br>

                </div>


              </div>
            </div>
          </div>




        </li>
      </ul>

    </form>


  </div>
