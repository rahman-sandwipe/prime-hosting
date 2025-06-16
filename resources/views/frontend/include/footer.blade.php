<footer class="footer-part">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 footer-devider">
            <div class="col">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="{{ route('homePage') }}" id="footerLogo">
                            <!-- The logo will be dynamically loaded here -->
                        </a>
                    </div>
                </div>
            </div>
           
            <div class="col">
                <div class="footer-widget">
                    <h5>Contact Infos</h5>
                    <ul>
                        <li>
                            <a href="">
                                <span class="contact-label">Email:</span>
                                <span id="contactEmail"></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="contact-label">Email:</span>
                                <span id="supportEmail">N/A</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="contact-label">Phone:</span>
                                <span id="contactPhone">N/A</span>
                            </a>
                        </li>
                        <li>
                            <span id="whatsappNumber"></span>
                        </li>
                        <li>
                            <a href="">
                                <span class="contact-label">Address:</span>
                                <span id="contactAddress">N/A</span>
                            </a>
                        </li>
                    </ul>
                    <script>
                        $(document).ready(function () {
                            $.ajax({
                                url: '/contact-infos', // Ensure this route returns the contact info JSON
                                method: 'GET',
                                success: function (response) {
                                    const contact = response.contacts;
                                    $('#contactEmail').text(contact.contact_email || 'N/A');
                                    $('#supportEmail').text(contact.support_email || 'N/A');
                                    $('#contactPhone').text(contact.contact_phone || 'N/A');
                                    $('#whatsappNumber').html(`<a href="https://wa.me/${contact.whatsapp_number}" target="_blank"> WhatsApp: ${contact.whatsapp_number || 'N/A'}</a>`);
                                    $('#contactAddress').text(contact.address || 'N/A');
                                },
                                error: function () {
                                    toastr.error('Failed to load contact info');
                                }
                            });
                        });
                    </script>
                </div>
            </div>
            <div class="col">
                <div class="footer-widget">
                    <h5>terms</h5>
                    <ul>
                        <li><a href="#">terms of Condition</a></li>
                        <li><a href="#">copyright notice</a></li>
                        <li><a href="#">support system</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">easy return</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="footer-widget">
                    <h5>company</h5>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">contact form</a></li>
                        <li><a href="#">testimonials</a></li>
                        <li><a href="#">our partner</a></li>
                        <li><a href="#">career</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="footer-action">
                    <div class="action-title">
                        <i class="far fa-check-circle"></i>
                        <span>trusted on us</span>
                    </div>
                    <div class="action-badge">
                        <img src="{{ asset('images/partials/cirtificate01.png') }}" alt="badge">
                        <img src="{{ asset('images/partials/cirtificate02.png') }}" alt="badge">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="footer-action">
                    <div class="action-title">
                        <i class="fas fa-shield-alt"></i>
                        <span>SSL verified payment</span>
                    </div>
                    <div class="action-card" id="paymentCard">
                        <div id="paymentCard" class="d-flex flex-wrap">
                            <!-- Payment gateway images will be loaded here -->
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $.ajax({
                        url: '/site-settings', // Ensure this route returns the gateways JSON
                        method: 'GET',
                        success: function(response) {
                            $('#footerLogo').html(`<img src="${response.settings.light_logo}" alt="logo">`);
                            $('#headerLogo').html(`<img src="${response.settings.light_logo}" alt="logo">`);
                        },
                        error: function(error) {
                            toastr.error('Error loading payment gateways');
                        }
                    });
                });
            </script>

            <div class="col-sm-12 col-lg-4">
                <div class="footer-action">
                    <div class="footer-action">
                        <div class="action-title"><i class="fas fa-rss"></i><span>follow our social media</span></div>
                        <ul class="action-list">
                            <li><a href="#" id="facebookLink" class="fab fa-facebook-f"></a></li>
                            <li><a href="#" id="twitterLink" class="fab fa-twitter"></a></li>
                            <li><a href="#" id="linkedinLink" class="fab fa-linkedin-in"></a></li>
                            <li><a href="#" id="instagramLink" class="fab fa-instagram"></a></li>
                            <li><a href="#" id="pinterestLink" class="fab fa-pinterest-p"></a></li>
                            <li><a href="#" id="youtubeLink" class="fab fa-youtube"></a></li>
                        </ul>
                    </div>

                </div>
                <script>
                    $(document).ready(function() {
                        $.ajax({
                            url: '/social-links',
                            method: 'GET',
                            success: function(response) {
                                let social = response.social_links;
                                $('#facebookLink').attr('href', social.facebook_url || '#');
                                $('#twitterLink').attr('href', social.twitter_url || '#');
                                $('#linkedinLink').attr('href', social.linkedin_url || '#');
                                $('#instagramLink').attr('href', social.instagram_url || '#');
                                $('#pinterestLink').attr('href', social.pinterest_url || '#');
                                $('#youtubeLink').attr('href', social.youtube_url || '#');
                                // Add this in your database/model if needed
                            },
                            error: function() {
                                toastr.error('Failed to load social links.');
                            }
                        });
                    });
                </script>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>&copy; 2021 all rights reserved by &hearts; <a href="#">mironcoder</a></p>
            <a href="#" class="back2top-btn"><i class="fas fa-arrow-up"></i></a>
        </div>
    </div>
</footer>

<script>
    $(document).ready(function() {
        $.ajax({
            url: '/payment-gateways', // Ensure this route returns the gateways JSON
            method: 'GET',
            success: function(response) {
                let rows = '';
                response.gateways.forEach(function(gateway) {
                    rows += `
                        <img src="${gateway.logo}" alt="${gateway.name}">
                    `;
                });
                $('#paymentCard').html(rows);
            },
            error: function(error) {
                toastr.error('Error loading payment gateways');
            }
        });
    });
</script>
