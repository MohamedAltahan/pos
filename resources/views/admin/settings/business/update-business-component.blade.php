<div class="col-sm-12">
    <h5 class="mt-4">Vertical Pills</h5>
    <hr>
    <form wire:submit.prevent='submit' method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <ul wire:ignore class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">

                    <li><a class="nav-link text-start active" id="v-pills-home-tab" data-bs-toggle="pill"
                            href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">{{ __('Business') }}</a>
                    </li>
                    <li><a class="nav-link text-start" id="v-pills-profile-tab" data-bs-toggle="pill"
                            href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">{{ __('Product') }}</a>
                    </li>
                    <li><a class="nav-link text-start" id="v-pills-messages-tab" data-bs-toggle="pill"
                            href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false">{{ __('Purchase') }}</a>
                    </li>
                    <li><a class="nav-link text-start" id="v-pills-tax-tab" data-bs-toggle="pill" href="#v-pills-tax"
                            role="tab" aria-controls="v-pills-tax" aria-selected="false">{{ __('Tax') }}</a>
                    </li>
                    <li><a class="nav-link text-start" id="v-pills-system-tab" data-bs-toggle="pill"
                            href="#v-pills-system" role="tab" aria-controls="v-pills-system"
                            aria-selected="false">{{ __('System') }}</a>
                    </li>
                    <li><a class="nav-link text-start" id="v-pills-email-tab" data-bs-toggle="pill"
                            href="#v-pills-email" role="tab" aria-controls="v-pills-email"
                            aria-selected="false">{{ __('Email') }}</a>
                    </li>

                </ul>
            </div>

            <div class="col-md-9 col-sm-12">
                <div class="tab-content" id="v-pills-tabContent">
                    @include('admin.settings.business.partials.business-setting')
                    @include('admin.settings.business.partials.product-setting')
                    @include('admin.settings.business.partials.purchase-setting')
                    @include('admin.settings.business.partials.tax-setting')
                    @include('admin.settings.business.partials.system-setting')
                    @include('admin.settings.business.partials.email-setting')
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg m-3">Update</button>
        </div>
    </form>
</div>
