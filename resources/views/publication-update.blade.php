@extends('default')

<div style="background-image: {{ asset('images/mapa-mundi.png') }}">
@section('main')

<div class="container">

    <form method="POST" action="/publication/{{$publication->id}}">
        @csrf

        @method('PUT')

        <div class="form-group">
            <label for="description" class="col-form-label col-md-12">Description</label>

            <div class="col-md-12">
                <textarea
                    id="contenido"
                    type="text"
                    class="form-control{{ $errors->has('contenido') ? ' is-invalid' : '' }}"
                    name="contenido"
                    required>{{ old('contenido', $publication->contenido) }}</textarea>

                @if ($errors->has('contenido'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('contenido') }}</strong>
                    </span>
                @endif
            </div>
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

        <div class="col-md-12">
            <button type="submit" class="btn btn-success pull-right">Actualizar</button>
        </div>

    </form>

</div>

@endsection
</div>
