@extends('backend.app')
@section('title', 'Orders')
@section('content')

<div class="content">
    <div class="container-fluid">
        @include('backend.components.orders.orderTitle')   
        @include('backend.components.orders.orderLists')
        @include('backend.components.orders.orderDetails')
        @include('backend.components.orders.orderAdd')
        @include('backend.components.orders.orderModify')
        @include('backend.components.orders.orderDelete')
    </div>
</div>
@endsection