@extends('default')

<div style="background-image: {{ asset('images/mapa-mundi.png') }}">
@section('main')

<div class="container">

    <form method="POST" action="/travelplan/{{$travelplan->id}}">
        @csrf

        @method('PUT')

        <div class="form-group">
            <label for="destino" class="col-form-label col-md-12">Destino</label>

            <div class="col-md-12">
                <textarea
                    id="destino"
                    type="text"
                    class="form-control{{ $errors->has('destino') ? ' is-invalid' : '' }}"
                    name="destino"
                    required>{{ old('destino', $travelplan->destino) }}</textarea>

                @if ($errors->has('destino'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('destino') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-success pull-right">Actualizar</button>
        </div>

        <div class="form-group">
            <label for="detalle" class="col-form-label col-md-12">Detalle</label>

            <div class="col-md-12">
                <textarea
                    id="detalle"
                    type="text"
                    class="form-control{{ $errors->has('detalle') ? ' is-invalid' : '' }}"
                    name="detalle"
                    required>{{ old('detalle', $travelplan->detalle) }}</textarea>

                @if ($errors->has('detalle'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('detalle') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-success pull-right">Actualizar</button>
        </div>

        <div class="form-group">
            <label for="fecha_de_salida" class="col-form-label col-md-12">Fecha de salida </label>

            <div class="col-md-12">
                <textarea
                    id="fecha_de_salida"
                    type="date"
                    class="form-control{{ $errors->has('fecha_de_salida') ? ' is-invalid' : '' }}"
                    name="fecha_de_salida"
                    required>{{ old('fecha_de_salida', $travelplan->fecha_de_salida) }}</textarea>

                @if ($errors->has('fecha_de_salida'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('fecha_de_salida') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-success pull-right">Actualizar</button>
        </div>

        <div class="form-group">
            <label for="fecha_de_regreso" class="col-form-label col-md-12">Fecha de regreso</label>

            <div class="col-md-12">
                <textarea
                    id="fecha_de_regreso"
                    type="date"
                    class="form-control{{ $errors->has('fecha_de_regreso') ? ' is-invalid' : '' }}"
                    name="fecha_de_regreso"
                    required>{{ old('fecha_de_regreso', $travelplan->fecha_de_regreso) }}</textarea>

                @if ($errors->has('fecha_de_regreso'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('fecha_de_regreso') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-success pull-right">Actualizar</button>
        </div>

        <div class="form-group">
            <label for="presupuesto" class="col-form-label col-md-12">Presupuesto</label>

            <div class="col-md-12">
                <textarea
                    id="presupuesto"
                    type="integer"
                    class="form-control{{ $errors->has('detalle') ? ' is-invalid' : '' }}"
                    name="presupuesto"
                    required>{{ old('presupuesto', $travelplan->presupuesto) }}</textarea>

                @if ($errors->has('presupuesto'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('presupuesto') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-success pull-right">Actualizar</button>
        </div>

    </form>

</div>

@endsection
