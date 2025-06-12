
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="header-title">{{ __('Users') }}</h4>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">
                                    <i class="fas fa-user-plus"></i>
                                    <span>{{ __('Add User') }}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="usersList">
                                <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Status</th>
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
            url: '/admin/user-list',
            method: 'GET',
            success: function(response) {
                let rows = '';
                response.users.forEach(function(user, index) {
                    // Format ID as 6-digit with leading zeros
                    let formattedId = user.id.toString().padStart(6, '0');
                    rows += `<tr>
                        <td>${index + 1}</td>
                        <td>${formattedId}</td>
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>${user.phone || 'N/A'}</td>
                        <td class="text-capitalize">${user.status}</td>
                        <td class="text-center" width="180">
                            <button class="btn btn-primary btn-sm details-user" data-id="${user.id}">
                                <i class="fas fa-eye"></i>    
                            </button>
                            <button class="btn btn-primary btn-sm edit-user" data-id="${user.id}">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-danger btn-sm delete-user" data-id="${user.id}">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>`;
                });
                $('#usersList tbody').html(rows);
            },
            error: function(err) {
                alert('Error fetching users');
                console.error(err);
            }
        });
    });
</script>
