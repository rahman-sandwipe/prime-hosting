<!-- Edit Servers Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Server</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateForm" enctype="multipart/form-data">
                    @csrf
                    <!-- Title -->
                    <div class="form-group">
                        <label for="editName">Name</label>
                        <input type="text" class="form-control" id="editName" name="title" required>
                    </div>

                    <!-- Link -->
                    <div class="form-group">
                        <label for="editLink">Link</label>
                        <input type="text" class="form-control" id="editLink" name="link" required>
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label for="editDescription">Description</label>
                        <textarea class="form-control" id="editDescription" name="description" rows="3" required></textarea>
                    </div>

                    <!-- Image Preview -->
                    <div class="form-group">
                        <div class="img-preview"></div>
                    </div>

                    <!-- Image Upload -->
                    <div class="form-group">
                        <label for="editImage">Image</label>
                        <input type="file" class="form-control" id="editImage" name="image" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Open edit modal
    $(document).on('click', '.edit-server', function() {
        var editedId = $(this).data('id');
        $.ajax({
            url: '/admin/server-modify/' + editedId,
            type: 'GET',
            success: function(response) {
                $('#editName').val(response.server.title);
                $('#editLink').val(response.server.link);
                $('#editDescription').val(response.server.description);
                $('.img-preview').html(`<img src="${response.server.image}" width="100" height="100">`);
                $('#updateForm').attr('action', '/admin/server-update/' + editedId);
                var modal = new bootstrap.Modal(document.getElementById('editModal'));
                modal.show();
            },
            error: function(error) {
                console.log(error);
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