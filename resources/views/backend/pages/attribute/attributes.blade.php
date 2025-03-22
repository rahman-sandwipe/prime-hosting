@extends('backend.app')

@section('title', ' Attributes')

@section('content')
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                            </li>
                            <li class="breadcrumb-item active">{{ __('Attributes') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('Attributes') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title --> 
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="header-title">{{ __('Attributes') }}</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('insertAttributePage') }}" class="btn btn-primary float-right">{{ __('Add New') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-centered mb-0" id="btn-editable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Created & Updated</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            
                                <tbody id="getAttribute">
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
<!-- end content -->
@include('components.backend.attribute.update-attribute')
@endsection
@section('scripts')
<script>
    $(document).ready(function () {
        fetchAttributes();

        function fetchAttributes() {
            $.ajax({
                url: "{{ route('getAttributes') }}",
                type: "GET",
                dataType: "json",
                success: function (response) {
                    let rows = '';
                    response.forEach((attribute, index) => {
                        rows += `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${attribute.attribute_name}</td>
                                <td>${attribute.attribute_slug}</td>
                                <td>${new Date(attribute.created_at).toLocaleString()} <br> ${new Date(attribute.updated_at).toLocaleString()}</td>
                                <td>
                                    <button data-id="${attribute.id}" class="btn editBtn btn-sm btn-success">Edit</button>
                                    <button class="btn btn-sm btn-danger delete-btn" data-id="${attribute.id}">Delete</button>
                                </td>
                            </tr>`;
                    });
                    $("#getAttribute").html(rows);
                },
                error: function (error) {
                    console.log("Error fetching data:", error);
                }
            });
        }
    });
</script>
@endsection