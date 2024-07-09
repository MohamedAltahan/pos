@extends('admin.auth.layout.master')
@section('content')
    <div class="text-center">
        <img src="{{ asset('dashboard/assets') }}/images/logo-dark.svg" alt="" class="img-fluid mb-4">
    </div>
    @livewire('admin.auth.login-component')
@endsection
