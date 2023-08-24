@extends('layouts.app')
@section('content')
    <div class="container text-center reveal fade-bottom">
        <div class="text-center pb-3 desc title">Flower Bouquets</div>
        <div class="mobile-filter d-flex justify-content-between d-xs-block d-md-none">
        <b>FILTER: </b>
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-filter-right" viewBox="0 0 16 16">
            <path d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z"/>
          </svg>
        </div>
        <div class="dropdown pb-2 pt-2 d-none d-md-block">
            <b>FILTER: </b>
            <button class="col-2 btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Season
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Summer</a></li>
              <li><a class="dropdown-item" href="#">Spring</a></li>
              <li><a class="dropdown-item" href="#">Winter</a></li>
              <li><a class="dropdown-item" href="#">Fall</a></li>
            </ul>
            <button class="col-2 btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Flower type
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Mixed</a></li>
                <li><a class="dropdown-item" href="#">Roses</a></li>
                <li><a class="dropdown-item" href="#">Peonies</a></li>
              </ul>
              <button class="col-2 btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Color
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Red</a></li>
                <li><a class="dropdown-item" href="#">Pink</a></li>
                <li><a class="dropdown-item" href="#">Beige</a></li>
                <li><a class="dropdown-item" href="#">White</a></li>
                <li><a class="dropdown-item" href="#">Yellow</a></li>
                <li><a class="dropdown-item" href="#">Mixed</a></li>
              </ul>
              <button class="col-2 btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Size
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">S</a></li>
                <li><a class="dropdown-item" href="#">M</a></li>
                <li><a class="dropdown-item" href="#">L</a></li>
              </ul>
          </div>
            <div class="row align row-gap-3 pt-4 pb-5">
                <div class="card flowers col-md-4">
                    <img src="{{ URL::asset('images/f2.jpg') }}" class="card-img-top placeholder" alt="...">
                    <div class="card-body placeholder-glow">
                        <p class="card-title flower-name placeholder">Mila</p>
                        <p class="card-text flower-desc placeholder">Bouquet with mixed flowers.</p>
                        <p class="card-text placeholder"><b>from 17.90$</b></p>
                    </div>
                </div>
                <div class="card flowers col-md-4">
                    <img src="{{ URL::asset('images/f4.jpg') }}" class="card-img-top placeholder" alt="...">
                    <div class="card-body placeholder-glow">
                        <p class="card-title flower-name placeholder">Daisy</p>
                        <p class="card-text flower-desc placeholder">Bouquet with mixed flowers.</p>
                        <p class="card-text placeholder"><b>from 15.90$</b></p>
                    </div>
                </div>
                <div class="card flowers col-md-4">
                    <img src="{{ URL::asset('images/f6.jpg') }}" class="card-img-top placeholder" alt="...">
                    <div class="card-body placeholder-glow">
                        <p class="card-title flower-name placeholder">Rosa</p>
                        <p class="card-text flower-desc placeholder">Bouquet with mixed flowers.</p>
                        <p class="card-text placeholder"><b>from 19.90$</b></p>
                    </div>
                </div>

                <div class="card flowers col-md-4">
                    <img src="{{ URL::asset('images/f3.jpg') }}" class="card-img-top placeholder" alt="...">
                    <div class="card-body placeholder-glow">
                        <p class="card-title flower-name placeholder">Bella</p>
                        <p class="card-text flower-desc placeholder">Bouquet with mixed flowers.</p>
                        <p class="card-text placeholder"><b>from 20.90$</b></p>
                    </div>
                </div>
                <div class="card flowers col-md-4">
                    <img src="{{ URL::asset('images/f1.jpg') }}" class="card-img-top placeholder" alt="...">
                    <div class="card-body placeholder-glow">
                        <p class="card-title flower-name placeholder">Amelia</p>
                        <p class="card-text flower-desc placeholder">Bouquet with mixed flowers.</p>
                        <p class="card-text placeholder"><b>from 30.90$</b></p>
                    </div>
                </div>
                <div class="card flowers col-md-4">
                    <img src="{{ URL::asset('images/f5.jpg') }}" class="card-img-top placeholder" alt="...">
                    <div class="card-body placeholder-glow">
                        <p class="card-title flower-name placeholder">Gertruda</p>
                        <p class="card-text flower-desc placeholder">Bouquet with mixed flowers.</p>
                        <p class="card-text placeholder"><b>from 28.90$</b></p>
                    </div>
                </div>

                <div class="card flowers col-md-4">
                    <img src="{{ URL::asset('images/roses.jpg') }}" class="card-img-top placeholder" alt="...">
                    <div class="card-body placeholder-glow">
                        <p class="card-title flower-name placeholder">Arya</p>
                        <p class="card-text flower-desc placeholder">Bouquet with mixed flowers.</p>
                        <p class="card-text placeholder"><b>from 25.90$</b></p>
                    </div>
                </div>
                <div class="card flowers col-md-4">
                    <img src="{{ URL::asset('images/f7.jpg') }}" class="card-img-top placeholder" alt="...">
                    <div class="card-body placeholder-glow">
                        <p class="card-title flower-name placeholder">Lizy</p>
                        <p class="card-text flower-desc placeholder">Bouquet with mixed flowers.</p>
                        <p class="card-text placeholder"><b>from 16.90$</b></p>
                    </div>
                </div>
                <div class="card flowers col-md-4">
                    <img src="{{ URL::asset('images/f8.jpg') }}" class="card-img-top placeholder" alt="...">
                    <div class="card-body placeholder-glow">
                        <p class="card-title flower-name placeholder">Flora</p>
                        <p class="card-text flower-desc placeholder">Bouquet with mixed flowers.</p>
                        <p class="card-text placeholder"><b>from 17.90$</b></p>
                    </div>
                </div>
            </div>
    </div>
@endsection
