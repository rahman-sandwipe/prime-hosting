<!-- Add Hosting Package Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add Hosting Package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="hostingPackageForm">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="eg: Hosting Package" required>
                    </div>

                    <div class="form-group">
                        <label>Card Api</label>
                        <input type="text" class="form-control" name="card_api" placeholder="eg: www.https://example.com" required>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" placeholder="eg: Description" rows="3"></textarea>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label>Price (Monthly)</label>
                            <input type="number" step="0.01" class="form-control" name="price_monthly" placeholder="eg: 100" required>
                        </div>

                        <div class="form-group col-6">
                            <label>Price (Yearly)</label>
                            <input type="number" step="0.01" class="form-control" name="price_yearly" placeholder="eg: 100" required>
                        </div>

                        <div class="form-group col-6">
                            <label>Support Type</label>
                            <input type="text" class="form-control" name="support_type" placeholder="eg: 24/7" required>
                        </div>
                        <div class="form-group col-6">
                            <label>Disk Space</label>
                            <input type="text" class="form-control" name="disk_space" placeholder="eg: 10GB" required>
                        </div>

                        <div class="form-group col-4">
                            <label>Bandwidth</label>
                            <input type="text" class="form-control" name="bandwidth" placeholder="eg: 1GB" required>
                        </div>

                        <div class="form-group col-4">
                            <label>Addon Domains</label>
                            <input type="number" class="form-control" name="addon_domains" placeholder="eg: 5" required>
                        </div>

                        <div class="form-group col-4">
                            <label>Email Accounts</label>
                            <input type="number" class="form-control" name="email_accounts" placeholder="eg: 5" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="status"> Status</label>
                            <select class="form-control" name="status" required>
                                <option value="" selected disabled>-- Select Status --</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="selectAttributes">Attributes</label>
                           <select class="form-control" id="selectAttributes" name="attribute_id" required>
                                <!-- Options will be appended here -->
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">INSERT</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $.ajax({
            url: '/admin/attribute-list',
            method: 'GET',
            success: function(response) {
                let options = '<option value="">-- Select Attribute --</option>';
                response.attributes.forEach(function(attr, index) {
                    // Format ID to 6-digit (e.g., 000001)
                    let formattedId = attr.id.toString().padStart(6, '0');
                    options += `<option value="${attr.id}">${attr.attribute_name}</option>`;
                });
                $('#selectAttributes').html(options);
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
    $('#hostingPackageForm').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: '/admin/package-insert',
            type: 'POST',
            data: $(this).serialize(),
            success: function (res) {
                toastr.success(res.message);
                $('#addModal').modal('hide');
                setTimeout(() => location.reload(), 1000);
            },
            error: function (err) {
                if (err.responseJSON && err.responseJSON.errors) {
                    $.each(err.responseJSON.errors, function (key, val) {
                        toastr.error(val[0]);
                    });
                } else {
                    toastr.error('Something went wrong!');
                }
            }
        });
    });
</script>