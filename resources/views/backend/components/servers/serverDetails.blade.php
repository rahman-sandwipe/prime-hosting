<!-- Details Service Modal -->
<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsModalLabel">Details Service</h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- Service Title -->
                    <div class="row border p-2">
                        <div class="col-4">Service ID</div>
                        <div class="col-8" id="srvId"></div>
                    </div>

                    <!-- Service Name -->
                    <div class="row border p-2">
                        <div class="col-4">Service Title</div>
                        <div class="col-8" id="srvName"></div>
                    </div>

                    <!-- Service Description -->
                    <div class="row p-2">
                        <div class="col-4">Description</div>
                        <div class="col-8" id="srvDescription"></div>
                    </div>

                    <!-- Service Created At -->
                    <div class="row border p-2">
                        <div class="col-4">Created At</div>
                        <div class="col" id="srvCreated"></div>
                    </div>

                    <!-- Service Updated At -->
                    <div class="row border p-2">
                        <div class="col-4">Updated At</div>
                        <div class="col" id="srvUpdated"></div>
                    </div>

                    <!-- Redirect URL -->
                    <div class="row border p-2">
                        <div class="col-4">Redirect URL</div>
                        <div class="col-8" id="redirectUrl"></div>
                    </div>

                    <!-- Service Image -->
                    <div class="row border p-2">
                        <div class="col-4">Service Image</div>
                        <div class="col-8" id="srvImage"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-block btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('click', '.details-service', function() {
        var serviceId = $(this).data('id');
        $.ajax({
            url: '/admin/service-details/' + serviceId,
            method: 'GET',
            success: function(response) {
                let formattedId = response.service.id.toString().padStart(6, '0');
                function formatDate(dateString) {
                    const date = new Date(dateString);
                    const options = {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: '2-digit'
                    };
                    return date.toLocaleString('en-US', options);
                }
                $('#srvId').text(formattedId);
                $('#srvName').text(response.service.title);
                $('#srvDescription').text(response.service.description);
                $('#srvCreated').text(formatDate(response.service.created_at));
                $('#srvUpdated').text(formatDate(response.service.updated_at));
                $('#redirectUrl').html('<a href="' + response.service.link + '" target="_blank" class="badge badge-primary p-1">Redirect URL</a>');
                $('#srvImage').html('<img src="' + response.service.image + '" alt="'+ response.service.title +'" class="img-fluid" width="100">');
                var modal = new bootstrap.Modal(document.getElementById('detailsModal'));
                modal.show();
            },
            error: function(err) {
                alert('Failed to fetch service details.');
                console.error(err);
            }
        });
    });
</script>
