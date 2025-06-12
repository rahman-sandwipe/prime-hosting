@extends('backend.app')
@section('title', 'Attributes')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include('backend.components.attributes.attributeTitle')   
        @include('backend.components.attributes.attributeLists')
        @include('backend.components.attributes.attributeDetails')
        @include('backend.components.attributes.attributeAdd')
        @include('backend.components.attributes.attributeModify')
        @include('backend.components.attributes.attributeDelete')
    </div>
</div>
@endsection