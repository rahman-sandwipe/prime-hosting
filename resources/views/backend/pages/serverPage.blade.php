@extends('backend.app')
@section('title', 'Servers')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include('backend.components.servers.serverTitle')
        @include('backend.components.servers.serverLists')
        @include('backend.components.servers.serverDetails')
        @include('backend.components.servers.serverAdd')
        @include('backend.components.servers.serverModify')
        @include('backend.components.servers.serverDelete')
    </div>
</div>
@endsection