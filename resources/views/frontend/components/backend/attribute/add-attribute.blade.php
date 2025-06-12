<!-- Edit Attribute Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Edit Attribute</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateAttributeForm">
                    @csrf
                    <input type="hidden" id="attribute_id" name="attribute_id">

                    <div class="form-group">
                        <label for="edit_attribute_name">Attribute Name</label>
                        <input type="text" class="form-control" id="edit_attribute_name" name="attribute_name" required>
                    </div>

                    <div class="form-group">
                        <label for="edit_attribute_value">Attribute Value</label>
                        <input type="text" class="form-control" id="edit_attribute_value" name="attribute_value" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
