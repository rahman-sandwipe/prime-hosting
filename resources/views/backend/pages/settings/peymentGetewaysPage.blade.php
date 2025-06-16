@extends('backend.app')
@section('title', 'Payment Gateways')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboardPage') }}">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="breadcrumb-item active">{{ __('Payment Gateways') }}</li>
                </ol>
            </div>
            <h4 class="page-title">{{ __('Payment Gateways') }}</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">{{ __('Payment Gateways') }}</h4>
                <p class="text-muted font-14">
                    {{ __('Manage your payment gateways here. Make sure to save changes after updating any configuration.') }}
                </p>
            </div>
            <div class="card-body">
                <form action="{{ route('settingsUpdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Peyment Geteway Hidden input -->
                    <input type="hidden" name="payment-gateways" value="1">

                    <!-- Peyment Geteway Name -->
                    <div class="form-group">
                        <label for="GetewayName">{{ __('Geteway Name') }}</label>
                        <input type="text" id="GetewayName" class="form-control" name="name">
                    </div>

                    <!-- Peyment Geteway Logo -->
                    <div class="form-group row">
                        <div class="col-md-10">
                            <label for="getewayLogo">{{ __('Geteway Logo') }}</label>
                            <input type="file" id="getewayLogo" class="form-control"name="logo">
                        </div>
                        <div class="col-md-2">
                            <div class="img-preview2" style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                                <img id="logoPreview" src="{{ asset('images/partials/default2.jpg') }}" alt="Logo Preview" class="img-fluid" width="100" height="50">
                            </div>
                        </div>
                    </div>    
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">{{ __('Payment Gateways List') }}</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('SL') }}
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Logo') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($geteways->isEmpty())
                        <tr>
                            <td colspan="3" class="text-center">{{ __('No payment gateways found.') }}</td>
                        </tr>
                        @else
                            @foreach($geteways as $gateway)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $gateway->name }}</td>
                                <td><img src="{{ asset($gateway->logo) }}" alt="{{ $gateway->name }}" width="50"></td>
                                <td>
                                    <!-- Actions can be added here -->
                                    <a href="#" class="btn btn-sm btn-primary">{{ __('Edit') }}</a>
                                    <a href="#" class="btn btn-sm btn-danger">{{ __('Delete') }}</a>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        const defaultLogo = 'images/partials/default2.jpg'; // ডিফল্ট ইমেজের লোকেশন
        $('#getewayLogo').on('change', function () {
            const file = this.files[0];
            const $preview = $('#logoPreview');
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $preview.attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            } else {
                // যদি ফাইল না থাকে, ডিফল্ট ইমেজ দেখানো হবে
                $preview.attr('src', defaultLogo);
            }
        });
    });
</script>
@endsection