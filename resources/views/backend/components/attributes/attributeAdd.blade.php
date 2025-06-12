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
                <form id="addAttributeForm" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="addAttrName">Attribute Name</label>
                        <input type="text" class="form-control" id="addAttrName" name="attribute_name" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">INSERT ATTRIBUTE</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#addAttributeForm').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: '/admin/attribute-insert',
                type: 'POST',
                data: formData,
                success: function(response) {
                    $('#addModal').modal('hide');
                    location.reload();
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    });
</script>