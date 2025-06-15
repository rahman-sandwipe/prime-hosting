<section class="server-part section-mb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="section-subtitle">server provide</h2>
                    <h3 class="section-title">our <span>best servers</span></h3>
                </div>
            </div>
        </div>
        <div class="row" id="serverList">
            <!-- server card dynamic ajax load -->
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $.ajax({
            url: '/server-list',
            method: 'GET',
            success: function(response) {
                let rows = '';
                response.servers.forEach(function(server) {
                    rows += `
                        <div class="col-sm-6 col-lg-4">
                            <div class="server-card text-center mb-5">
                                <img src="${server.image}" alt="server" class="img-fluid" width="80">
                                <h4 class="mt-2">${server.title}</h4>
                                <p class="mt-2" >${limitCharacters(server.description, 100)}</p>
                                <a href="${server.link}">know more</a>
                            </div>
                        </div>
                    `;
                });
                $('#serverList').html(rows);
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
</script>