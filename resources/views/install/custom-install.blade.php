@extends('install.layouts.master', ['no_header' => 1])
@section('title', 'POS Installation')

@section('content')
    <div class="container">
        <div class="row">
            <h3 class="text-center">{{ config('app.name', 'POS') }} Installation <small>Step 2 of 3</small></h3>

            <div class="col-md-8 col-md-offset-2">
                <hr />
                @include('install.layouts.partials.nav', ['active' => 'app_details'])

                <div class="box box-primary active">
                    <!-- /.box-header -->
                    <div class="box-body">

                        @include('errors')

                        <form class="form" id="details_form" method="post" action="{{ route('install.save-instal-data') }}">
                            {{ csrf_field() }}

                            <h4>Application Details</h4>
                            <hr />

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="app_name">Application Name:*</label>
                                    <input type="text" class="form-control" name="APP_NAME" id="app_name"
                                        placeholder="Name" value="POS" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="app_name">Application URL:*</label>
                                    <input type="text" class="form-control" name="APP_URL" id="app_url"
                                        value="{{ url('/') }}" placeholder="Name" required>
                                </div>
                            </div>



                            <div class="clearfix"></div>

                            <h4> Database Details <small>Make sure to provide correct information</small></h4>
                            <hr />

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="db_host">Database Host:*</label>
                                    <input type="text" class="form-control" id="db_host" name="DB_HOST" required
                                        value="127.0.0.1" placeholder="localhost / 127.0.0.1">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="db_port">Database Port:*</label>
                                    <input type="text" class="form-control" id="db_port" name="DB_PORT" required
                                        value="3306">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="db_database">Database Name:*</label>
                                    <input type="text" value="pos_db" class="form-control" id="db_database"
                                        name="DB_DATABASE" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="db_username">Database Username:*</label>
                                    <input type="text" value="root" class="form-control" id="db_username"
                                        name="DB_USERNAME" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="db_password">Database Password:*</label>
                                    <input type="password" class="form-control" id="db_password" name="DB_PASSWORD">
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <h4>Email Configuration<small> Use for sending mails</small></h4>
                            <hr />
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="MAIL_MAILER">Send mails using:*</label>
                                    <select class="form-control" name="MAIL_MAILER" id="MAIL_MAILER">
                                        <option value="sendmail">PHP Mail</option>
                                        <option value="smtp">SMTP</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="MAIL_FROM_ADDRESS">Default from address:*</label>
                                    <input type="email" class="form-control" id="MAIL_FROM_ADDRESS"
                                        value="hello@example.com" name="MAIL_FROM_ADDRESS" placeholder="hello@example.com"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="MAIL_FROM_NAME">Default from name:</label>
                                    <input type="text" class="form-control" id="MAIL_FROM_NAME" name="MAIL_FROM_NAME"
                                        placeholder="POS (Optional)">
                                </div>
                            </div>

                            <div class="col-md-4 smtp hide">
                                <div class="form-group">
                                    <label for="MAIL_HOST">SMTP Host:*</label>
                                    <input type="text" class="form-control smtp_input" id="MAIL_HOST" name="MAIL_HOST"
                                        required disabled>
                                </div>
                            </div>

                            <div class="col-md-4  smtp hide">
                                <div class="form-group">
                                    <label for="MAIL_PORT">SMTP Mail Port:*</label>
                                    <input type="text" class="form-control smtp_input" id="MAIL_PORT"
                                        name="MAIL_PORT" required disabled>
                                </div>
                            </div>

                            <div class="col-md-4  smtp hide">
                                <div class="form-group">
                                    <label for="MAIL_ENCRYPTION">SMTP Mail Encryption:*</label>
                                    <input type="text" class="form-control smtp_input" id="MAIL_ENCRYPTION"
                                        name="MAIL_ENCRYPTION" required disabled placeholder="tls or ssl">
                                </div>
                            </div>

                            <div class="col-md-6  smtp hide">
                                <div class="form-group">
                                    <label for="MAIL_USERNAME">SMTP Username:*</label>
                                    <input type="text" class="form-control smtp_input" id="MAIL_USERNAME"
                                        name="MAIL_USERNAME" required disabled>
                                </div>
                            </div>

                            <div class="col-md-6  smtp hide">
                                <div class="form-group">
                                    <label for="MAIL_PASSWORD">SMTP Password:*</label>
                                    <input type="password" class="form-control smtp_input" id="MAIL_PASSWORD"
                                        name="MAIL_PASSWORD" required disabled>
                                </div>
                            </div>

                            <hr />

                            <div class="col-md-12">
                                <a href="#" class="btn btn-default pull-left back_button" tabindex="-1">Back</a>
                                <button type="submit" id="install_button"
                                    class="btn btn-primary pull-right">Install</button>
                            </div>

                            <div class="col-md-12 text-center text-danger install_msg hide">
                                <strong>Installation in progress, Please do not refresh, go back or close the
                                    browser.</strong>
                            </div>

                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

        </div>
    </div>
@endsection

@push('javascript')
    <script>
        $(document).ready(function() {
            $('select#MAIL_MAILER').change(function() {
                var driver = $(this).val();
                if (driver == 'smtp') {
                    $('div.smtp').removeClass('hide');
                    $('input.smtp_input').attr('disabled', false);
                } else {
                    $('div.smtp').addClass('hide');
                    $('input.smtp_input').attr('disabled', true);
                }
            })

            $('form#details_form').submit(function() {
                $('button#install_button').attr('disabled', true).text('Installing...');
                $('div.install_msg').removeClass('hide');
                $('.back_button').hide();
            });

        })
    </script>
@endpush
