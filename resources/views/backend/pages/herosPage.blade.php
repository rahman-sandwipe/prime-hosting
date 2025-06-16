@extends('backend.app')
@section('title', 'Hero Section')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboardPage') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Hero Section</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Hero Section</h4>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Hero Section</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pagesUpdate') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Hidden Input to identify the section -->
                                <input type="hidden" name="hero-section" value="1">

                                <!-- Title Input -->
                                <div class="form-group">
                                    <label for="inputTitle">Title</label>
                                    <input type="text" id="inputTitle" class="form-control" name="title">
                                </div>

                                <!-- Description Input -->
                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea rows="3" id="inputDescription" class="form-control" name="description"></textarea>
                                </div>

                                <!-- Register Api Input -->
                                <div class="form-group">
                                    <label for="registerApi">Register Api</label>
                                    <input type="text" id="registerApi" class="form-control" name="register_api">
                                </div>

                                <!-- Transfer Api Input -->
                                <div class="form-group">
                                    <label for="transferApi">Transfer Api</label>
                                    <input type="text" id="transferApi" class="form-control" name="transfer_api">
                                </div>

                                <!-- IMG Preview -->
                                <div class="form-group">
                                    <div class="img-preview">
                                        <!-- Placeholder for image preview -->
                                    </div>
                                </div>

                                <!-- Hero Image Input -->
                                <div class="form-group">
                                    <label for="heroImage">Hero Image</label>
                                    <input type="file" class="form-control" id="heroImage" name="image">
                                </div>

                                <!-- Button to submit the form -->
                                <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#heroImage').on('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('.img-preview').html(`<img src="${e.target.result}" width="100" height="100">`);
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            // Initialize the form with existing data
            $('#inputTitle').val('{{ $data->title ?? "N/A" }}');
            $('#inputDescription').val('{{ $data->description ?? "N/A" }}');
            $('#registerApi').val('{{ $data->register_api ?? "N/A" }}');
            $('#transferApi').val('{{ $data->transfer_api ?? "N/A" }}');
            $('.img-preview').html(`<img src="{{ $data->image ?? asset('images/partials/default.jpg') }}" width="100" height="100">`);
        });
    </script>
@endsection
