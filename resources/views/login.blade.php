@extends('layouts.app')
@section('content')
    <div class="container pb-5 pt-5">
        <div class="text-center pb-3 title">login</div>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary col-12 col-md-2 col-xl-1">LOG IN</button>
        </form>
        <div class="pt-3">Don't have an account? <a href="{{ route('register') }}"><strong>Sing up</strong></a></div>
    </div>
@endsection
