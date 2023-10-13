<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{ asset('pengguna/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('pengguna/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('pengguna/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('pengguna/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('pengguna/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('pengguna/css/owl.theme.default.min.css') }}">


    <link rel="stylesheet" href="{{ asset('pengguna/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('pengguna/css/style.css') }}">

</head>

<body>

    <div class="site-wrap">
        <header class="site-navbar" role="banner">
            <div class="site-navbar-top">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                            <form action="" class="site-block-top-search">
                                <span class="icon icon-search2"></span>
                                <input type="text" class="form-control border-0" placeholder="Search">
                            </form>
                        </div>

                        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                            <div class="site-logo">
                                <a href="{{ route('dashboard') }}" class="js-logo-clone">TOKO TENUN</a>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                            <div class="site-top-icons">
                                <ul>

                                    <li>
                                        <a href="{{ route('cart.index') }}" class="site-cart">
                                            <span class="icon icon-shopping_cart"></span>
                                            <span class="count">{{ \Cart::getTotalQuantity() }}</span>
                                            Keranjang
                                        </a>
                                    </li>

                                    @guest
                                    <li class="ml-5">
                                        <a href="{{ route('login') }}"><span class="icon icon-person"></span>Login</a>
                                    </li>
                                    @else
                                    <li class="ml-5"><a href="{{ route('riwayat') }}"><span
                                                class="icon icon-person"></span></a>Akun
                                        saya</li>

                                    @endguest





                                    <li class="d-inline-block d-md-none ml-md-0"><a href="#"
                                            class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <nav class="site-navigation text-right text-md-center" role="navigation">
                <div class="container">
                    <ul class="site-menu js-clone-nav d-none d-md-block">

                        <li class="{{ Route::is('dashboard') ? 'active' : '' }}">
                            <a href="{{ route('dashboard') }}">Home</a>

                        </li>
                        <li class="{{ Route::is('katalog') ? 'active' : '' }}">
                            <a href="{{ route('katalog') }}">Katalog</a>
                        </li>

                        <li class="{{ Route::is('tentangkami') ? 'active' : '' }}">
                            <a href="{{ route('tentangkami') }}">tentangkami</a>
                        </li>

                        <li class="{{ Route::is('kontak') ? 'active' : '' }}">
                            <a href="{{ route('kontak') }}">kontak</a>
                        </li>





                    </ul>
                </div>
            </nav>
        </header>

        {{ $slot }}

        <footer class="site-footer border-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4">Navigations</h3>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <ul class="list-unstyled">
                                    <li><a href="#">Sell online</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Shopping cart</a></li>
                                    <li><a href="#">Store builder</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <ul class="list-unstyled">
                                    <li><a href="#">Mobile commerce</a></li>
                                    <li><a href="#">Dropshipping</a></li>
                                    <li><a href="#">Website development</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <ul class="list-unstyled">
                                    <li><a href="#">Point of sale</a></li>
                                    <li><a href="#">Hardware</a></li>
                                    <li><a href="#">Software</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <h3 class="footer-heading mb-4">Promo</h3>
                        <a href="#" class="block-6">
                            <img src="images/hero_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
                            <h3 class="font-weight-light  mb-0">Finding Your Perfect Shoes</h3>
                            <p>Promo from nuary 15 &mdash; 25, 2019</p>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="block-5 mb-5">
                            <h3 class="footer-heading mb-4">Contact Info</h3>
                            <ul class="list-unstyled">
                                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                                <li class="email">emailaddress@domain.com</li>
                            </ul>
                        </div>

                        <div class="block-7">
                            <form action="#" method="post">
                                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                                <div class="form-group">
                                    <input type="text" class="form-control py-4" id="email_subscribe"
                                        placeholder="Email">
                                    <input type="submit" class="btn btn-sm btn-primary" value="Send">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script data-cfasync="false"
                                src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made
                            with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank" class="text-primary">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>

                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('pengguna/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('pengguna/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('pengguna/js/popper.min.js') }}"></script>
    <script src="{{ asset('pengguna/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('pengguna/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('pengguna/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('pengguna/js/aos.js') }}"></script>

    <script src="{{ asset('pengguna/js/main.js') }}"></script>


    @stack('script')

</body>

</html>