@extends('backend.app')

@section('title', 'Dashboard')

@section('content')
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        @include('components.backend.dashboard.dashboard-page-title')   
        <!-- end page title --> 
        
        <!-- start data counter -->
        @include('components.backend.dashboard.dashboard-data-counter')
        <!-- end data counter --> 
        
    </div><!-- end container-fluid -->
</div>
@endsection