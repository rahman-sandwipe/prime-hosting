<!-- Edit Attribute Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Attribute</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="attributeUpdateForm" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="editAttrName">Attribute Name</label>
                        <input type="text" class="form-control" id="editAttrName" name="attribute_name" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">UPDATE ATTRIBUTE</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).on('click', '.edit-attribute', function() {
        var attributeId = $(this).data('id');
        $.ajax({
            url: '/admin/attribute-modify/' + attributeId,
            type: 'GET',
            success: function(response) {
                $('#editAttrId').val(response.id);
                $('#editAttrName').val(response.attribute_name);
                $('#editAttrSlug').val(response.attribute_slug);
                // Update the form action attribute
                $('#attributeUpdateForm').attr('action', '/admin/attribute-update/' + attributeId);
                // Show Bootstrap modal
                var modal = new bootstrap.Modal(document.getElementById('editModal'));
                modal.show();
            },
            error: function(error) {
                console.log(error);
            }
        });
    });

    $('#attributeUpdateForm').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: function(response) {
                location.reload();
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
</script>