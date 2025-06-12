
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="header-title">{{ __('Hosting Packages') }}</h4>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Add Package</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="packageList">
                                <thead>
                                    <tr>
                                        <th>#SL / ID</th>
                                        <th>Name</th>
                                        <th>Attribute</th>
                                        <th>Support Type</th>
                                        <th>Status</th>
                                        <th class="text-center" width="180">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data will be loaded here -->
                                </tbody>
                            </table>

                        </div> <!-- end .table-responsive-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
        
    </div><!-- end container-fluid -->
</div>
<script>
    $(document).ready(function() {
        $.ajax({
            url: '/admin/package-list',
            method: 'GET',
            success: function(response) {
                let rows = '';
                response.packages.forEach(function(package, index) {
                    // Format ID as 4-digit with leading zeros
                    let formattedId = package.id.toString().padStart(4, '0');
                    rows += `<tr>
                        <td>${index + 1} / ${formattedId}</td>
                        <td>${package.name}</td>
                        <td>${package.attribute.attribute_name}</td>
                        <td>${package.support_type || 'N/A'}</td>
                        <td class="text-capitalize">${package.status}</td>
                        <td class="text-center" width="180">
                            <button class="btn btn-primary btn-sm details-package" data-id="${package.id}">
                                <i class="fas fa-eye"></i>    
                            </button>
                            <button class="btn btn-primary btn-sm edit-package" data-id="${package.id}">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-danger btn-sm delete-package" data-id="${package.id}">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>`;
                });
                $('#packageList tbody').html(rows);
            },
            error: function(err) {
                alert('Error fetching hosting packages');
                console.error(err);
            }
        });
    });
</script>
