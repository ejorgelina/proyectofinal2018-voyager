
<div class="contenido">
  <div class="container-fluid" >

    @foreach ($publications as $publication)
      <div class="border p-5 mb-5 bg-white rounded" style="background-color:white; width:70%;margin:auto;">
        <div class="align-content-center">

          <h6 class="text-capitalize font-weight-bold text-right">  <img src="{{ asset('images/airport.jpg') }}" width="50px" height="50px" style="border-radius:50%;"> {{ $publication->user->name }} </h6>
        </div>
        <h3 class=""> {{ $publication->titulo }} </h3>
        <p><b>Fecha: {{ $publication->created_at }}</b> {{ $publication->contenido }}</p>
        <div class="d-flex justify-content-end">
          <a href="#!" class="btn btn-sm btn-outline-dark m-2">Ocultar Publicación</a>
          <a href="#!" class="btn btn-sm btn-outline-dark m-2">Responder</a>
        </div>
</div>
      @endforeach

      {{ $publications->links() }}

    </div>
  </div>
