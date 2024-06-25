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
                    <div class="box-body">
                        <h3 class="text-success">
                            Welcome to POS Installation!
                        </h3>

                        <a href="#" class="silent-install btn btn-primary pull-left">Slinent install</a>
                        <a href="{{ route('install.custom-install') }}" class="btn btn-primary pull-right">Custom install</a>
                        <br>
                        <br>
                        <div class="col-md-6 pull-left">
                            <form action="{{ route('install.silent-install') }}" method="POST">
                                @csrf
                                <div class="app_name_input_div hide">
                                    <div class="form-group">
                                        <label for="APP_NAME">Application name*</label>
                                        <input type="text" class="form-control app_name_input " id="APP_NAME"
                                            name="APP_NAME" required disabled>

                                    </div>
                                    <button type="submit" class="btn btn-warning pull-left">Install
                                        now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script>
        $(document).ready(function() {
            $('.silent-install').on('click', function(e) {
                e.preventDefault();
                $('.app_name_input_div').removeClass('hide');
                $('.app_name_input').attr('disabled', false);
            })
        });
    </script>
@endpush
