@extends('backend.app')
@section('title', 'Mail Configurations')
@section('content')
<section>
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboardPage') }}">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="breadcrumb-item active">{{ __('Mail Configurations') }}</li>
                </ol>
            </div>
            <h4 class="page-title">{{ __('Mail Configurations') }}</h4>
        </div>
    </div>
</section>

<section>
    <div class="card">
        <div class="card-header">
            <h4 class="header-title">{{ __('Mail Configurations') }}</h4>
            <p class="text-muted font-14">
                {{ __('Manage your mail configurations here. Make sure to save changes after updating any configuration.') }}
            </p>
        </div>

        <div class="card-body">
            @include('backend.components.settings.mailConfigsForm')
        </div>
    </div>
</section>
@endsection