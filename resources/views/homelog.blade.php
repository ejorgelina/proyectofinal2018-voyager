

<div class="contenido">
  <div class="container-fluid" >

    @foreach ($publications as $publication)
      <div class="border p-5 mb-5 bg-white rounded" style="background-color:white; width:70%;margin:auto;">
        <div class="d-flex justify-content-between align-content-center ">

          <h6 class="text-capitalize font-weight-bold text-right">  <img src="{{ asset('images/airport.jpg') }}" width="50px" height="50px" style="border-radius:50%;"> {{ $publication->user->name }} </h6>

          <form id = "form-friend" action="/home/muro" method="post">
            {{ csrf_field() }}

            <button class = "btn btn-primary btn-sm m-2 btn-follow" type="button" value = "{{$publication->user_id}}"> Seguir </button>
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

    <script type="text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script type="text/javascript">
    $(document).ready(function () {

      $('.btn-follow').each( function(ev){
        $(this).on('click', function(ev){
          console.log('click a mi');
          var parametros = {
            propiedad1: $('.btn-follow').attr('value')
          };
          console.log($('.btn-follow').attr('value'));
          console.log(parametros.propiedad1);
          $.ajax({
            data:  parametros,
            url:   '/home/muro/' + parametros.propiedad1,
            type:  'post',
            // beforeSend: function () {
            //         $("#resultado").html("Procesando, espere por favor...");
            // },
          });

          $('.btn-follow').innerText= "Siguiendo";

        });
      });
    });
    // var action = $('#form-friend').attr('action');
    // var met = $('#form-friend').attr('method');
    //
    // $('#form-friend').on('submit', function(ev){
    //   ev.preventDefault();
    //   var info = $('#form-friend').serialize();
    //
    //   $.post(action,info, function(resp,estado,jqXHR){
    //     console.log(resp);
    //     console.log(estado);
    //     console.log(jqXHR);
    //   });
    // });


    // $('#boton-coso').on('click', function(ev){
    //   alert("lalalal");
    // });


  </script>
  

  {{ $publications->links() }}
</div>
</div>
