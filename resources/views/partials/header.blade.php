
<header class="fixed-top row bg-blue justify-content-md-between mb-3 p-1 pl-2 d-flex align-items-center">
    <div class="col-12 col-sm-6 col-md-2 col-lg-3 ">
        <img alt="logotipo" src={{ asset('images/logo.png') }} class="d-block logotipo" style="margin-left:90px;">
        </div>
    <div>
        <a href="faq.php" class="p-2" style="letter-spacing: 0.06em;"> PREGUNTAS FRECUENTES </a>
        <a href="#" class="p-2" style="letter-spacing: 0.06em;"> SEGURIDAD </a>
        <a href="#ancla-contacto" class="p-2" style="letter-spacing: 0.06em;"> CONTACTO </a>
        <div class="select-dropdown d-none d-md-inline col-md-5 col-lg-6">
            <select class="select-dropdown_language">
           <li>  <option value="en_US">English</option> </li>
            <li> <option selected="selected" value="es_ES">Español</option></li>
            <li> <option value="fr_FR">Français</option></li>
            <li> <option value="pt_BR">Portugués</option></li>
            <li> <option value="de_DE">Deutsch</option></select></li>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
        <div>
            <button class="toggle-nav d-md-none d-lg-none mt-2">
                              <span class="ion-navicon-round"></span>
                            </button>
            <nav class="main-nav d-md-none d-lg-none" style="display: none;">
                <ul >
                    <li><a href="{{--ruta--}}">preguntas frecuentes</a></li>
                    <li><a href="#">seguridad</a></li>
                    <li><a href="#ancla-contacto">contacto</a></li>
                    <li><a href="#">idioma</a></li>
                  </ul>
            </nav>
            @if (Auth::check())

              <a href="{{ route('perfil') }}" class="btn btn-sm btn-outline-light mt-1 ml-3" style="font-size:0.7em;letter-spacing: 0.06em;">Mi perfil</a>

            @else
               <a href="{{ route('register') }}" class="btn btn-outline-light btn-sm mt-1" style="font-size:0.7em;letter-spacing: 0.06em;">Registrarse</a>
              <a href="{{ route('login') }}" class="btn btn-sm btn-outline-light mt-1 ml-3" style="font-size:0.7em;letter-spacing: 0.06em;">Iniciar Sesión</a>

            @endif
        </div>
    </div>

</header>
