<section class="feature-part section-mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="section-subtitle">hosting feature</h2>
                    <h3 class="section-title">our <span>top features</span></h3>
                </div>
            </div>
        </div>
        <div class="row" id="featureList">
            <!-- Dynamic features will be loaded here -->
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $.ajax({
            url: '/feature-list',
            method: 'GET',
            success: function(response) {
                let rows = '';
                response.features.forEach(function(feature) {
                    rows += `
                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-wrap mb-5">
                                <div class="feature-icon">
                                    <img src="${feature.icon}" alt="feature icon" class="img-fluid" width="70">
                                </div>
                                <div class="feature-text">
                                    <h5>${feature.name}</h5>
                                    <p>${limitCharacters(feature.description, 50)}</p>
                                </div>
                            </div>
                        </div>
                    `;
                });
                $('#featureList').html(rows);
            },
            error: function(error) {
                toastr.error(error.responseJSON.message);
            }
        });
    });
</script>