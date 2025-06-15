<!-- Add Feature Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add Feature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addFeature" enctype="multipart/form-data">
                    @csrf
                    <!-- Name -->
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" name="name" required>
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label for="inputDescription">Description</label>
                        <textarea class="form-control" id="inputDescription" name="description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="inpitStatus">Status</label>
                        <select name="status" class="form-control" id="inpitStatus">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>

                    <!-- IMG Icon Preview -->
                    <div class="form-group">
                        <div class="img-preview"></div>
                    </div>

                    <!-- IMG Icon Upload -->
                    <div class="form-group">
                        <label for="inputImage">IMG Icon</label>
                        <input type="file" class="form-control" id="inputImage" name="icon">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">INSERT</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('#addFeature').submit(function (e) {
        e.preventDefault();
        let form = this;
        let formData = new FormData(form);
        $.ajax({
            url: '/admin/feature-insert',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                toastr.success(response.message, 'Success');
                $('#addModal').modal('hide');
                setTimeout(() => location.reload(), 1000);
            },
            error: function (error) {
                toastr.error(error.responseJSON.message, 'Error');
            }
        });
    });
    $('#inputImage').on('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                $('.img-preview').html(`<img src="${e.target.result}" width="100" height="100">`);
            }
            reader.readAsDataURL(file);
        }
    });
</script>