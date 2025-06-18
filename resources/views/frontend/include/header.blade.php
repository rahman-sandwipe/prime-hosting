<header class="header-part">
    <div class="container">
        <div class="header-nav-content">
            <a href="{{ route('homePage') }}" id="headerLogo" class="header-logo">
                <!-- The logo will be dynamically loaded here -->
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
                    <li class="navbar-item dropdown" id="getHosting">
                        <a href="#" class="navbar-link">Web Hosting</a>
                        <ul class="dropdown-list">
                            <!-- Dropdown items will be dynamically added here -->
                        </ul>
                    </li>    <!-- // + Hosting Section -->
                    
                    <li class="navbar-item dropdown" id="getServer">
                        <a href="#" class="navbar-link">Servers</a>
                        <ul class="dropdown-list">
                            <!-- Dropdown items will be dynamically added here -->
                        </ul>
                    </li>    <!-- // + Server Section -->

                    <li class="navbar-item dropdown" id="getService">
                        <a href="#" class="navbar-link">Services</a>
                        <ul class="dropdown-list">
                            <!-- Dropdown items will be dynamically added here -->
                        </ul>
                    </li>    <!-- // + Services Section -->
                    
                    <li class="navbar-item"><a href="#" class="navbar-link">Help</a></li>
                    <li class="navbar-item"><a href="" class="navbar-link">Blogs</a></li>
                    <li class="navbar-item"><a href="" class="navbar-link">contact us</a></li>
                </ul>
            </nav>

            <div class="header-widget-group">
                <div class="header-profile">
                    <a href="{{ route('login') }}" class="btn btn-light">Clientarea</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- + Hosting Section -->
<script>
    $(document).ready(function () {
        $.ajax({
            url: '/attribute-list',
            method: 'GET',
            success: function (response) {
                let rows = '';
                const hostingPageBaseURL = "{{ url('/hosting-package') }}";
                response.attributes.forEach(function (attr) {
                    rows += `
                        <li class="dropdown-item">    
                            <a href="${hostingPageBaseURL}/${attr.attribute_slug}" 
                            class="dropdown-link border-bottom">
                                <i class="flaticon-computer"></i> ${attr.attribute_name}
                            </a>
                        </li>`;
                });
                $('#getHosting ul').html(rows);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
</script>

<!-- + Server Section -->
<script>
    $(document).ready(function () {
        $.ajax({
            url: '/server-list',
            method: 'GET',
            success: function (response) {
                let rows = '';
                response.servers.forEach(function (server) {
                    rows += `
                        <li class="dropdown-item">    
                            <a href="${server.link}" 
                            class="dropdown-link border-bottom">
                                <i class="flaticon-computer"></i> ${server.title}
                            </a>
                        </li>
                    `;
                });
                $('#getServer ul').html(rows);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
</script>

<!-- + Services Section -->
<script>
    $(document).ready(function () {
        $.ajax({
            url: '/service-list',
            method: 'GET',
            success: function (response) {
                let rows = '';
                response.services.forEach(function (service) {
                    rows += `
                        <li class="dropdown-item">    
                            <a href="${service.link}" 
                            class="dropdown-link border-bottom">
                                <i class="flaticon-computer"></i> ${service.title}
                            </a>
                        </li>
                    `;
                });
                $('#getService ul').html(rows);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
</script>