@extends('layout.master')

@section('content')
  <section id="error" class="container text-center">
    <h1>404, Pagina no encontrada</h1>
    <p>La pagina que Ud. solicito no fue encontrada u otro error ha ocurrido.</p>
    <a class="btn btn-primary" href="{{ url('/') }}">REGRESAR</a>
  </section>
@endsection
