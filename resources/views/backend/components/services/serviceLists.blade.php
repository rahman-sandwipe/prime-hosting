
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="header-title">{{ __('Services') }}</h4>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Add New</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="serviceList">
                                <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Link</th>
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
    $(document).ready(function() {
        $.ajax({
            url: '/admin/service-list',
            method: 'GET',
            success: function(response) {
                let rows = '';
                response.services.forEach(function(attr, index) {
                    // Format ID as 4-digit with leading zeros
                    let formattedId = attr.id.toString().padStart(4, '0');
                    rows += `<tr>
                        <td>${index + 1}</td>
                        <td>${formattedId}</td>
                        <td>${attr.t}</td>
                        <td>${attr.service_slug}</td>
                        <td class="text-center" width="180">
                            <button class="btn btn-primary btn-sm details-service" data-id="${attr.id}">
                                <i class="fas fa-eye"></i>    
                            </button>
                            <button class="btn btn-primary btn-sm edit-service" data-id="${attr.id}">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-danger btn-sm delete-service" data-id="${attr.id}">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>`;
                });
                $('#serviceList tbody').html(rows);
            },
            error: function(err) {
                alert('Error fetching services');
                console.error(err);
            }
        });
    });
</script>
