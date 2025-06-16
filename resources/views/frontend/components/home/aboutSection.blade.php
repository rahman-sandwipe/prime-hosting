<section class="about-part section-mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-image">
                    <span class="companyImage">
                        <img class="company" src="" alt="about">
                    </span>
                    <span class="peopleImage">
                        <img class="people" src="" alt="about">
                    </span>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 class="section-subtitle" id="aboutSubtitle">about domhost</h2>
                    <h3 class="section-title" id="aboutTitle">
                        <!-- This title can be dynamically set via JavaScript if needed -->
                    </h3>
                    <p id="aboutDescription">
                        <!-- This description can be dynamically set via JavaScript if needed -->
                    </p>
                    <ul>
                        <li>
                            <h5 id="aboutRegisteredUsers">
                                <!-- This user can be dynamically set via JavaScript if needed -->
                            </h5>
                            <p>registered users</p>
                        </li>
                        <li>
                            <h5 id="aboutCurrentlyHosted">
                                <!-- This number can be dynamically set via JavaScript if needed -->
                            </h5>
                            <p>currently hosted</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Load about section data
    $(document).ready(function() {
        $.ajax({
            url: '/about-section',
            type: 'GET',
            success: function(response) {
                let aboutData = response.aboutData;
                // Set content
                $('#aboutSubtitle').text(aboutData.subtitle || 'about domhost');
                $('#aboutTitle').text(aboutData.title || 'About Us');
                $('#aboutDescription').text(aboutData.description || 'Lorem ipsum dolor sit amet');
                $('#aboutRegisteredUsers').text((aboutData.registeredUsers || '1,000') + ' +');
                $('#aboutCurrentlyHosted').text((aboutData.currentlyHosted || '12,345') + ' +');
                // Set images
                $('.companyImage img').attr('src', aboutData.image1 || '/images/partials/default.jpg');
                $('.peopleImage img').attr('src', aboutData.image2 || '/images/partials/default.jpg');
            },
            error: function(xhr, status, error) {
                console.error('Error loading about section:', error);
            }
        });
    });
</script>
<!-- End of about section -->