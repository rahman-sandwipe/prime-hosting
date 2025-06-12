<!-- Edit User Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit User [ID : <span id="editId"></span>]</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateForm" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="editName">User Name</label>
                        <input type="text" class="form-control" id="editName" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="editEmail">Email</label>
                        <input type="email" class="form-control" id="editEmail" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="editPhone">Phone</label>
                        <input type="text" class="form-control" id="editPhone" name="phone" 
                            maxlength="11" pattern="\d{11}" title="Enter exactly 11 digits" required>
                    </div>

                    <div class="form-group">
                        <label for="editStatus">Status</label>
                        <select class="form-control" id="editStatus" name="status" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="editPassword">Password</label>
                        <input type="password" class="form-control" id="editPassword" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $('#editPhone').on('input', function () {
        this.value = this.value.replace(/\D/g, '').slice(0, 11); // non-digit remove + max 11
    });

    $(document).on('click', '.edit-user', function() {
        var userId = $(this).data('id');
        $.ajax({
            url: '/admin/user-modify/' + userId,
            type: 'GET',
            success: function(response) {
                $('#editId').text(response.id);
                $('#editName').val(response.name);
                $('#editEmail').val(response.email);
                $('#editPhone').val(response.phone || 'N/A');
                $('#editStatus').val(response.status).change();
                // Update the form action user
                $('#updateForm').attr('action', '/admin/user-update/' + userId);
                // Show Bootstrap modal
                var modal = new bootstrap.Modal(document.getElementById('editModal'));
                modal.show();
            },
            error: function(error) {
                console.log(error);
            }
        });
    });

   $('#updateForm').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: function(response) {
                toastr.success('User updated successfully!', 'Success');
                $('#editModal').modal('hide');
                setTimeout(() => location.reload(), 1000);
            },
            error: function(err) {
                if (err.responseJSON && err.responseJSON.errors) {
                    $.each(err.responseJSON.errors, function(key, value) {
                        toastr.error(value[0], 'Validation Error');
                    });
                } else {
                    toastr.error('Something went wrong!', 'Error');
                }
            }
        });
    });
</script>