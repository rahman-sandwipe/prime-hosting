<!-- Edit Hosting Package Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Hosting Package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="packageUpdateForm">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="editPackageName" name="name" readonly>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" class="form-control" id="editPackageDescription" name="description" rows="3"></textarea>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label>Price (Monthly)</label>
                            <input type="number" class="form-control" id="editPackagePriceMonthly" step="0.01" name="price_monthly" required>
                        </div>

                        <div class="form-group col-6">
                            <label>Price (Yearly)</label>
                            <input type="number" class="form-control" id="editPackagePriceYearly" step="0.01" name="price_yearly" required>
                        </div>

                        <div class="form-group col-6">
                            <label>Support Type</label>
                            <input type="text" class="form-control" id="editPackageSupportType" name="support_type" required>
                        </div>
                        <div class="form-group col-6">
                            <label>Disk Space</label>
                            <input type="text" class="form-control" id="editPackageDiskSpace" name="disk_space" required>
                        </div>

                        <div class="form-group col-4">
                            <label>Bandwidth</label>
                            <input type="text" class="form-control" id="editPackageBandwidth" name="bandwidth" required>
                        </div>

                        <div class="form-group col-4">
                            <label>Addon Domains</label>
                            <input type="number" class="form-control" id="editPackageAddonDomains" name="addon_domains" required>
                        </div>

                        <div class="form-group col-4">
                            <label>Email Accounts</label>
                            <input type="number" class="form-control" id="editPackageEmailAccounts" name="email_accounts" required>
                        </div>
                        <div class="form-group col-6">
                            <label for="status"> Status</label>
                            <select class="form-control" id="editPackageStatus" name="status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="editSelectAttributes">Attributes</label>
                           <select class="form-control selectAttributes" id="editSelectAttributes" name="attribute_id" required>
                                <!-- Options will be appended here -->
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
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
                $('.selectAttributes').html(options);
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
</script>
<script>
    $(document).on('click', '.edit-package', function() {
        var packageId = $(this).data('id');
        $.ajax({
            url: '/admin/package-modify/' + packageId,
            type: 'GET',
            success: function(response) {
                let ePackage = response.ePackage;
    
                $('#editPackageName').val(ePackage.name || 'N/A');
                $('#editPackageDescription').val(ePackage.description || 'N/A');
                $('#editPackagePriceMonthly').val(ePackage.price_monthly || 'N/A');
                $('#editPackagePriceYearly').val(ePackage.price_yearly || 'N/A');
                $('#editPackageSupportType').val(ePackage.support_type || 'N/A');
                $('#editPackageDiskSpace').val(ePackage.disk_space || 'N/A');
                $('#editPackageBandwidth').val(ePackage.bandwidth || 'N/A');
                $('#editPackageAddonDomains').val(ePackage.addon_domains || 'N/A');
                $('#editPackageEmailAccounts').val(ePackage.email_accounts || 'N/A');
                $('#editPackageStatus').val(ePackage.status || 'N/A').change();
                $('#editSelectAttributes').val(ePackage.attribute_id || 'N/A').change();
                
                // Update the form action package
                $('#packageUpdateForm').attr('action', '/admin/package-update/' + packageId);
                // Show Bootstrap modal
                var modal = new bootstrap.Modal(document.getElementById('editModal'));
                modal.show();
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
</script>
<script>
    $('#packageUpdateForm').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: function(response) {
                toastr.success('Package updated successfully!', 'Success');
                $('#editModal').modal('hide');
                location.reload();
            },
            error: function(error) {
                toastr.error('Something went wrong!', 'Error');
                console.log(error);
            }
        });
    });
</script>