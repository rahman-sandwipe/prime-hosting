@extends('backend.app')
@section('title', 'SEO (Search Engine Optimization) Settings')
@section('content')
<section>
    <div class="page-title-box">
        <div class="page-title-right">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboardPage') }}">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item active">{{ __('SEO (Search Engine Optimization) Settings') }}</li>
            </ol>
        </div>
        <h4 class="page-title">{{ __('SEO Settings') }}</h4>
    </div>
</section>
<section class="mb-4">
    <div class="card">
        <div class="card-header">
            <h4 class="header-title">{{ __('SEO Settings') }}</h4>
            <p class="text-muted font-14">
                {{ __('Configure your SEO settings to improve your website\'s visibility on search engines.') }}
            </p>
        </div>
        <div class="card-body">
            @include('backend.components.settings.seoSettingsForm')
        </div>
    </div>
</section>
@endsection