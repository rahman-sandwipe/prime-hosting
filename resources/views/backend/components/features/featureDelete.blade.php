<!-- Delete feature Modal -->
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
                <p>Are you sure you want to permanently delete this feature?</p>
                <input type="hidden" id="deleteId">
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    &times; Close
                </button>
                <button type="button" id="confirmDeleteBtn" class="btn btn-danger">
                    <i class="fa fa-trash mr-1"></i> Delete
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // Show modal and set delete ID
    $(document).on('click', '.delete-feature', function () {
        const deleteId = $(this).data('id');
        $('#deleteId').val(deleteId);
        const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
        modal.show();
    });

    // Confirm deletion
    $('#confirmDeleteBtn').click(function () {
        const deleteId = $('#deleteId').val();
        $.ajax({
            url: '/admin/feature-delete/' + deleteId,
            type: 'DELETE',
            data: {
                _token: '{{ csrf_token() }}' // Laravel CSRF token
            },
            success: function (response) {
                toastr.success(response.message || 'Deleted successfully', 'Success');
                $('#deleteModal').modal('hide');
                setTimeout(() => location.reload(), 1000);
            },
            error: function (error) {
                toastr.error('Failed to delete feature.', 'Error');
                console.error(error);
            }
        });
    });
</script>