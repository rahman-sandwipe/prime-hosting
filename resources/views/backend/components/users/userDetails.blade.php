
<!-- User Details -->
<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-info" id="detailsModalLabel">User Details</h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row border d-flex p-2">
                        <div class="col-4">User ID</div>
                        <div class="col" id="usrId"></div>
                    </div>
                    <div class="row border d-flex p-2">
                        <div class="col-4">User Name</div>
                        <div class="col" id="usrName"></div>
                    </div>
                    <div class="row border d-flex p-2">
                        <div class="col-4">User Email</div>
                        <div class="col" id="usrSlug"></div>
                    </div>
                    <div class="row border d-flex p-2">
                        <div class="col-4">User Number</div>
                        <div class="col" id="usrNumber"></div>
                    </div>

                    <div class="row border d-flex p-2">
                        <div class="col-4">Activation Status</div>
                        <div class="col text-capitalize" id="usrStatus"></div>
                    </div>

                    <div class="row border d-flex p-2">
                        <div class="col-4">Joined Date</div>
                        <div class="col" id="usrCreatedAt"></div>
                    </div>
                    <div class="row border d-flex p-2">
                        <div class="col-4">Last Updated</div>
                        <div class="col" id="usrUpdatedAt"></div>
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
    $(document).on('click', '.details-user', function() {
        var userId = $(this).data('id');
        $.ajax({
            url: '/admin/user-details/' + userId,
            method: 'GET',
            success: function(response) {
                // Format ID as 6-digit with leading zeros (e.g., 000001)
                let detailsUserId = response.id.toString().padStart(6, '0');
                function formatDate(dateString) {
                    const date = new Date(dateString);
                    const options = {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: '2-digit'
                    };
                    return date.toLocaleString('en-US', options);
                    // Example: "Saturday, June 11, 2025"
                }
                $('#usrId').text(detailsUserId);
                $('#usrName').text(response.name);
                $('#usrSlug').text(response.email);
                $('#usrNumber').text(response.phone || 'N/A');
                $('#usrStatus').text(response.status);
                $('#usrCreatedAt').text(formatDate(response.created_at));
                $('#usrUpdatedAt').text(formatDate(response.updated_at));
                // Show Bootstrap modal
                var modal = new bootstrap.Modal(document.getElementById('detailsModal'));
                modal.show();
            },
            error: function(err) {
                alert('Failed to fetch user details.');
                console.error(err);
            }
        });
    });
</script>
