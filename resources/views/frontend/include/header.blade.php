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
                                <a href="" class="dropdown-link">Register a Domain</a>
                            </li>
                        </ul>
                    </li>


                    <!-- // + Hosting Section -->
                    <li class="navbar-item dropdown" id="getHosting">
                        <a href="#" class="navbar-link">Web Hosting</a>
                        <ul class="dropdown-list">
                            <!-- Dropdown items will be dynamically added here -->
                        </ul>
                    </li>
                    
                    
                    <li class="navbar-item"><a href="#" class="navbar-link">Help</a></li>
                    <li class="navbar-item"><a href="" class="navbar-link">Blogs</a></li>
                    <li class="navbar-item"><a href="" class="navbar-link">contact us</a></li>
                </ul>
            </nav>

            <div class="header-widget-group">
                <div class="header-profile">
                    <a href="{{ route('login') }}" class="btn btn-light br-5">Clientarea</a>
                </div>
                <div class="header-widget">
                    <a href="cartlist.html" class="header-cart">
                        <i class="flaticon-shopping-bag"></i>
                        <sup>0</sup>
                    </a>
                    <button class="header-menu">
                        <i class="flaticon-align-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    $(document).ready(function() {
        $.ajax({
            url: '/attribute-list',
            method: 'GET',
            success: function(response) {
                let rows = '';
                const hostingPageBaseURL = "{{ url('/hosting') }}";
                response.attributes.forEach(function(attr, index) {
                    rows += `
                    <li class="dropdown-item">    
                        <a href="${hostingPageBaseURL}/${attr.attribute_slug}" class="dropdown-link border-bottom load-attribute" data-attribute-id="${attr.id}"><i class="flaticon-computer"></i> ${attr.attribute_name}</a>
                    </li>
                    `;
                });
                $('#getHosting ul').html(rows);
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
</script>