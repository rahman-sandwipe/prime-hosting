@extends('backend.app')
@section('title', 'Contact Information')
@section('content')
<section>
    <div class="page-title-box">
        <div class="page-title-right">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboardPage') }}">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item active">{{ __('Contact Information') }}</li>
            </ol>
        </div>
        <h4 class="page-title">{{ __('Contact Information') }}</h4>
    </div>
</section>

<section>
    <div class="card">
        <div class="card-header">
            <h4 class="header-title">{{ __('Contact Information') }}</h4>
            <p class="text-muted font-14">
                {{ __('Manage your contact information here. Make sure to save changes after updating any information.') }}
            </p>
        </div>
        <div class="card-body">
            @include('backend.components.settings.contactInfosForm')
        </div>
    </div>
</section>
@endsection