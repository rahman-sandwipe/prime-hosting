@extends('backend.app')
@section('title', 'Users')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include('backend.components.users.userTitle')   
        @include('backend.components.users.userLists')
        @include('backend.components.users.userDetails')
        @include('backend.components.users.userAdd')
        @include('backend.components.users.userModify')
        @include('backend.components.users.userDelete')
    </div>
</div>
@endsection