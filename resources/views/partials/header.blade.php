<header>
    <div class="header-top-area">
        <div class="container" style="max-width: 100%; height: 1cm;">

        </div>
    </div>
    <div class="header-middle-area menu-sticky">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-12 logo">
                    <a href="index-2.html">
                        <img src="{{ asset('template_wbfc/images/Waanal_Brothers.png') }}" alt="logo" style="width: 60px; height: auto;">
                    </a>
                </div>
                <div class="col-md-10 col-sm-12 col-xs-12 mobile-menu">
                    <div class="main-menu">
                        <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                        <nav class="rs-menu">
                            <ul class="nav-menu">
                                <!-- Home -->
                                <li>
                                    <a href="{{ route('home') }}">Beranda</a>
                                </li>
                                <li><a href="contact.html">Tentang</a></li>
                                <!-- Club List -->
                                <!-- <li class="menu-item-has-children">
                                    <a href="#">Club List</a>
                                    <ul class="sub-menu">
                                        <li><a href="badda.html">Liga Nusantara</a></li>
                                        <li><a href="banani.html">Akademik WBFC U15</a></li>
                                        <li><a href="trisali.html">Akademik WBFC U12</a></li>
                                    </ul>
                                </li> -->

                                <!-- Team -->
                                <li class="menu-item-has-children">
                                    <a href="#">Team</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('team.index') }}">Team</a></li>
                                        <li><a href="{{ route('coaches.index') }}">Coach</a></li>
                                    </ul>
                                </li>

                                <!-- Pages -->
                                <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Jadwal Pertandingan</a>
                                            <ul class="sub-menu">
                                                <li><a href="result-single.html">Jadwal Pertandingan</a></li>
                                                <li><a href="result-single.html">Hasil Pertandingan</a></li>
                                                <li><a href="result-single.html">Filter Jadwal</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Gallery</a>
                                            <ul class="sub-menu">
                                                <li><a href="gallery2.html">Gallery Foto</a></li>
                                                <li><a href="gallery3.html">Gallery Vidio</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="cart.html">Shop</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>

                                <!-- Berita -->
                                <li class="menu-item-has-children">
                                    <a href="{{ route('news.index') }}">Berita</a>
                                </li>

                             


                                <!-- Contact -->
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>

                        <!-- Header Search -->
                        <div class="search">
                            <a class="rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>