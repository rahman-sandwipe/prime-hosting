
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="header-title">{{ __('Attributes') }}</h4>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">Add Attribute</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="attributeList">
                                <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Slug</th>
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
            url: '/admin/attribute-list',
            method: 'GET',
            success: function(response) {
                let rows = '';
                response.attributes.forEach(function(attr, index) {
                    // Format ID as 4-digit with leading zeros
                    let formattedId = attr.id.toString().padStart(4, '0');
                    rows += `<tr>
                        <td>${index + 1}</td>
                        <td>${formattedId}</td>
                        <td>${attr.attribute_name}</td>
                        <td>${attr.attribute_slug}</td>
                        <td class="text-center" width="180">
                            <button class="btn btn-primary btn-sm details-attribute" data-id="${attr.id}">
                                <i class="fas fa-eye"></i>    
                            </button>
                            <button class="btn btn-primary btn-sm edit-attribute" data-id="${attr.id}">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-danger btn-sm delete-attribute" data-id="${attr.id}">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>`;
                });
                $('#attributeList tbody').html(rows);
            },
            error: function(err) {
                alert('Error fetching attributes');
                console.error(err);
            }
        });
    });
</script>
