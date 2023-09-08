@extends('layouts.app')
@section('content')
    <div class="container text-center pt-5 pb-5 reveal fade-bottom">
        <div class="text-center pb-3 desc title">About us</div>
        <div class="row">
            <div class="col-6">
                <video id="background-video" class="d-none d-lg-block" autoplay loop muted>
                    <source src="{{ asset('video/1.mp4') }}" type="video/mp4">
                </video>
                <span class="video-text d-none d-lg-block">Best Flower Shop</span>
            </div>
            <div class="col-lg-6 col-md-12">
                <h4 class="text-center d-none d-xl-block"> Why Choose Us</h4>
                <h6 class="text-center d-none d-lg-block d-xl-none"> Why Choose Us</h6>
                <div class="text-center about-us"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim a psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                     Ut enim ad minim veniam. </div>
            </div>
        </div>
    </div>
    <div class="reveal fade-bottom">
    <div class="text-center pb-3 desc title">Our history</div>
    <div class="text-center pt-5 history ">
        <div class="container pb-5 pt-1 col-12 about-us">
            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                     Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
        </div>
    </div>
    </div>
    <div class="container pt-5 reveal fade-bottom pb-5">
        <div class="text-center pb-3 desc title">Meet our Team</div>
        <div class="row align row-gap-3 team">
            <div class="card col-md-4">
                <img src="{{ URL::asset('images/human-1.jpg') }}" class="card-img-top placeholder" alt="...">
                <div class="card-body placeholder-glow">
                    <h5 class="card-title placeholder text-center">JANE BURKIN</h5>
                    <h6 class="text-center">Owner</h6>
                </div>
            </div>

            <div class="card col-md-4">
                <img src="{{ URL::asset('images/human-2.jpg') }}" class="card-img-top placeholder" alt="...">
                <div class="card-body placeholder-glow">
                    <h5 class="card-title placeholder text-center">LINDA GREEN</h5>
                    <h6 class="text-center">Marketing</h6>
                </div>
            </div>

            <div class="card col-md-4">
                <img src="{{ URL::asset('images/human-3.jpg') }}" class="card-img-top placeholder" alt="...">
                <div class="card-body placeholder-glow">
                    <h5 class="card-title placeholder text-center">RUIZ RODRIGEZ</h5>
                    <h6 class="text-center">Main Florist</h6>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.nl')
@endsection
