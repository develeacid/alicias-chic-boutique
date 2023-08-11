<div class="header__top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7">
                <div class="header__top__left">
                    <p>Envio Gratis</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="header__top__right">
                    <div class="header__top__links">
                        @guest
                            <!-- Usuario no autenticado -->
                            <a href="{{ route('login') }}">Iniciar sesión</a>
                            <a href="{{ route('register') }}">Régistrate</a>
                        @else
                            <!-- Usuario autenticado -->
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        @endguest
                    </div>
                    <div class="header__top__hover">
                        <span>ES<i class="arrow_carrot-down"></i></span>
                        <ul>
                            <li>USD</li>
                            <li>EUR</li>
                            <li>USD</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <div class="header__logo">
                <a href="./index.html"><img src="img/logo.png" alt=""></a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <nav class="header__menu mobile-menu">
                <ul>
                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="{{ request()->is('tienda') ? 'active' : '' }}"><a href="{{ route('tienda') }}">Tienda</a></li>
                    <li class="{{ request()->is('contacto') ? 'active' : '' }}"><a href="{{ route('contacto') }}">Contacto</a></li>
                    <li class="{{ request()->is('blog') ? 'active' : '' }}"><a href="{{ route('blog') }}">Blog</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-3 col-md-3">
            <div class="header__nav__option">
                <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                <a href="#"><img src="img/icon/heart.png" alt=""></a>
                <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                <div class="price">$0.00</div>
            </div>
        </div>
    </div>
    <div class="canvas__open"><i class="fa fa-bars"></i></div>
</div>