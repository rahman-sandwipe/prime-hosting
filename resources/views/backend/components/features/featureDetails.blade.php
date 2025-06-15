<!-- Details Feature Modal -->
<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsModalLabel">Feature Details</h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- Feature ID -->
                    <div class="row border p-2">
                        <div class="col-4 font-weight-bold">Feature ID</div>
                        <div class="col-8" id="featureId"></div>
                    </div>

                    <!-- Name -->
                    <div class="row border p-2">
                        <div class="col-4 font-weight-bold">Feature Title</div>
                        <div class="col-8" id="featureName"></div>
                    </div>

                    <!-- Description -->
                    <div class="row border p-2">
                        <div class="col-4 font-weight-bold">Description</div>
                        <div class="col-8" id="featureDescription"></div>
                    </div>

                    <!-- Created At -->
                    <div class="row border p-2">
                        <div class="col-4 font-weight-bold">Created At</div>
                        <div class="col-8" id="featureCreated"></div>
                    </div>

                    <!-- Updated At -->
                    <div class="row border p-2">
                        <div class="col-4 font-weight-bold">Updated At</div>
                        <div class="col-8" id="featureUpdated"></div>
                    </div>

                    <!-- Image -->
                    <div class="row border p-2">
                        <div class="col-4 font-weight-bold">Feature Image</div>
                        <div class="col-8" id="featureImage"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('click', '.details-feature', function() {
        var featureId = $(this).data('id');
        $.ajax({
            url: '/admin/feature-details/' + featureId,
            method: 'GET',
            success: function(response) {
                let formattedId = response.feature.id.toString().padStart(6, '0');
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
                $('#featureId').text(formattedId);
                $('#featureName').text(response.feature.name);
                $('#featureDescription').text(response.feature.description);
                $('#featureCreated').text(formatDate(response.feature.created_at));
                $('#featureUpdated').text(formatDate(response.feature.updated_at));
                $('#featureImage').html('<img src="' + response.feature.icon + '" alt="'+ response.feature.name +'" class="img-fluid" width="100">');
                var modal = new bootstrap.Modal(document.getElementById('detailsModal'));
                modal.show();
            },
            error: function(err) {
                alert('Failed to fetch feature details.');
                console.error(err);
            }
        });
    });
</script>