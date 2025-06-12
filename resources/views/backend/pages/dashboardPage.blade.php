@extends('backend.app')
@section('title', 'Dashboard')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include('backend.components.dashboard.dashboard-page-title')   
        @include('backend.components.dashboard.dashboard-data-counter')
    </div>
</div>
@endsection