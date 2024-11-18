@extends('public.layout')

@section('tab-title', 'ToDoZone')

@section('content')

  <section id="hero" class="vh-100 hero section dark-background">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
          <h1>Stay organized, boost productivity</h1>
          <p>Your ultimate task management companion!</p>
          <div class="d-flex">
            <a href="{{ route('list.index') }}" class="btn-get-started bg-danger">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="animated" alt="Hero Image" style="width: 110%;">
        </div>
      </div>
    </div>

  </section>

@endsection