<section class="service-part section-mb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="section-subtitle">service provide</h2>
                    <h3 class="section-title">our <span>best service</span></h3>
                </div>
            </div>
        </div>
        <div class="row" id="serviceList">
            <!-- service card dynamic ajax load -->
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $.ajax({
            url: '/service-list',
            method: 'GET',
            success: function(response) {
                let rows = '';
                response.services.forEach(function(service) {
                    rows += `
                        <div class="col-sm-6 col-lg-4">
                            <div class="service-card">
                                <img src="${service.image}" alt="service" class="img-fluid" width="80">
                                <h4 class="mt-2">${service.title}</h4>
                                <p class="mt-2" >${limitCharacters(service.description, 100)}</p>
                                <a href="${service.link}">know more</a>
                            </div>
                        </div>
                    `;
                });
                $('#serviceList').html(rows);
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
</script>