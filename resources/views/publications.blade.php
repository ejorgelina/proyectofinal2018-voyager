@extends('default')

@section('main')
  <div class="contenido">
  <h1>Bienvenido {{ $user->name }}</h1>

<h4>Tus publicaciones</h4>
<ul>
  @foreach ($user->publications as $publication)
    <li>{{$publication->contenido}}</li>
  @endforeach
</ul>
</div>

@endsection
