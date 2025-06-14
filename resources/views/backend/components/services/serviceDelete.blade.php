<!-- Delete Attribute Modal -->
<!-- Delete Attribute Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteModalLabel">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i> Confirm Deletion
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="fw-semibold text-danger mb-2">This action cannot be undone.</p>
                <p>Are you sure you want to permanently delete this attribute?</p>
                <input type="hidden" id="deleteAttrId">
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times; Close</span>
                </button>
                <button type="button" id="confirmDeleteBtn" class="btn btn-danger">
                    <i class="fa fa-trash mr-1"></i>
                    <span aria-hidden="true">Delete</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // When clicking delete button from the table
    $(document).on('click', '.delete-attribute', function() {
        var attributeId = $(this).data('id');
        $('#deleteAttrId').val(attributeId);
        var modal = new bootstrap.Modal(document.getElementById('deleteModal'));
        modal.show();
    });

    // When confirming delete inside modal
    $('#confirmDeleteBtn').click(function() {
        var attributeId = $('#deleteAttrId').val();
        $.ajax({
            url: '/admin/attribute-delete/' + attributeId,
            type: 'GET', // or DELETE if your route supports it
            success: function(response) {
                toastr.success(response.message, 'Success');
                $('#deleteModal').modal('hide');
                setTimeout(() => location.reload(), 1000);
            },
            error: function(error) {
                alert('Failed to delete attribute.');
                console.error(error);
            }
        });
    });
</script>