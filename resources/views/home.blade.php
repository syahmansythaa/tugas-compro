@extends('layouts.master')
@section('content')

<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      @foreach ($sliders as $item)
      <div class="carousel-item active">
        <img src="{{$item->file}}" class="d-block h-slider w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      @endforeach
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container mt-5 mb-5">
      <div class="row ">
        <div class="h1 text-center">Layanan Kami</div>
        @foreach ($services as $item)
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="border-card p-4 border-radius" >
              <b>web design</b>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero quibusdam, accusantium perspiciatis.</p>
            </div>
          </div>
          @endforeach
          <div class="container mt-5 mb-5">
            <div class="row ">
              <div class="h1 text-center">Artikel</div>
              @foreach ($blogs as $item)
              <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;">
                  <img src="2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                   
                    <a href="#" class="btn btn-primary">Read More</a>
                  </div>
                  
                </div>
              </div>
   
                @endforeach

                
      </div>         
</div>
</div>
@endsection