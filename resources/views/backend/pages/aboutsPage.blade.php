@extends('backend.app')
@section('title', 'Abouts Section')
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
                                <li class="breadcrumb-item active">Abouts Section</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Abouts Section</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Abouts Section</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pagesUpdate') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Hidden Input to identify the section -->
                                <input type="hidden" name="about-section" value="1">

                                <!-- Title Input -->
                                <div class="form-group mb-3">
                                    <label for="inputTitle">Title</label>
                                    <input type="text" id="inputTitle" class="form-control" name="title">
                                </div>

                                <!-- Subtitle Input -->
                                <div class="form-group mb-3">
                                    <label for="inputSubtitle">Subtitle</label>
                                    <input type="text" id="inputSubtitle" class="form-control" name="subtitle">
                                </div>

                                <!-- Description Input -->
                                <div class="form-group mb-3">
                                    <label for="inputDescription">Description</label>
                                    <textarea rows="3" class="form-control" id="inputDescription" name="description"></textarea>
                                </div>

                                <!-- Register Users Input -->
                                <div class="form-group mb-3">
                                    <label for="inputRegister">Register Users</label>
                                    <input type="number" id="inputRegister" class="form-control" name="register_users">
                                </div>

                                <!-- Current Hosted Input -->
                                <div class="form-group mb-3">
                                    <label for="inputHosted">Current Hosted</label>
                                    <input type="number" id="inputHosted" class="form-control" name="current_hosted">
                                </div>

                                <!-- ImageOne Input -->
                                <div class="form-group row mb-3">
                                    <div class="col-10">
                                        <label for="inputImageOne">Image One</label>
                                        <input type="file" id="inputImageOne" class="form-control" name="image1" accept="image/*">
                                    </div>
                                    <div class="col-2">
                                        <div class="img-preview inputImageOne">
                                            <!-- Default image or existing image will be shown here -->
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- ImageTwo Input -->
                                <div class="form-group row mb-3">
                                    <div class="col-10">
                                        <label for="inputImageTwo">Image Two</label>
                                        <input type="file" id="inputImageTwo" class="form-control" name="image2" accept="image/*">
                                    </div>
                                    <div class="col-2">
                                        <div class="img-preview inputImageTwo">
                                            <!-- Default image or existing image will be shown here -->
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Image preview functionality
        $('#inputImageOne').on('change', function () {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.inputImageOne').html(`<img src="${e.target.result}" width="100" height="100">`);
            };
            reader.readAsDataURL(this.files[0]);
        });

        $('#inputImageTwo').on('change', function () {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.inputImageTwo').html(`<img src="${e.target.result}" width="100" height="100">`);
            };
            reader.readAsDataURL(this.files[0]);
        });
    </script>
    <script>
        $(document).ready(function() {
            // Initialize the form with existing data
            $('#inputTitle').val('{{ $data->title ?? "N/A" }}');
            $('#inputSubtitle').val('{{ $data->subtitle ?? "N/A" }}');
            $('#inputDescription').val('{{ $data->description ?? "N/A" }}');
            $('#inputRegister').val('{{ $data->register_users ?? "N/A" }}');
            $('#inputHosted').val('{{ $data->current_hosted ?? "N/A" }}');
            $('.inputImageOne').html(`<img src="{{ $data->image1 ?? asset('images/partials/default.jpg') }}" width="100" height="100">`);
            $('.inputImageTwo').html(`<img src="{{ $data->image2 ?? asset('images/partials/default.jpg') }}" width="100" height="100">`);
        });
    </script>
@endsection
