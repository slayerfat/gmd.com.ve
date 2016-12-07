<header id="header">
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-xs-4">
          <div class="top-number">
            <p><i class="fa fa-phone-square"></i>{{ config('variables')['phone'] }}</p>
          </div>
        </div>
        <div class="col-sm-6 col-xs-8">
          <div class="social">
            <ul class="social-share">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-inverse" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button"
                class="navbar-toggle"
                data-toggle="collapse"
                data-target=".navbar-collapse">
          <span class="sr-only">Cambiar navegación</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><img src="/images/logo.png" alt="gmd logo"></a>
      </div>

      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{ url('/') }}">Inicio</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Cursos Disponibles
              <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              @foreach($courses as $course)
                <li><a href="{{ url('cursos', $course->id) }}">{{ $course->title }}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a href="{{ url('sobre-nosotros') }}">Sobre Nosotros</a></li>
          <li><a href="{{ url('contacto') }}">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>