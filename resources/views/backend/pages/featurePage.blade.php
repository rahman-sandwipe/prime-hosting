@extends('backend.app')
@section('title', 'Feature Management')
@section('content')
    <div class="content">
        <div class="container-fluid">
            @include('backend.components.features.featureTitle')
            @include('backend.components.features.featureLists')
            @include('backend.components.features.featureDetails')
            @include('backend.components.features.featureAdd')
            @include('backend.components.features.featureModify')
            @include('backend.components.features.featureDelete')
        </div>
    </div>
@endsection
