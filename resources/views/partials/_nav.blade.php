<!-- Start  Logo & Naviagtion  -->
<div class="navbar navbar-default navbar-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars">
                </i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.html">
                <img alt="" src="assets/img/logo.png">
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
                <a class="show-search">
                    <i class="fa fa-search"></i>
                </a>
            </div>
            <!-- Form for navbar search area -->
            <form class="full-search">
                <div class="container">
                    <div class="row">
                        <input class="form-control" type="text" placeholder="Type to Search">
                        <a class="close-search">
                    <span class="fa fa-times fa-2x">
                    </span>
                        </a>
                    </div>
                </div>
            </form>
            <!-- Search form ends -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="{{Request::is('/')?"active":""}}" href="{{route('home')}}">
                        Home
                    </a>

                </li>
                <li>
                    <a>
                       Services
                    </a>
                    <ul class="dropdown">
                        <li>
                            <a href="{{route('b2bintegration')}}">
                                B2B Integration
                            </a>
                        </li>
                        <li>
                            <a href="{{route('apiIntegration')}}">
                                API Integration
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="{{Request::is('about')?"active":""}}" href="{{route('about')}}">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="portfolio-3.html">
                        Clients
                    </a>
                </li>
                <li>
                    <a class="{{Request::is('contact')?"active":""}}" href="{{route('contact')}}">
                        Contact
                    </a>
                </li>
            </ul>
            <!-- End Navigation List -->
        </div>
    </div>

    <!-- Mobile Menu Start -->
    <ul class="wpb-mobile-menu">
        <li>
            <a class="active" href="{{route('home')}}">
                Home
            </a>

        </li>
        <li>
            <a href="about.html">
                Services
            </a>
            <ul class="dropdown">
                <li>
                    <a href="{{route('b2bintegration')}}">
                        B2B Integration
                    </a>
                </li>
                <li>
                    <a href="{{route('apiIntegration')}}">
                        API Integration
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="{{Request::is('about')?"active":""}}" href="{{route('about')}}">
                About Us
            </a>
        </li>
        <li>
            <a href="portfolio-3.html">
                Clients
            </a>
        </li>
        <li>
            <a href="{{route('contact')}}">
                Contact
            </a>
        </li>
    </ul>
    <!-- Mobile Menu End -->

</div>
<!-- End Header Logo & Naviagtion -->
</header>