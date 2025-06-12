<!-- Add Attribute Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add Attribute</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="userInsertForm" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required maxlength="50">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required maxlength="50">
                    </div>

                    <div class="form-group">
                        <label>Phone (Optional)</label>
                        <input type="text" name="phone" class="form-control" maxlength="11" pattern="\d{11}">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required minlength="5">
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required minlength="5">
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" required>
                            <option value="">-- Select Status --</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#userInsertForm').submit(function(e) {
            e.preventDefault();
            let form = $(this);
            let formData = form.serialize();
            $.ajax({
                url: '/admin/user-insert',
                type: 'POST',
                data: formData,
                success: function(response) {
                    toastr.success(response.message, 'Success');
                    form[0].reset(); // Clear form
                    // Optional: Reload or update table
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            toastr.error('❌ ' + value[0], 'Validation Error');
                        });
                    } else {
                        toastr.error('❌ Something went wrong!', 'Error');
                        console.error(xhr.responseText);
                    }
                }
            });
        });
    });
</script>