<!-- Edit Attribute Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Feature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateForm" enctype="multipart/form-data">
                    @csrf
                    <!-- Name -->
                    <div class="form-group">
                        <label for="editName">Name</label>
                        <input type="text" class="form-control" id="editName" name="name">
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label for="editDescription">Description</label>
                        <textarea class="form-control" id="editDescription" name="description" rows="3"></textarea>
                    </div>

                    <!-- Is Active -->
                    <div class="form-group">
                        <label for="editStatus">Status</label>
                        <select name="status" class="form-control" id="editStatus">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <!-- Image Preview -->
                    <div class="form-group">
                        <div class="img-preview"></div>
                    </div>

                    <!-- Image Upload -->
                    <div class="form-group">
                        <label for="editImage">Image</label>
                        <input type="file" class="form-control" id="editImage" name="icon">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('click', '.edit-feature', function() {
        var editedId = $(this).data('id');
        $.ajax({
            url: '/admin/feature-modify/' + editedId,
            type: 'GET',
            success: function(response) {
                $('#editName').val(response.feature.name);
                $('#editDescription').val(response.feature.description);
                $('#editStatus').val(response.feature.status).change();
                $('.img-preview').html(`<img src="${response.feature.icon}" width="100" height="100">`);
                $('#updateForm').attr('action', '/admin/feature-update/' + editedId);
                var modal = new bootstrap.Modal(document.getElementById('editModal'));
                modal.show();
            },
            error: function(error) {
                toastr.error(response.message, 'Error');
            }
        });
    });

    // Preview image
    $('#editImage').on('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                $('.img-preview').html(`<img src="${e.target.result}" width="100" height="100">`);
            }
            reader.readAsDataURL(file);
        }
    });

    // Submit updated form with image
    $('#updateForm').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this); // Use FormData to handle file upload
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                toastr.success(response.message, 'Updated!');
                $('#editModal').modal('hide');
                setTimeout(() => location.reload(), 1000);
            },
            error: function (error) {
                console.error('Update error:', error);
            }
        });
    });
</script>