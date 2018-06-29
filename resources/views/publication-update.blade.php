@extends('default')
<div class="contenido" >

  <div style="background-image: {{ asset('images/mapa-mundi.png') }}">
    @section('main')

      <form method="POST" action="/publication/{{$publication->id}}">
        @csrf

        @method('PUT')

        <div class="form-group m-5">
          <label for="description" class="col-form-label col-md-8">Editar mensaje:</label>
          <textarea

          id="contenido"
          type="text"
          class="form-control{{ $errors->has('contenido') ? ' is-invalid' : '' }} col-md-8"
          name="contenido"
          required>{{ old('contenido', $publication->contenido) }}</textarea>
          @if ($errors->has('contenido'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('contenido') }}</strong>
            </span>
          @endif

            {{-- <a href="#!" class="btn btn-sm btn-outline-dark m-2">Actualizar</a> --}}
            <button type="submit" class="btn btn-sm btn-outline-dark m-2">Actualizar</button>


        </div>


      </form>


    </div>

  @endsection
</div>




{{-- <div class="form-group">
<label for="image" class="col-form-label col-md-12">Image</label>

<div class="col-md-12">
<input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image">

@if ($errors->has('image'))
<span class="invalid-feedback">
<strong>{{ $errors->first('image') }}</strong>
</span>
@endif
</div>
</div> --}}
