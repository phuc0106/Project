<div class="header__menu-area header-menu-bg ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="header__right-icon header-red-icon f-right mt-25">
                    <a class="info-bar" href="javascript:void(0)">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
                <div class="header__menu header-red f-left">
                    <nav id="mobile-menu">
                        <ul>
                            <li class="active"><a href="{{ route('front.bridge.index') }}">Home</a>
                                {{-- <ul class="submenu">
                                    <li><a href="index.html">Home Style 1</a></li>
                                    <li><a href="index-2.html">Home Style 2</a>
                                    </li>
                                    <li><a href="index-3.html">Home Style 3</a></li>
                                    <li><a href="index-4.html">Home Style 4</a></li>
                                    <li><a href="index-5..html">Home Style 5</a></li>
                                </ul> --}}
                            </li>
                            <li><a href="{{ route('front.post.index') }}">News</a></li>
                            <li><a href="{{ route('front.galary.index') }}">Galary</a></li>
                            <li><a href="{{ route('front.contact') }}">About us</a></li>
                            
                        </ul>
                    </nav>
                </div>
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</div>