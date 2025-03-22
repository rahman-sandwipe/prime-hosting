@extends('backend.app')

@section('title', ' Categories')

@section('content')
<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                            </li>
                            <li class="breadcrumb-item active">{{ __('Categories') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('Categories') }}</h4>
                </div>
            </div>
        </div>
        <!-- end page title --> 
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="header-title">{{ __('Categories') }}</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('insertAttribute') }}" class="btn btn-primary float-right">{{ __('Add New') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-centered mb-0" id="btn-editable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Created & Updated</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Name</td>
                                        <td>Slug</td>
                                        <td>Date</td>
                                        <td>Action</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
        
    </div><!-- end container-fluid -->
</div>
@endsection