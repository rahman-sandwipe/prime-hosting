<header class="header-part">
    <div class="container">
        <div class="header-nav-content">
            <a href="{{ route('homePage') }}" class="header-logo">
                <img src="https://dummyimage.com/200x70" alt="logo">
            </a>
            <nav class="nav-sidebar">
                <div class="nav-header">
                    <a href="{{ route('homePage') }}">
                        <img src="https://dummyimage.com/200x70" alt="logo">
                    </a>
                    <button class="nav-close">
                        <i class="flaticon-cancel-1"></i>
                    </button>
                </div>
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a class="navbar-link" href="{{ route('homePage') }}">home</a>
                    </li>
                    <li class="navbar-item dropdown">
                        <a href="#" class="navbar-link">domains</a>
                        <ul class="dropdown-list">
                            <li class="dropdown-item">
                                <a href="{{ route('registerDomainPage') }}" class="dropdown-link">Register a Domain</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ route('transferDomainPage') }}" class="dropdown-link">Transfer a Domain</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ route('resellerDomainPage') }}" class="dropdown-link">Domain Reseller</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ route('domainPricingPage') }}" class="dropdown-link">Domain Pricing List</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-item dropdown">
                        <a href="#" class="navbar-link">Web Hosting</a>
                        <ul class="dropdown-list">
                            <li class="dropdown-item"><a href="{{ route('cloudHostingPage') }}" class="dropdown-link">cloud hosting</a></li>
                            <li class="dropdown-item"><a href="{{ route('sharedHostingPage') }}" class="dropdown-link">shared hosting</a></li>
                            <li class="dropdown-item"><a href="{{ route('resellerHostingPage') }}" class="dropdown-link">reseller hosting</a></li>
                        </ul>
                    </li>
                    <li class="navbar-item dropdown">
                        <a href="#" class="navbar-link">Services</a>
                        <ul class="dropdown-list">
                            <li class="dropdown-item"><a href="cartlist.html" class="dropdown-link">Corporate Web Hosting</a></li>
                            <li class="dropdown-item"><a href="checkout.html" class="dropdown-link">SSL Certificate</a></li>
                            <li class="dropdown-item"><a href="checkout.html" class="dropdown-link">Business Email</a></li>
                            <li class="dropdown-item"><a href="checkout.html" class="dropdown-link">Enterprise Email</a></li>
                            <li class="dropdown-item"><a href="checkout.html" class="dropdown-link">Web Development</a></li>
                            <li class="dropdown-item"><a href="checkout.html" class="dropdown-link">eCommerce Solution</a></li>
                            <li class="dropdown-item"><a href="checkout.html" class="dropdown-link">SEO & Marketing</a></li>
                            <li class="dropdown-item"><a href="checkout.html" class="dropdown-link">Bulk SMS/Email Solution</a></li>
                        </ul>
                    </li>
                    <li class="navbar-item dropdown">
                        <a href="#" class="navbar-link">Help</a>
                        <ul class="dropdown-list">
                            <li class="dropdown-item"><a href="blog-list.html" class="dropdown-link">Support Ticket</a></li>
                            <li class="dropdown-item"><a href="blog-details.html" class="dropdown-link">Self Support & Knowledgebase</a></li>
                            <li class="dropdown-item"><a href="blog-details.html" class="dropdown-link">Email History</a></li>
                            <li class="dropdown-item"><a href="blog-details.html" class="dropdown-link">How to pay</a></li>
                            <li class="dropdown-item"><a href="blog-details.html" class="dropdown-link">Announcements</a></li>
                            <li class="dropdown-item"><a href="blog-details.html" class="dropdown-link">Terms of Service (ToS)</a></li>
                        </ul>
                    </li>
                
                    <li class="navbar-item"><a href="{{ route('blogPage') }}" class="navbar-link">Blogs</a></li>
                    <li class="navbar-item"><a href="{{ route('contactPage') }}" class="navbar-link">contact us</a></li>
                </ul>
            </nav>

            <div class="header-widget-group">
                <div class="header-profile">
                    <a href="" class="btn btn-light br-5">Clientarea</a>
                </div>
                <div class="header-widget"><a href="cartlist.html" class="header-cart"><i class="flaticon-shopping-bag"></i><sup>0</sup></a><button class="header-menu"><i class="flaticon-align-right"></i></button></div>
            </div>
        </div>
    </div>
</header>