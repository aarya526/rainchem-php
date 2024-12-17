<div class="backdrop close"></div>
<div class="header-container">
    <div class="header-top">
        <div class="container">
            <p>+91-9560177400/9810318183 &nbsp;&nbsp;&nbsp;&nbsp;services@rainchem.com</p>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="navbar-container">
                <div class="logo">
                    <a href="/"><img src="/img/rainchem new logo final..png" alt=""></a>
                </div>
                <div class="navbar-right-container">
                    {{-- <div class="container"> --}}
                    {{-- <div class="col-12"> --}}
                    <div class="navbar-right">
                        <ul class="navbar-links">
                            {{-- <li class="navbar-link"><a href="/">home</a></li> --}}

                            <li class="navbar-link dropdown"><a href="#">Products & Solutions <i
                                        class="fa-sharp fa-solid fa-caret-down"></i></a>

                                <ul class="navbar-dropdown-menu">
                                    @foreach ($specificCategories as $c)
                                        <li><a href="/category/{{ $c->categoryName }}/{{ $c->category_id }}">
                                                {{ $c->categoryName }}</a></li>
                                    @endforeach
                                    {{-- <li><a href="/industry/foodSafety">
                                            Food Safety & Kitchen Hygiene</a>
                                    </li>
                                    <li><a href="/industry/houseKeeping">House Keeping & Building Care</a>
                                    </li>
                                    <li><a href="/industry/commercialLaundering">Commercial Laundering & Fabric
                                            Care</a></li> --}}
                                </ul>
                            </li>
                            <li class="navbar-link dropdown"><a href="#">industry <i
                                        class="fa-sharp fa-solid fa-caret-down"></i></a>

                                <ul class="navbar-dropdown-menu">
                                    @foreach ($otherCategories as $c)
                                        <li><a href="/category/{{ $c->categoryName }}/{{ $c->category_id }}">
                                                {{ $c->categoryName }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="navbar-link"><a href="/aboutUs">about us</a></li>
                            <li class="navbar-link"><a href="/careers">careers</a></li>

                            <li class="navbar-link"><a href="/contactUs">Contact Us</a></li>
                            {{-- <li class="navbar-link dropdown"><a href="#">services <i
                                        class="fa-sharp fa-solid fa-caret-down"></i></a>
                                <ul class="navbar-dropdown-menu">
                                    <li><a href="/vendorRegistration">Vendor Registration</a></li>
                                    <li><a href="/careers">Careers</a></li>
                                    <li><a href="/contactUs">Contact us</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                        <div class="cart-section">
                            <a href="/view-cart" class="cart-icon"><i class="fa-solid fa-cart-shopping"></i>
                                <span class="cart-item-counter">{{ session('cart_count', 0) }}</span></a>
                        </div>
                        <a href="/requestaquote" class="btn btn-black">Request a quote</a>
                    </div>
                    <button class="btn btn-sidebar" type="button" id="sidebar-open"><i
                            class="fa-solid fa-bars"></i></button>
                </div>
            </div>
            {{-- </div> --}}
            {{-- </div> --}}
        </div>

        <!------------Navbar sidebar menu------------->
        <div class="navbar-sidebar-menu">
            <button class="btn btn-close-sidebar" id="sidebar-close"><i class="fa-solid fa-xmark"></i></button>
            <ul class="navbar-sidebar-menu-items">
                <li><a href="/aboutUs">about us</a></li>
                <li class="dropdown"><a href="#">Products & Solutions <i
                            class="fa-sharp fa-solid fa-caret-down"></i></a>
                    <ul class="navbar-sidebar-menu-items-dropdown-menu">
                        @foreach ($specificCategories as $c)
                            <li><a href="/category/{{ $c->categoryName }}/{{ $c->category_id }}">
                                    {{ $c->categoryName }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown"><a href="#">Industry <i class="fa-sharp fa-solid fa-caret-down"></i></a>
                    <ul class="navbar-sidebar-menu-items-dropdown-menu">
                        @foreach ($otherCategories as $c)
                            <li><a href="/category/{{ $c->categoryName }}/{{ $c->category_id }}">
                                    {{ $c->categoryName }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="/blog">blog</a></li>
                <li class="dropdown"><a href="#">services <i class="fa-sharp fa-solid fa-caret-down"></i></a>
                    <ul class="navbar-sidebar-menu-items-dropdown-menu">
                        <li><a href="/vendorRegistration">Vendor Registration</a></li>
                        <li><a href="/careers">Careers</a></li>
                        <li><a href="/contactUs">Contact us</a></li>
                    </ul>
                </li>
            </ul>
            <div class="cart-section">
                <a href="/view-cart" class="cart-icon"><i class="fa-solid fa-cart-shopping"></i>
                    <span class="cart-item-counter">{{ session('cart_count', 0) }}</span></a>
            </div>
            <a href="/requestaquote" class="btn btn-red">Request a quote</a>
        </div>
        <!------------Navbar sidebar menu END------------->
    </div>
</div>
