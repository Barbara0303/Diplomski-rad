<nav class="navbar sticky-top navbar-expand-lg" id="navbar">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand-mobile d-lg-none d-xl-none" href="#">
            <div class="logo-img" id="logo-mobile"> </div>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('products') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Occasions</a>
                </li>
            </ul>
            <a class="navbar-brand d-none d-lg-block" href="#">
                <div class="logo-img" id="logo"> </div>
            </a>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Wishlist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Cart (0)</a>
                </li>
            </ul>
        </div>
    </div>
</nav>