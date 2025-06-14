<!-- Details Attribute Modal -->
<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsModalLabel">Details Package</h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row border p-1">
                        <div class="col-4">Package ID</div>
                        <div class="col-8" id="packageId"></div>
                    </div>
                    <div class="row border p-1">
                        <div class="col-4">Package Name</div>
                        <div class="col-8" id="packageName"></div>
                    </div>
                    <div class="row border p-1">
                        <div class="col-4">Package Slug</div>
                        <div class="col-8" id="packageSlug"></div>
                    </div>
                    <div class="row border p-1">
                        <div class="col-4">Package Attribute</div>
                        <div class="col-8" id="packageAttribute"></div>
                    </div>
                    <div class="row border p-1">
                        <div class="col-4">Manthly Price</div>
                        <div class="col-8" id="manthlyPackagePrice"></div>
                    </div>
                    <div class="row border p-1">
                        <div class="col-4">Yearly Price</div>
                        <div class="col-8" id="yearlyPackagePrice"></div>
                    </div>
                    <div class="row border p-1">
                        <div class="col-4">Support Type</div>
                        <div class="col-8" id="supportType"></div>
                    </div>
                    <div class="row border p-1">
                        <div class="col-4">Disk Space</div>
                        <div class="col-8" id="packageDisk"></div>
                    </div>
                    <div class="row border p-1">
                        <div class="col-4">Bandwidth</div>
                        <div class="col-8" id="packageBandwidth"></div>
                    </div>
                    <div class="row border p-1">
                        <div class="col-4">Addon Domains</div>
                        <div class="col-8">
                            <span id="packageAddon"></span>
                            <span>Domains</span>
                        </div>
                    </div>
                    <div class="row border p-1">
                        <div class="col-4">Email Accounts</div>
                        <div class="col-8">
                            <span id="packageEmail"></span>
                            <span>Emails</span>
                        </div>
                    </div>
                    <div class="row border p-1">
                        <div class="col-4">Status</div>
                        <div class="col-8 text-capitalize" id="packageStatus"></div>
                    </div>
                    <div class="row border p-1">
                        <div class="col-4">Created At</div>
                        <div class="col-8" id="packageCreatedAt"></div>
                    </div>
                    <div class="row border p-1">
                        <div class="col-4">Updated At</div>
                        <div class="col-8" id="packageUpdatedAt"></div>
                    </div>
                    <div class="row border p-1">
                        <div class="col-4">Cart API Link</div>
                        <div class="col-8" id="cartApiLink"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-block btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('click', '.details-package', function() {
        var packageId = $(this).data('id');
        // alert(packageId);
        $.ajax({
            url: '/admin/package-details/' + packageId,
            method: 'GET',
            success: function(response) {
                var package = response.package;
                // Format ID as 6-digit with leading zeros (e.g., 000001)
                let formattedId = package.id.toString().padStart(6, '0');
                function formatDate(dateString) {
                    const date = new Date(dateString);
                    const options = {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: '2-digit'
                    };
                    return date.toLocaleString('en-US', options);
                    // Example: "Saturday, June 11, 2025"
                }
                // Set package data to modal fields
                $('#packageId').text(formattedId);
                $('#packageName').text(package.name);
                $('#cartApiLink').html(`<a href="${package.card_api}" target="_blank">Buy Now</a>`);
                $('#packageSlug').text(package.slug);
                $('#packageAttribute').text(package.attribute.attribute_name);
                $('#manthlyPackagePrice').text(package.price_monthly);
                $('#yearlyPackagePrice').text(package.price_yearly);
                $('#supportType').text(package.support_type || 'N/A');
                $('#packageDisk').text(package.disk_space || 'N/A');
                $('#packageBandwidth').text(package.bandwidth || 'N/A');
                $('#packageAddon').text(package.addon_domains || 'N/A');
                $('#packageEmail').text(package.email_accounts || 'N/A');
                $('#packageStatus').text(package.status);
                $('#packageCreatedAt').text(formatDate(package.created_at));
                $('#packageUpdatedAt').text(formatDate(package.updated_at));

                // Show Bootstrap modal
                var modal = new bootstrap.Modal(document.getElementById('detailsModal'));
                modal.show();
            },
            error: function(err) {
                alert('Failed to fetch attribute details.');
                console.error(err);
            }
        });
    });
</script>
