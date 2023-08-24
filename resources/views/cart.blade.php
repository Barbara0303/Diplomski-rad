@extends('layouts.app')
@section('content')
    <div class="container text-center pt-5 pb-5">
        <div class="pb-3 desc title">My shopping cart</div>
        <table class="table caption-top">
            <caption>List of products</caption>
            <thead class="table-light">
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price $</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Bouquet Flora</td>
                    <td>2</td>
                    <td>35.80</td>
                    <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                </tr>
                <tr>
                    <td>Bouquet Lizzy</td>
                    <td>1</td>
                    <td>16.90</td>
                    <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                </tr>
                <tr>
                    <td>Rose flowebox</td>
                    <td>1</td>
                    <td>40.00</td>
                    <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                </tr>
            </tbody>
        </table>
        <div class="total-price d-flex justify-content-end mt-5">Total Price: <span> 92.70$<span></div>
        <div class="row row-gap-3 d-flex justify-content-between mt-5 whereToBox">               <button type="submit"
            class="btn btn-secondary col-12 col-md-2 ">GO BACK</button>
             <button type="submit"
                class="btn btn-primary col-12 col-md-2">NEXT</button>
</div>

    </div>
@endsection
