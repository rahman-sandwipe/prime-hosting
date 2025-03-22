@extends('backend.app')

@section('title', 'Insert Attribute')

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
                            <li class="breadcrumb-item active">{{ __('Attributes') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('Attributes') }}</h4>
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
                                <h4 class="header-title">{{ __('Insert New') }}</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('getAttributes') }}" class="btn btn-primary float-right">{{ __('Return Attributes') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('storeAttribute') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="attribute_name">Attribute Name</label>
                                <input type="text" class="form-control @error('attribute_name') is-invalid @enderror" 
                                    id="attribute_name" name="attribute_name" 
                                    value="{{ old('attribute_name') }}" required>
                                <span class="font-13 text-muted">e.g "attribute name ..."</span>
                                @error('attribute_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <label for="attribute_slug">Attribute Value</label>
                                <input type="text" class="form-control @error('attribute_slug') is-invalid @enderror" 
                                    id="attribute_slug" name="attribute_slug" 
                                    value="{{ old('attribute_slug') }}" required>
                                <span class="font-13 text-muted">e.g "attribute value ..."</span>
                                @error('attribute_slug')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">{{ __('Submit') }}</button>
                            </div>
                        </form>
                        
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
        
    </div><!-- end container-fluid -->
</div>
@endsection