@extends('admin.layouts.master')
@section('content')
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5>Layout 3</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Layout 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <div class="card border">
        <div class="card-header">
            <h5>Form controls</h5>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <x-form.input class="form-control" name="site_name" label='Site Name'
                        value="{{ @$setting->site_name }}" />
                </div>

                <div class="form-group">
                    <x-form.input class="form-control" name="email" label='Contact Email (appear in contact page)'
                        value="{{ @$setting->email }}" />
                </div>

                <div class="form-group">
                    <x-form.input class="form-control" name="phone" label='Contact phone (appear in contact page)'
                        value="{{ @$setting->phone }}" />
                </div>

                <div class="form-group">
                    <x-form.input class="form-control" name="address" label='Contact address (appear in contact page)'
                        value="{{ @$setting->address }}" />
                </div>
                <div class="form-group">
                    <x-form.input class="form-control" name="map" label='map on google (appear in contact page)'
                        value="{{ @$setting->map }}" />
                </div>

                <div class="form-group">
                    <x-form.input class="form-control" name="currency_symbol" label='Currency_symbol'
                        value="{{ @$setting->currency_symbol }}" />
                </div>

                <div class="form-group">
                    <label for="">Default Currency</label>
                    <select name="currency" id="" class="form-control select2">
                        <option value="">Select Currency</option>
                        @foreach (config('setting.currency_list') as $currency => $symbol)
                            <option @selected(@$setting->currency == $symbol) value="{{ $symbol }}">
                                {{ $currency }}
                                ({{ $symbol }})
                            </option>
                        @endforeach
                    </select>
                    <x-form.error name='currency' message={{ $message }} />
                </div>

                <div class="form-group">
                    <label for="">Layout direction</label>
                    <select name="layout" id="" class="form-control ">
                        <option @selected(@$setting->layout == 'ltr') value="ltr">LTR</option>
                        <option @selected(@$setting->layout == 'rtl') value="rtl">RTL</option>
                    </select>
                    <x-form.error name='layout' message={{ $message }} />
                </div>

                <div class="form-group">
                    <label for="">Time Zone</label>
                    <select name="time_zone" id="" class="form-control select2">
                        <option value="">Select Time Zone</option>
                        @foreach (config('setting.time_zone') as $timeZone => $value)
                            <option @selected(@$setting->time_zone == $timeZone) value="{{ $timeZone }}">
                                {{ $timeZone }}
                            </option>
                        @endforeach
                    </select>
                    <x-form.error name='time_zone' message={{ $message }} />
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>


    <div class="col-sm-12">
        <h5 class="mt-4">Vertical Pills</h5>
        <hr>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <li><a class="nav-link text-start active" id="v-pills-home-tab" data-bs-toggle="pill"
                            href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                    </li>
                    <li><a class="nav-link text-start" id="v-pills-profile-tab" data-bs-toggle="pill"
                            href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">Profile</a>
                    </li>
                    <li><a class="nav-link text-start" id="v-pills-messages-tab" data-bs-toggle="pill"
                            href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false">Messages</a>
                    </li>
                    <li><a class="nav-link text-start" id="v-pills-settings-tab" data-bs-toggle="pill"
                            href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                            aria-selected="false">Settings</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <p class="mb-0">Cillum ad ut irure tempor velit nostrud occaecat ullamco
                            aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna
                            mollit excepteur laborum qui. Id id reprehenderit sit est
                            eu aliqua
                            occaecat quis et velit excepteur laborum mollit dolore eiusmod.
                            Ipsum dolor in occaecat commodo et voluptate minim reprehenderit
                            mollit pariatur. Deserunt non laborum enim et cillum eu deserunt
                            excepteur ea incididunt minim occaecat.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <p class="mb-0">Culpa dolor voluptate do laboris laboris irure
                            reprehenderit id incididunt duis pariatur mollit aute magna pariatur
                            consectetur. Eu veniam duis non ut dolor deserunt commodo et
                            minim in quis
                            laboris ipsum velit id veniam. Quis ut consectetur adipisicing
                            officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu.
                            Ullamco mollit occaecat dolore ipsum id officia mollit qui
                            esse anim eiusmod do sint minim consectetur qui.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <p class="mb-0">Fugiat id quis dolor culpa eiusmod anim velit excepteur
                            proident dolor aute qui magna. Ad proident laboris ullamco esse anim
                            Lorem Lorem veniam quis Lorem irure occaecat velit
                            nostrud magna
                            nulla. Velit et et proident Lorem do ea tempor officia dolor.
                            Reprehenderit Lorem aliquip labore est magna commodo est ea veniam
                            consectetur.</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">
                        <p class="mb-0">Eu dolore ea ullamco dolore Lorem id cupidatat excepteur
                            reprehenderit consectetur elit id dolor proident in cupidatat
                            officia. Voluptate excepteur commodo labore nisi cillum duis
                            aliqua do.
                            Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam
                            nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore
                            officia magna elit nisi in aute tempor commodo eiusmod.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
