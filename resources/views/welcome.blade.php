@extends('layouts.app')
@section('content')
<div class="preloader-wrapper">
    <div class="spinner-border text-danger" style="width: 3rem;height: 3rem;" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
    <div id="carouselWelcome" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselWelcome" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselWelcome" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselWelcome" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ URL::asset('images/5.jpg') }}" class="d-block w-100 carousel-img" alt="...">
                <div class="carousel-caption d-none d-md-block reveal fade-bottom">
                    <h5>After women, flowers are the most lovely thing God has given the world.</h5>
                    <p>- CHRISTIAN DIOR -</p>
                  </div>
            </div>
            <div class="carousel-item">
                <img src="{{ URL::asset('images/2.jpg') }}" class="d-block w-100 carousel-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>After women, flowers are the most lovely thing God has given the world.</h5>
                    <p>- CHRISTIAN DIOR -</p>
                  </div>
            </div>
            <div class="carousel-item">
                <img src="{{ URL::asset('images/8.jpg') }}" class="d-block w-100 carousel-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>After women, flowers are the most lovely thing God has given the world.</h5>
                    <p>- CHRISTIAN DIOR -</p>
                  </div>
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

    <div class="container reveal fade-bottom">
        <div class="text-center pb-3 desc title">Shop Best Sellers</div>
        <div class="row align row-gap-3">
            <div class="card col-md-4">
                <img src="{{ URL::asset('images/flowerbox.jpg') }}" class="card-img-top placeholder" alt="...">
                <div class="card-body placeholder-glow">
                    <h5 class="card-title placeholder">Flowebox</h5>
                    <p class="card-text placeholder">Some quick example text to build on the card title and make up the bulk
                        of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary placeholder col-12 col-lg-6">Check it out</a>
                </div>
            </div>

            <div class="card col-md-4">
                <img src="{{ URL::asset('images/roses.jpg') }}" class="card-img-top placeholder" alt="...">
                <div class="card-body placeholder-glow">
                    <h5 class="card-title placeholder">Bouquet of roses</h5>
                    <p class="card-text placeholder">Some quick example text to build on the card title and make up the bulk
                        of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary placeholder col-12 col-lg-6">Check it out</a>
                </div>
            </div>

            <div class="card col-md-4">
                <img src="{{ URL::asset('images/peony.jpg') }}" class="card-img-top placeholder" alt="...">
                <div class="card-body placeholder-glow">
                    <h5 class="card-title placeholder">Peony seeds</h5>
                    <p class="card-text placeholder">Some quick example text to build on the card title and make up the bulk
                        of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary placeholder col-12 col-lg-6">Check it out</a>
                </div>
            </div>
        </div>
    </div>
    <div class="reviews-region reveal fade-bottom pt-5">
        <div class="text-center desc title">Customer's Review</div>
            <div class="row align reviews pt-3 pb-3">
                <div class="col-lg-5 col-sm-12 text-center testimonial">
                    <div class="stars p-2 pt-5">
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                    </div>
                    <div class="review p-3 pb-0">The ever best experience I have with flowers shop online thank you so much
                        waheed for your support and delivery. I highly recommend to everyone to shop flowers for your love
                        ones and friends from flowershop online. </div>
                    <div class="client-name p-3 pb-5">John Doe </div>
                </div>
                <div class="vr col-lg-2 d-none d-lg-block"></div>
                <div class="col-lg-5 col-sm-12 text-center testimonial">
                    <div class="stars mobile p-2 pt-5">
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                        <div class="star"></div>
                    </div>
                    <div class="review p-3 pb-0">Excellent flowers in a beautiful wooden box, masses of fresh blooms
                        delivered early and made a birthday lady very happy, I have used this company before and find them
                        first class, Thank you very much.
                    </div>
                    <div class="client-name p-3 pb-5">Jane Doe </div>
                </div>
            </div>
        </div>
    </div>

    <div class="roses-region pb-5 reveal fade-bottom">
        <div class="container">
            <div class="text-center pb-3 desc title">Widest range of roses</div>
            <div class="row align">
                <div class="col-lg-6 col-sm-12 text-center">
                    <div class="p-2">
                        <div class="img-1"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 text-center desc-roses">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Damask</li>
                        <li class="list-group-item">Floribunda</li>
                        <li class="list-group-item">Rosa</li>
                        <li class="list-group-item">Noisette</li>
                        <li class="list-group-item">Ausmas</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include ('layouts.cookie')
    @include('layouts.nl')
@endsection
