@extends('backend.app')
@section('title', 'Services')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include('backend.components.services.serviceTitle')   
        @include('backend.components.services.serviceLists')
        @include('backend.components.services.serviceDetails')
        @include('backend.components.services.serviceAdd')
        @include('backend.components.services.serviceModify')
        @include('backend.components.services.serviceDelete')
    </div>
</div>
@endsection