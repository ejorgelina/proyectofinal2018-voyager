

<div class="contenido">
  <div class="container-fluid" >
@include('prueba')
    @foreach ($publications as $publication)
      <div class="border p-5 mb-5 bg-white rounded" style="background-color:white; width:70%;margin:auto;">
        <div class="d-flex justify-content-between align-content-center ">

          <h6 class="text-capitalize font-weight-bold text-right">  <img src="{{ asset('images/airport.jpg') }}" width="50px" height="50px" style="border-radius:50%;"> {{ $publication->user->name }} </h6>

          <form id = "form-friend" action="/home/muro" method="post">
            <meta name="_token" content="{!! csrf_token() !!}"/>
            {{-- <input type="text" class = "friend" value = "{{$publication->user_id}}"> --}}
            {{-- <button class = "btn btn-primary btn-sm m-2 btn-follow" type="button"> Seguir </button> --}}
            <input type="button" class = " btn btn-primary btn-sm m-2 friend" name = "friend" value="Seguir" data-id = "{{$publication->user_id}}">

            <span>{{$publication->user_id}}</span>
          </form>

        </div>
        <h3 class=""> {{ $publication->titulo }} </h3>
        <p><b>Fecha: {{ $publication->created_at }}</b> {{ $publication->contenido }}</p>
        <div class="d-flex justify-content-end">
          <a href="#!" class="btn btn-sm btn-outline-dark m-2">Ocultar Publicación</a>
          <a href="#!" class="btn btn-sm btn-outline-dark m-2">Responder</a>
        </div>
      </div>
    @endforeach

    {{-- <script type="text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}


    <script type="text/javascript">

    $(document).ready(function() {
      $.ajaxSetup({
        headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
      });
    });


      $(".friend").click(function (e) {
        e.preventDefault();
        var elemento = this;
        //console.log( $(this).attr('data-id'));
          var nombre = $(this).attr('data-id');
        $.ajax({
          type: "post",
          url: "/home/muro",
          data: {
            'nombre': nombre
          }, success: function (msg) {
            //console.log(msg);
            //alert("Se ha realizado el POST con exito "+msg);
            $(elemento).attr('value', "Siguiendo");
          }
        }).fail(function(jqXHR, textStatus, errorThrown) { // What to do if we fail
          var errores = JSON.parse(jqXHR.responseText);
          //mostrmos en la consola los errores que envie  el ajax
          console.log(errores);
          console.log(JSON.stringify(jqXHR));
          console.log("AJAX error: " + textStatus + ' : ' + errorThrown);

        });
      });
    </script>


    {{ $publications->links() }}
  </div>
</div>
