@extends('backend.app')
@section('title', 'Support Section')
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
                                <li class="breadcrumb-item active">Support Section</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Support Section</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Support Section</h4>
                        </div>
                        <div class="card-body">
                            <form href="{{ route('pagesUpdate') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="support-section" value="1">
                                <!-- Title Input -->
                                <div class="form-group">
                                    <label for="inputTitle">Title</label>
                                    <input type="text" class="form-control" id="inputTitle" name="title" placeholder="eg: Title">
                                </div>

                                <!-- Description Input -->
                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea rows="3" class="form-control" id="inputDescription" name="description" placeholder="eg: Description"></textarea>
                                </div>

                                <!-- Phone Input -->
                                <div class="form-group">
                                    <label for="phoneNumber">Contact Number</label>
                                    <input type="number" class="form-control" id="phoneNumber" name="phone" placeholder="eg: 1234567890">
                                </div>

                                <!-- Email Input -->
                                <div class="form-group">
                                    <label for="contactEmail">Contact Email</label>
                                    <input type="email" class="form-control" id="contactEmail" name="email" placeholder="eg: webname@example.com">
                                </div>

                                <!-- Live chat Input -->
                                <div class="form-group">
                                    <label for="liveChat">Live Chat</label>
                                    <input type="text" class="form-control" id="liveChat" name="live_chat_api" placeholder="eg: Live Chat API">
                                </div>

                                <!-- Contact Form Input -->
                                <div class="form-group">
                                    <label for="contactForm">Contact Form</label>
                                    <input type="text" class="form-control" id="contactForm" name="contact_form_api" placeholder="eg: Contact Form API">
                                </div>

                                <!-- Image Preview -->
                                <div class="form-group">
                                    <div class="img-preview">
                                        <!-- Default image or existing image will be shown here -->
                                    </div>
                                </div>

                                <!-- Image Input -->
                                <div class="form-group">
                                    <label for="inputImage">Image</label>
                                    <input type="file" class="form-control" id="inputImage" name="image" accept="image/*">
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group">
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
        $('#inputImage').on('change', function () {
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
        // Set a value for the data-preview
        $(document).ready(function() {
            // Initialize the form with existing data
            $('#inputTitle').val('{{ $data->title ?? "N/A" }}');
            $('#inputDescription').val('{{ $data->description ?? "N/A" }}');
            $('#phoneNumber').val('{{ $data->phone ?? "N/A" }}');
            $('#contactEmail').val('{{ $data->email ?? "N/A" }}');
            $('#liveChat').val('{{ $data->live_chat_api ?? "N/A" }}');
            $('#contactForm').val('{{ $data->contact_form_api ?? "N/A" }}');
            $('.img-preview').html(`<img src="{{ $data->image ?? asset('images/partials/default.jpg') }}" width="100" height="100">`);
        });
    </script>
@endsection
