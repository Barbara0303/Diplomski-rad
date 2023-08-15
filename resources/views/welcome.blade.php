@extends('layouts.app')
@section('content')
  <div id="carouselWelcome" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselWelcome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselWelcome" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselWelcome" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{URL::asset('images/2.jpg')}}" class="d-block w-100 carousel-img" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{URL::asset('images/7.jpg')}}" class="d-block w-100 carousel-img" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{URL::asset('images/8.jpg')}}" class="d-block w-100 carousel-img" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselWelcome" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselWelcome" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>
@endsection