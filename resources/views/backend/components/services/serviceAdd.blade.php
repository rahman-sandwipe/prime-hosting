<!-- Add Service Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addServiceForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="inputLink">Link</label>
                        <input type="text" class="form-control" id="inputLink" name="link" required>
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Description</label>
                        <textarea class="form-control" id="inputDescription" name="description" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <div class="img-preview"></div>
                    </div>
                    <div class="form-group">
                        <label for="inputImage">Image</label>
                        <input type="file" class="form-control" id="inputImage" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">INSERT</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .img-preview {
        width: 100px;
        height: 100px;
        overflow: hidden;
        border: 2px solid #ccc;
    }
    .img-preview img {
        max-width: 100%;
        max-height: 100%;
        padding: 1px;
        object-fit: cover;
    }
</style>
<script>
    $('#addServiceForm').submit(function (e) {
        e.preventDefault();
        let form = this;
        let formData = new FormData(form);
        $.ajax({
            url: '/admin/service-insert',
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
                console.log(error);
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