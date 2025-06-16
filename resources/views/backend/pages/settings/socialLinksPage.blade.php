@extends('backend.app')
@section('title', 'Social Medias')
@section('content')
<section>
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboardPage') }}">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="breadcrumb-item active">{{ __('Social Medias') }}</li>
                </ol>
            </div>
            <h4 class="page-title">{{ __('Social Medias') }}</h4>
        </div>
    </div>
</section>
<section>
    <div class="card">
        <div class="card-header">
            <h4 class="header-title">{{ __('Social Medias') }}</h4>
            <p class="text-muted font-14">
                {{ __('Configure your social media links here.') }}
            </p>
       </div>
        <div class="card-body">
            @include('backend.components.settings.socialLinksForm')
        </div>
    </div>
</section>
@endsection