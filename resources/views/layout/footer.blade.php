{{--@include('layout.footer-links')--}}

<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        &copy; {{ Carbon\Carbon::now()->year }}
        <a target="_blank"
           href="http://slayerfat.com.ve"
           title="slayerfat">slayerfat.com.ve</a>.
        Todos los derechos reservados.
      </div>
      <div class="col-sm-6">
        <ul class="pull-right">
          <li><a href="{{ url('sobre-nosotros') }}">Sobre Nosotros</a></li>
          <li><a href="{{ url('contacto') }}">Contacto</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>