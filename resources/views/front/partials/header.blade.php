<header class="header">
    <div class="header__top-area header-menu-bg header-top-bg pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="header__top-search">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="header__logo text-center">
                        <a href="index.html">
                            <img src="{{ asset('user/assets/img/logo/logo.png')}}" height="50%" alt="Header Logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 d-none d-md-block">
                    <div class="header__social text-center text-md-right mt-10">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- menu start -->
    @include("front.partials.menu")
    <!-- menu end -->
    <div class="extra-info">
        <div class="close-icon">
            <button>
                <i class="far fa-window-close"></i>
            </button>
        </div>
        <div class="header__logo">
            <a href="index.html">
                <img src="assets/img/logo/footer-logo.png" alt="Header Logo">
            </a>
        </div>
        <div class="social-icon-right mt-30 mb-50">
            <a href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
                <i class="fab fa-google-plus-g"></i>
            </a>
            <a href="#">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
        <div class="side-menu mb-30">
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Features</a>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="#">Tech</a>
                </li>
                <li>
                    <a href="#">Enterteinment</a>
                </li>
                <li>
                    <a href="#">Lifestyle</a>
                </li>
                <li>
                    <a href="#">Review</a>
                </li>
            </ul>
        </div>

        <div class="side-post">
            <h3>Popular Post</h3>
            <div class="post__small mb-20">
                <div class="post__small-thumb f-left">
                    <a href="#">
                        <img src="assets/img/trendy/xs/xs-1.jpg" alt="hero image">
                    </a>
                </div>
                <div class="post__small-text fix pl-10">
                    <span class="sm-cat">
                        <a href="#">Fashion</a>
                    </span>
                    <h4 class="title-13 pr-0">
                        <a href="#">Storm in aw ame home away.</a>
                    </h4>
                    <div class="post__small-text-meta">
                        <ul>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <span>01 Sep 2018</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="post__small mb-20">
                <div class="post__small-thumb f-left">
                    <a href="#">
                        <img src="assets/img/trendy/xs/xs-2.jpg" alt="hero image">
                    </a>
                </div>
                <div class="post__small-text fix pl-10">
                    <span class="sm-cat">
                        <a href="#">Fashion</a>
                    </span>
                    <h4 class="title-13 pr-0">
                        <a href="#">Good ridre urants bid farewell.</a>
                    </h4>
                    <div class="post__small-text-meta">
                        <ul>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <span>01 Sep 2018</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="post__small mb-20">
                <div class="post__small-thumb f-left">
                    <a href="#">
                        <img src="assets/img/trendy/xs/xs-3.jpg" alt="hero image">
                    </a>
                </div>
                <div class="post__small-text fix pl-10">
                    <span class="sm-cat">
                        <a href="#">Fashion</a>
                    </span>
                    <h4 class="title-13 pr-0">
                        <a href="#">Nahan dow plays Lieral lership..</a>
                    </h4>
                    <div class="post__small-text-meta">
                        <ul>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <span>01 Sep 2018</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="post__small mb-20">
                <div class="post__small-thumb f-left">
                    <a href="#">
                        <img src="assets/img/trendy/xs/xs-4.jpg" alt="hero image">
                    </a>
                </div>
                <div class="post__small-text fix pl-10">
                    <span class="sm-cat">
                        <a href="#">Travel</a>
                    </span>
                    <h4 class="title-13 pr-0">
                        <a href="#">Weinstein pushs for dismissal.</a>
                    </h4>
                    <div class="post__small-text-meta">
                        <ul>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <span>01 Sep 2018</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search -->
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    <input type="text" placeholder="Search here...">
                    <button>
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>