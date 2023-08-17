@extends('layouts.app')
@section('content')
    <div class="container text-center pt-5 pb-5">
        <div class="text-center pb-3 desc title">Our products</div>
        <div class="row">
            <div class="col-lg-4 col-md-6 reveal fade-left">
                <div class="bouquet"><span class="outer-span">Flower bouquets<span class="inner-span"> 15 ITEMS</span></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 reveal fade-bottom">
                <div class="col-12 product flowerbox"><span class="outer-span">Flower box<span class="inner-span"> 8
                            ITEMS</span></span></div>
                <div class="col-12 product flowerpots"><span class="outer-span">Flower pot<span class="inner-span"> 10
                            ITEMS</span></span></div>
            </div>
            <div class="col-lg-4 col-md-12 reveal fade-right">
                <div class="col-12 product seeds"><span class="outer-span">Flower seed<span class="inner-span"> 20
                            ITEMS</span></span></div>
                <div class="col-12 product bestsellers"><span class="outer-span">Bestsellers <span class="inner-span"> 8
                            ITEMS</span></span></div>
            </div>
        </div>
    </div>
@endsection
