@extends('layout.master')

@section('content')
  <section id="feature" class="transparent-bg">
    <div class="container">
      <div class="center wow fadeInDown">
        <h2>{{ $course->title }}</h2>
        <p class="lead">{{ $course->description }}</p>
      </div>

      <div class="row">
        <div class="features">

        </div><!--/.services-->
      </div><!--/.row-->


      <div class="get-started center wow fadeInDown">
        <h2>Ready to get started</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam,quis
          nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
        <div class="request">
          <h4><a href="#">Request a free Quote</a></h4>
        </div>
      </div><!--/.get-started-->

      <div class="clients-area center wow fadeInDown">
        <h2>What our client says</h2>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>

      <div class="row">
        <div class="col-md-4 wow fadeInDown">
          <div class="clients-comments text-center">
            <img src="/images/client1.png" class="img-circle" alt="">
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt</h3>
            <h4><span>-John Doe /</span> Director of corlate.com</h4>
          </div>
        </div>
        <div class="col-md-4 wow fadeInDown">
          <div class="clients-comments text-center">
            <img src="/images/client2.png" class="img-circle" alt="">
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt</h3>
            <h4><span>-John Doe /</span> Director of corlate.com</h4>
          </div>
        </div>
        <div class="col-md-4 wow fadeInDown">
          <div class="clients-comments text-center">
            <img src="/images/client3.png" class="img-circle" alt="">
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt</h3>
            <h4><span>-John Doe /</span> Director of corlate.com</h4>
          </div>
        </div>
      </div>

    </div><!--/.container-->
  </section><!--/#feature-->
@endsection
