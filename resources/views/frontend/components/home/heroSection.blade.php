<section class="banner-part section-mb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="banner-content">
                    <h1 id="bannerTitle">
                        <!-- Banner Title will be loaded here -->
                    </h1>
                    <p id="bannerDescription">
                        <!-- Banner Description will be loaded here -->
                    </p>
                    <ul class="nav nav-tabs plan-tabs banner-tabs">
                        <li>
                            <a href="#register" class="tab-link active" data-bs-toggle="tab">
                                <i class="fas fa-user-edit"></i>
                                <span>register</span>
                            </a>
                        </li>
                        <li>
                            <a href="#transfer" class="tab-link" data-bs-toggle="tab">
                                <i class="fas fa-random"></i>
                                <span>Transfer</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-pane fade show active" id="register">
                        <!-- Register Domain API -->
                        <form id="registerApi" class="banner-form">
                            <div class="banner-input-group">
                                <div class="banner-input">
                                    <input type="text" id="registerDomain" placeholder="Enter Full Domain (e.g. example.com)" required>
                                </div>
                            </div>
                            <button type="submit" title="Search Domain">
                                <i class="fas fa-search"></i>
                                <span>search</span>
                            </button>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="transfer">
                        <!-- Transfer Domain API -->
                        <form id="transferApi" class="banner-form">
                            <div class="banner-input-group">
                                <div class="banner-input">
                                    <input type="text" id="transferDomain" placeholder="Enter Your Domain to Transfer" required>
                                </div>
                            </div>
                            <button type="submit" title="Transfer Domain">
                                <i class="fas fa-random"></i>
                                <span>Transfer</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner-image" id="bannerImage">
                    <!-- Image will be shown here -->
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    let registerApiUrl = '';
    let transferApiUrl = '';

    // Load hero section data
    $(document).ready(function() {
        $.ajax({
            url: '/hero-section',
            type: 'GET',
            success: function(response) {
                let heroData = response.heroData;

                // Set content
                $('#bannerImage').html(`<img src="${heroData.image || '/images/partials/default.jpg'}" alt="Hero Image">`);
                $('#bannerTitle').html(heroData.title);
                $('#bannerDescription').html(heroData.description);

                // Store API URLs for later use
                registerApiUrl = heroData.register_api;
                transferApiUrl = heroData.transfer_api;
            },
            error: function() {
                $('#bannerImage').html('<p>Error loading image.</p>');
            }
        });
    });

    // Transfer form
    document.getElementById('transferApi').addEventListener('submit', function (e) {
        e.preventDefault();
        const domain = document.getElementById('transferDomain').value.trim();
        if (domain === '') {
            alert('Please enter a domain to transfer.');
            return;
        }
        if (!transferApiUrl) {
            alert('Transfer API URL not loaded.');
            return;
        }

        const url = `${transferApiUrl}${encodeURIComponent(domain)}`;
        window.open(url, '_blank');
    });

    // Register form
    document.getElementById('registerApi').addEventListener('submit', function (e) {
        e.preventDefault();
        const domain = document.getElementById('registerDomain').value.trim();
        if (domain === '') {
            alert('Please enter a domain name.');
            return;
        }
        if (!registerApiUrl) {
            alert('Register API URL not loaded.');
            return;
        }

        const url = `${registerApiUrl}${encodeURIComponent(domain)}`;
        window.open(url, '_blank');
    });
</script>
