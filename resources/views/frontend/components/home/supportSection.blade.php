<section class="support-part section-mb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 col-lg-5">
                <div class="support-image" id="supportImage">
                    <img src="" alt="support">
                </div>
            </div>
            <div id="supportContent" class="col-md-8 col-lg-7">
                <div class="support-content">
                    <h2 id="supportTitle">why you with domhost?</h2>
                    <p id="supportDescription">
                        <!-- This paragraph can be dynamically set via JavaScript if needed -->
                    </p>
                    <ul class="support-info">
                        <li>
                            <span id="supportCall">for call</span>
                            <!-- Phone number will be dynamically set via JavaScript -->
                        </li>
                        <li>
                            <span id="supportMail">for mail</span>
                            <!-- Email will be dynamically set via JavaScript -->    
                        </li>
                    </ul>
                    <div class="support-btn">
                        <li id="supportChat">
                            <!-- Live Chat Button will be dynamically set via JavaScript -->
                        </li>
                        <li id="supportContact">
                            <!-- Contact Us Button will be dynamically set via JavaScript -->
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $.ajax({
            url: '/support-section',
            method: 'GET',
            success: function (response) {
                let data = response.supportData || {};
                // Image
                $('.support-image img').attr('src', data.image || '/images/partials/default.jpg');

                // Text content
                $('#supportTitle').text(data.title || 'Why Choose Us?');
                $('#supportDescription').text(data.description || 'Lorem ipsum dolor sit amet.');

                // Phone and email
                $('.support-info li:nth-child(1)').html(`<span>For Call</span><a href="tel:${data.phone || '0209-4215-5596'}">'+'${data.phone || '+880-00000-00000'}</a>`);
                $('.support-info li:nth-child(2)').html(`<span>For Mail</span><a href="mailto:${data.email || 'info@domhost.com'}">${data.email || 'info@domhost.com'}</a>`);

                // Buttons
                $('#supportChat').html('<a href="' + (data.live_chat_api || '#') + '" target="_blank" class="btn btn-inline"> <i class="fas fa-comments"></i> Live Chat</a>');
                $('#supportContact').html('<a href="' + (data.contact_form_api || '#') + '" target="_blank" class="btn btn-inline"> <i class="fas fa-file-signature"></i> Contact Us</a>');
            },
            error: function () {
                console.error('Failed to load support section data.');
            }
        });
    });
</script>