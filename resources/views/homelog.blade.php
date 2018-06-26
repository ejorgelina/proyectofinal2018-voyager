
<div class="contenido">
  <div class="container-fluid p-5">
    <div class="">
      @foreach ($publications as $publication)
        {{-- {{ $publication }} --}}
        <h3 class="text-xs-center text-white"> {{ $publication->titulo }} </h3>
        <p><b>Fecha: {{ $publication->created_at }}</b> {{ $publication->contenido }}</p>
      @endforeach
      {{ $publications->links() }}
    </div>
  </div>
</div>
