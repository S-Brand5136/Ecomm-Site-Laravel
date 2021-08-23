<nav class="navbar navbar-expand-lg navbar-light bg-light pr-md-5 pl-md-5">
    <a class="navbar-brand" href="/">Ecom-Site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/products">Products</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Mens Clothing</a>
                    <a class="dropdown-item" href="#">Womens Clothing</a>
                </div>
            </li>
            @auth

                <span class="font-bold">Welcome Back! {{ auth()->user()->name() }}</span>

                <li class="nav-item d-lg-none d-xl-none">
                    <form action="/logout" method="POST">
                        @csrf

                        <button type="submit" class="nav-link">Logout</button>
                    </form>
                </li>

            @else
                <li class="nav-item d-lg-none d-xl-none">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                <li class="nav-item d-lg-none d-xl-none">
                    <a href="/register" class="nav-link">Register</a>
                </li>
            @endauth
            <li class="nav-item d-lg-none d-xl-none">
                <a class="nav-link" href="/cart"><i class="fas text-dark fa-shopping-cart mr-2"></i>Cart</a>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav d-none d-lg-flex d-xl-flex d-md-none">
        <li class="nav-item">
            <a href="/login" class="nav-link">Login</a>
        </li>
        <li class="nav-item">
            <a href="/register" class="nav-link">Register</a>
        </li>
        <li class="nav-item">
            <a href="/cart" class="nav-link"><i class="fas fa-shopping-cart text-dark icon mr-2"></i>Cart</a>
        </li>
    </ul>
</nav>
