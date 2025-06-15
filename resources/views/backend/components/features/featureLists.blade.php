
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="header-title">{{ __('Features') }}</h4>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Add New</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="featureList">
                                <thead>
                                    <tr>
                                        <th>#SL / ID</th>
                                        <th>IMG Icon</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th class="text-center" width="180">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data will be loaded here -->
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        fetchFeatureList();
    });

    function fetchFeatureList() {
        $.ajax({
            url: '/admin/feature-list',
            method: 'GET',
            dataType: 'json',
            success: function (response) {
                let rows = '';
                if (response.features.length > 0) {
                    response.features.forEach(function (feature, index) {
                        rows += `<tr>
                            <td>${index + 1}</td>
                            <td><img src="${feature.icon}" alt="${feature.name}" width="60" height="60" style="object-fit:contain;"></td>
                            <td>${escapeHtml(feature.name)}</td>
                            <td>${feature.description ? escapeHtml(feature.description) : '<span class="text-muted">N/A</span>'}</td>
                            <td class="text-center">
                                <button class="btn btn-primary btn-sm details-feature" data-id="${feature.id}">
                                    <i class="fas fa-eye"></i>    
                                </button>
                                <button class="btn btn-info btn-sm edit-feature" data-id="${feature.id}">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger btn-sm delete-feature" data-id="${feature.id}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>`;
                    });
                } else {
                    rows = `<tr><td colspan="5" class="text-center text-muted">No features found.</td></tr>`;
                }
                $('#featureList tbody').html(rows);
            },
            error: function (err) {
                toastr.error('Failed to fetch features.');
                console.error(err);
            }
        });
    }

    // Helper function to safely escape HTML
    function escapeHtml(text) {
        return $('<div>').text(text).html();
    }
</script>
