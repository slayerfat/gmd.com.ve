@extends('layout.master')

@section('content')
  <section id="contact-info">
    <div class="center">
      <h2>Como Ud. nos puede contactar?</h2>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
    </div>
    <div class="gmap-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 text-center">
            <div class="gmap">
              <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125549.08972849163!2d-66.9604057965877!3d10.468384101297735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a58adcd824807%3A0x93dd2eae0a998483!2sCaracas%2C+Capital+District!5e0!3m2!1sen!2sve!4v1481121825117"></iframe>
            </div>
          </div>

          <div class="col-sm-7 map-content">
            <ul class="row">
              <li class="col-sm-6">
                <address>
                  <h5>Oficina Principal</h5>
                  <p>
                    Av. tal con cual <br>
                    Edf. tal con otro
                  </p>
                  <p>
                    Teléfono: {{ config('variables')['phone'] }} <br>
                    Correo Electrónico: info@domain.com
                  </p>
                </address>

                {{--<address>--}}
                {{--<h5>Oficina Principal</h5>--}}
                {{--<p>--}}
                {{--Av. tal con cual <br>--}}
                {{--Edf. tal con otro--}}
                {{--</p>--}}
                {{--<p>--}}
                {{--Teléfono: {{ config('variables')['phone'] }} <br>--}}
                {{--Correo Electrónico: info@domain.com--}}
                {{--</p>--}}
                {{--</address>--}}
              </li>


              {{--<li class="col-sm-6">--}}
              {{--<address>--}}
              {{--<h5>Oficina Principal</h5>--}}
              {{--<p>--}}
              {{--Av. tal con cual <br>--}}
              {{--Edf. tal con otro--}}
              {{--</p>--}}
              {{--<p>--}}
              {{--Teléfono: {{ config('variables')['phone'] }} <br>--}}
              {{--Correo Electrónico: info@domain.com--}}
              {{--</p>--}}
              {{--</address>--}}

              {{--<address>--}}
              {{--<h5>Oficina Principal</h5>--}}
              {{--<p>--}}
              {{--Av. tal con cual <br>--}}
              {{--Edf. tal con otro--}}
              {{--</p>--}}
              {{--<p>--}}
              {{--Teléfono: {{ config('variables')['phone'] }} <br>--}}
              {{--Correo Electrónico: info@domain.com--}}
              {{--</p>--}}
              {{--</address>--}}
              {{--</li>--}}
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Deje su Mensaje</h2>
        <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <form id="main-contact-form"
              class="contact-form"
              name="contact-form"
              method="post"
              action="{{ url('contacto') }}">
          <div class="col-sm-5 col-sm-offset-1">
            <div class="form-group">
              <label for="name">Nombre *</label>
              <input type="text"
                     name="name"
                     class="form-control"
                     required="required"
                     title="Nombre">
            </div>
            <div class="form-group">
              <label for="email">Correo Electrónico *</label>
              <input type="email"
                     name="email"
                     class="form-control"
                     required="required"
                     title="email">
            </div>
            <div class="form-group">
              <label for="phone">Teléfono</label>
              <input type="number" class="form-control" title="phone" name="phone">
            </div>
            <div class="form-group">
              <label for="business">Nombre de Compañía</label>
              <input type="text" class="form-control" name="business" title="business">
            </div>
          </div>
          <div class="col-sm-5">
            <div class="form-group">
              <label for="subject">Asunto *</label>
              <input type="text"
                     name="subject"
                     class="form-control"
                     required="required"
                     title="subject">
            </div>
            <div class="form-group">
              <label>Mensaje *</label>
              <textarea name="message"
                        id="message"
                        required="required"
                        class="form-control"
                        rows="8"
                        title="message"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary btn-lg">
                Enviar Mensaje
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection
