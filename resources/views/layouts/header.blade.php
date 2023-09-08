<nav class="navbar sticky-top navbar-expand-lg" id="navbar">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" id="icon"></span>
        </button>
        <a class="navbar-brand-mobile d-lg-none d-xl-none" href="{{ route('home') }}">
            <div class="logo-img" id="logo-mobile"> </div>
        </a>
        <button class="navbar-cart d-lg-none d-xl-none" type="button">
        <span class="navbar-cart-icon" id="cart-icon"><a href="{{route('cart')}}"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="#232222d6" class="bi bi-basket3" viewBox="0 0 16 16">
            <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6h-9.21z"/>
          </svg></a></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active @php
                        if (isset($route) && $route === 'home') echo 'active-nav';
                        @endphp" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active @php
                    if (isset($route) && $route === 'products') echo 'active-nav';
                    @endphp"  href="{{ route('products') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active @php
                    if (isset($route) && $route === 'occasions') echo 'active-nav';
                    @endphp"  href="{{ route('occasions') }}">Occasions</a>
                </li>
            </ul>
            <a class="navbar-brand d-none d-lg-block" href="{{ route('home') }}">
                <div class="logo-img" id="logo"> </div>
            </a>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active @php
                    if (isset($route) && $route === 'wishlist') echo 'active-nav';
                    @endphp"  aria-current="page" href="{{route ('wishlist')}}">Wishlist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active @php
                    if (isset($route) && $route === 'login') echo 'active-nav';
                    @endphp" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active d-none d-lg-block @php
                    if (isset($route) && $route === 'cart') echo 'active-nav';
                    @endphp" aria-current="page" href="{{route('cart')}}">Cart (0)</a>
                </li>
            </ul>
        </div>
    </div>
</nav>