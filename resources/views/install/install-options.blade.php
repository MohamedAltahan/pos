@extends('install.layouts.master', ['no_header' => 1])
@section('title', 'Welcome - POS Installation')

@section('content')
    <div class="container">

        <div class="row">
            <h3 class="text-center">{{ config('app.name', 'POS') }} Installation <small>Step 1 of 3</small></h3>

            <div class="col-md-8 col-md-offset-2">
                <hr />
                @include('install.layouts.partials.nav', ['active' => 'install'])

                <div class="box box-primary active">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <h3 class="text-success">
                            Welcome to POS Installation!
                        </h3>

                        <a href="{{ route('install.silent-install') }}" class="btn btn-primary pull-left">Slinent install</a>
                        <a href="{{ route('install.custom-install') }}" class="btn btn-primary pull-right">Custom install</a>
                    </div>

                    <!-- /.box-body -->
                </div>

            </div>

        </div>
    </div>
@endsection
