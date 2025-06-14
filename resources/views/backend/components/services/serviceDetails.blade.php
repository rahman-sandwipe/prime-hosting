<!-- Details Attribute Modal -->
<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsModalLabel">Details Attribute</h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row border d-flex p-2">
                        <div class="col-4">Atribute ID</div>
                        <div class="col" id="atrrId"></div>
                    </div>
                    <div class="row border d-flex p-2">
                        <div class="col-4">Atribute Name</div>
                        <div class="col" id="atrrName"></div>
                    </div>
                    <div class="row border d-flex p-2">
                        <div class="col-4">Atribute Slug</div>
                        <div class="col" id="atrrSlug"></div>
                    </div>
                    <div class="row border d-flex p-2">
                        <div class="col-4">Created At</div>
                        <div class="col" id="atrrCreatedAt"></div>
                    </div>
                    <div class="row border d-flex p-2">
                        <div class="col-4">Updated At</div>
                        <div class="col" id="atrrUpdatedAt"></div>
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
    $(document).on('click', '.details-attribute', function() {
        var attributeId = $(this).data('id');
        $.ajax({
            url: '/admin/attribute-details/' + attributeId,
            method: 'GET',
            success: function(response) {
                // Format ID as 4-digit with leading zeros (e.g., 0001)
                let formattedId = response.id.toString().padStart(4, '0');
                // Function to format date to "Day, DD Month, YYYY HH:MM AM/PM"
                function formatDate(dateString) {
                    const date = new Date(dateString);
                    const options = {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric',
                        hour: 'numeric',
                        minute: '2-digit',
                        hour12: true
                    };
                    return date.toLocaleString('en-US', options);
                    // Example: "Saturday, June 11, 2025, 8:30 AM"
                }

                // Set attribute data to modal fields
                $('#atrrId').text(formattedId);
                $('#atrrName').text(response.attribute_name);
                $('#atrrSlug').text(response.attribute_slug);
                $('#atrrCreatedAt').text(formatDate(response.created_at));
                $('#atrrUpdatedAt').text(formatDate(response.updated_at));

                // Show Bootstrap modal
                var modal = new bootstrap.Modal(document.getElementById('detailsModal'));
                modal.show();
            },
            error: function(err) {
                alert('Failed to fetch attribute details.');
                console.error(err);
            }
        });
    });
</script>
