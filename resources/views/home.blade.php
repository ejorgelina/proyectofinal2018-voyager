
@extends('default')

    <div class="contenido">

    </div>
    <div class="jumbotron">
        <div class="jumbotron1">
            <h1 class="display-3">¡Unite!</h1>
            <p class="lead">Contactá con viajeros en todo el mundo y planificá tu viaje con ellos.</p>
            <p>Prepará tu agenda de viaje o colaborá en las agendas de otros viajeros.</p>
            <p class="lead">
                <a href="#!" class="btn btn-outline-dark mt-1">
              <span class="ion-social-facebook mr-2"></span>
                Registrate con Facebook</a>
                <a href="#!" class="btn btn-outline-dark mt-1">
              <span class="ion-ios-email mr-2"></span>
                Registrate con tu email</a>

            </p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="box text-center">
            <div class="overlay d-none d-lg-inline">
                <div class="text">Armá tu agenda con los lugares que queres visitar, tus fechas disponibles y tu presupuesto. Buscá opciones de vuelos, traslados y hospedajes.</div>
            </div>
            <span class="ion-clipboard"></span>
            <h3 class="text-xs-center text-white">Armá tu itinerario</h3>
        </div>
        <div class="box text-center">
            <div class="overlay d-none d-lg-inline">
                <div class="text">Compartí tu plan con el resto de la comunidad para conocer a otras personas interesadas en tu viaje.</div>
            </div>
            <span class="ion-paper-airplane"></span>
            <h3 class="text-xs-center text-white">Compartí tu viaje</h3>
        </div>
        <div class="box text-center">
            <div class="overlay d-none d-lg-inline">
                <div class="text">Mirá los planes de viaje de otros viajeros y descubrí nuevas ideas y actividades.</div>
            </div>
            <span class="ion-earth"></span>
            <h3 class="text-xs-center text-white">Contactá con viajeros de todo el mundo</h3>
        </div>
        <div class="box text-center">
            <div class="overlay d-none d-lg-inline">
                <div class="text">Armá una agenda compartida para planificar tu viaje con otras personas.</div>
            </div>
            <span class="ion-android-happy mr-1"></span><span class="ion-android-happy mr-1"></span><span class="ion-android-happy mr-1"></span>
            <h3 class="text-xs-center text-white">Planificá en equipo</h3>

        </div>
    </div>
    </div>



{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
