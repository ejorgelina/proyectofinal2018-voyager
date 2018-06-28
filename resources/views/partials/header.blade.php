<head>
  <style>
  .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {background-color: #ddd;}

  .dropdown:hover .dropdown-content {display: block;}

  .dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>

<header class="row fixed-top bg-blue mb-3  p-1 align-items-center justify-content-around" id="header">

  <div class="justify-content-start">
    @if (Auth::check())
      <a href="{{ url('home/muro')}}">
      @else
        <a href="{{ route('home')}}">
        @endif
        <img alt="logotipo" src={{ asset('images/logo.png') }} class="logotipo" style="margin-left:40px;"> </a>
      </div>

      @if (Auth::check())
        <div class="justify-content-end">



          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
            @csrf
          </form>


          <div class="dropdown">
            <button class="btn btn-sm btn-outline-light mt-1 ml-3" style="font-size:0.7em;letter-spacing: 0.06em;" id="button">
              Menú </button>
              <div class="dropdown-content">
                <a href="{{ route('perfil') }}">Mi perfil</a>
                <a href="{{ url('publications')}}">Mis publicaciones</a>
                <a href="{{ url('travelplans')}}">Mis Planes de Viaje </a>
                <a href="{{ route('configuracion') }}">Configuración de cuenta</a>

              </div>
            </div>

            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="btn btn-sm btn-outline-light mt-1 ml-3" style="font-size:0.7em;letter-spacing: 0.06em;" id="button">Logout</a>

            <button class="btn btn-sm btn-outline-light mt-1 ml-3" style="font-size:0.7em;letter-spacing: 0.06em;" onclick="return cambiarColor()" id="button">
              MAGIA! </button>
          </div>


        @else


          <div class="d-none d-lg-inline d-xl-inline">
            @if(url()->current() != route('faq'))
              <a href="{{ url('faq') }}" class="p-2" style="letter-spacing: 0.06em;"> PREGUNTAS FRECUENTES </a>
            @endif
            <a href="#" class="p-2" style="letter-spacing: 0.06em;"> SEGURIDAD </a>
            <a href="#ancla-contacto" class="p-2" style="letter-spacing: 0.06em;"> CONTACTO </a>
          </div>

          <div class="select-dropdown d-none d-md-inline d-lg-inline">
            <select class="select-dropdown_language">
              <li>  <option value="en_US">English</option> </li>
              <li> <option selected="selected" value="es_ES">Español</option></li>
              <li> <option value="fr_FR">Français</option></li>
              <li> <option value="pt_BR">Portugués</option></li>
              <li> <option value="de_DE">Deutsch</option></select></li>
            </div>


            <div class="justify-content-end">
              <button type="button" class="d-lg-none d-xl-none dropdown-toggle toggle-nav btn btn-sm btn-outline-light mt-1 ml-3" style="font-size:0.7em;letter-spacing: 0.06em;">
                Menu </button>
                <nav class="main-nav d-md-none d-lg-none d-xl-none" style="display: none;">
                  <ul>
                    <li><a href="{{ route('faq') }}">preguntas frecuentes</a></li>
                    <li><a href="#">seguridad</a></li>
                    <li><a href="#ancla-contacto">contacto</a></li>
                    <li><a href="#">idioma</a></li>
                  </ul>
                </nav>
              </div>


              <div class="justify-content-end">
                @if(url()->current()!=route('register'))

                  <a href="{{ route('register') }}" class="btn btn-outline-light btn-sm mt-1 ml-3" style="font-size:0.7em;letter-spacing: 0.06em;">Registrarse</a>
                @endif
                @if(url()->current()!=route('login'))

                  <a href="{{ route('login') }}" class="btn btn-sm btn-outline-light mt-1 ml-3" style="font-size:0.7em;letter-spacing: 0.06em;">Iniciar Sesión</a>
                @endif

              @endif
            </div>
            <script src="/js/magia.js"></script>
          </header>
