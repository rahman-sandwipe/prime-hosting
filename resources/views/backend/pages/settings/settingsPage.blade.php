@extends('backend.app')
@section('title', 'Site Settings')
@section('content')
<section>
    <div class="page-title-box">
        <div class="page-title-right">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboardPage') }}">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item active">{{ __('Settings') }}</li>
            </ol>
        </div>
        <h4 class="page-title">{{ __('Settings') }}</h4>
    </div>
</section>

<section>
    <div class="card">
        <div class="card-header">
            <h4 class="header-title">{{ __('Site Settings') }}</h4>
            <p class="text-muted font-14">
                {{ __('Manage your site settings here. Make sure to save changes after updating any settings.') }}
            </p>
        </div>
        <div class="card-body">
            @include('backend.components.settings.settingsForm')
        </div>
    </div>
</section>
@endsection