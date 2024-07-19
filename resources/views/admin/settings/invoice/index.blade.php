@extends('admin.layouts.master')
@section('title', __('Invoice setting'))
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="">{{ __('Setting') }}</a></li>
    <li class="breadcrumb-item"><a href="">{{ __('Invoice') }}</a></li>
@endsection
@section('content')

    @livewire('admin.settings.invoice.invoice-component')

@endsection
