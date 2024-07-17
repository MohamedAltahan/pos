@extends('admin.layouts.master')
@section('title', __('Invoice setting'))
@section('content')
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5>{{ __('Invoice') }}</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="">{{ __('Setting') }}</a></li>
                        <li class="breadcrumb-item"><a href="">{{ __('Invoice') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    {{-- @livewire('admin.settings.invoice.invoice-component') --}}

@endsection
