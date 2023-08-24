<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        View::share('route', 'home');
        return view('home');
    }

    public function products()
    {
        View::share('route', 'products');
        return view('products');
    }

    public function occasions()
    {
        View::share('route', 'occasions');
        return view('occasions');
    }

    public function registered()
    {
        View::share('route', 'registered');
        return view('register');
    }

    public function aboutUs()
    {
        return view('about');
    }

    public function login()
    {
        View::share('route', 'login');
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function wishlist()
    {
        return view('wishlist');
    }


    public function flowers()
    {
        View::share('route', 'products');
        return view('flowers');
    }

    public function cart()
    {
        View::share('route', 'cart');
        return view('cart');
    }

}
