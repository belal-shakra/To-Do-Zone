@extends('public.layout')

@section('tab-title', "All Lists")

@section('content')


  <div class="container mt-5">
    <section>
      <h2>My Lists</h2>
  
  
      <div class="row mt-5 px-3">
        <h5>12-Jan-2024 Sun</h5>
  
        <div class="col-sm-12 col-lg-3 my-3 mb-sm-0">
          <div class="card shadow" style="height: 143px">
            <div class="card-body">
              <h5 class="card-title">Shopping List</h5>
              <p class="card-text text-truncate">Lorem ipsum dolor sit amet.</p>
              <a href="#" class="btn btn-primary position-absolute" style="bottom: 16px">Show</a>
            </div>
          </div>
        </div>
  
        <div class="col-sm-12 col-lg-3 my-3 mb-sm-0">
          <div class="card shadow" style="height: 143px">
            <div class="card-body position-relative">
              <h5 class="card-title">Shopping List</h5>
              <p class="card-text text-truncate"></p>
              <a href="#" class="btn btn-primary position-absolute" style="bottom: 16px">Show</a>
            </div>
          </div>
        </div>
  
  
      </div>
    </section>
  </div>




@endsection