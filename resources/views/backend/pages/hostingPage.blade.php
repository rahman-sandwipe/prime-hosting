@extends('backend.app')
@section('title', 'Hosting Packages')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include('backend.components.packages.packageTitle')   
        @include('backend.components.packages.packageLists')
        @include('backend.components.packages.packageDetails')
        @include('backend.components.packages.packageAdd')
        @include('backend.components.packages.packageModify')
        @include('backend.components.packages.packageDelete')
    </div>
</div>
@endsection