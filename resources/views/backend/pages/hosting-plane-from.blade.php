@extends('backend.app')
@section('title', 'Hosting Plane Insert')
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
                            <li class="breadcrumb-item active">{{ __('Insert New Plane') }}</li>
                        </ol>
                    </div>
                    <h4 class="page-title">{{ __('Insert New Plane') }}</h4>
                </div>
            </div>
        </div>  
        <!-- end page title --> 

        <div class="row">
            <div class="col-sm-12">

                <div class="card-box">
                    <h4 class="header-title">Insert New Hosting Plane</h4>
                    
                    <form action="{{ route('HostingPlaneStore') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="plan_name">Plan Name</label>
                            <input type="text" name="plan_name" id="plan_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="plane_category">Plane Category</label>
                            <select name="plane_category" id="plane_category" class="form-control" required>
                                <option value="" selected deselected>Chooce One</option>
                                <option value="Cloud Hosting">Cloud Hosting</option>
                                <option value="Shared Hosting">Shared Hosting</option>
                                <option value="Reseller Hosting">Reseller Hosting</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" step="0.01" name="price" id="price" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="disk_space">Disk Space</label>
                            <input type="text" name="disk_space" id="disk_space" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="bandwidth">Bandwidth</label>
                            <input type="text" name="bandwidth" id="bandwidth" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="domains_allowed">Domains Allowed</label>
                            <input type="number" name="domains_allowed" id="domains_allowed" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="subdomains_allowed">Subdomains Allowed</label>
                            <input type="number" name="subdomains_allowed" id="subdomains_allowed" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email_accounts">Email Accounts</label>
                            <input type="number" name="email_accounts" id="email_accounts" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="ftp_accounts">FTP Accounts</label>
                            <input type="number" name="ftp_accounts" id="ftp_accounts" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="database_limit">Database Limit</label>
                            <input type="number" name="database_limit" id="database_limit" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="ssl_certificate">SSL Certificate</label>
                            <select name="ssl_certificate" id="ssl_certificate" class="form-control" required>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>

            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container-fluid -->
</div>
@endsection