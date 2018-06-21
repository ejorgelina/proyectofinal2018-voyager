<div class='container-fluid'>
  <header class="row fixed-top bg-blue mb-3  p-1 align-items-center">



    <a href="{{ route('home')}}">  <img alt="logotipo" src={{ asset('images/logo.png') }} class="logotipo" style="margin-left:40px;"> </a>


    @if (Auth::check())

      <a href="{{ route('perfil') }}" class="btn btn-sm btn-outline-light mt-1 ml-3" style="font-size:0.7em;letter-spacing: 0.06em;">Mi perfil</a>

        <a class="btn btn-sm btn-outline-light mt-1 ml-3" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" style="font-size:0.7em;letter-spacing: 0.06em;">Logout</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
          @csrf
        </form>


      @else


        <div class="d-none d-md-inline d-lg-inline">
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



          <button type="button" class="d-md-none d-lg-none dropdown-toggle toggle-nav btn btn-sm btn-outline-light mt-1 ml-3" style="font-size:0.7em;letter-spacing: 0.06em;">
            Menu </button>
            <nav class="main-nav d-md-none d-lg-none" style="display: none;">
              <ul>
                <li><a href="{{ route('faq') }}">preguntas frecuentes</a></li>
                <li><a href="#">seguridad</a></li>
                <li><a href="#ancla-contacto">contacto</a></li>
                <li><a href="#">idioma</a></li>
              </ul>
            </nav>



            @if(url()->current()!=route('register'))

              <a href="{{ route('register') }}" class="btn btn-outline-light btn-sm mt-1 ml-3" style="font-size:0.7em;letter-spacing: 0.06em;">Registrarse</a>
            @endif
            @if(url()->current()!=route('login'))

              <a href="{{ route('login') }}" class="btn btn-sm btn-outline-light mt-1 ml-3" style="font-size:0.7em;letter-spacing: 0.06em;">Iniciar Sesión</a>
            @endif

          @endif

        </header>
      </div>
