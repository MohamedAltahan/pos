<div class="col-sm-12">

    <hr>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active text-uppercase" id="invoice-settings-tab" data-bs-toggle="tab"
                href="#invoice-settings" role="tab" aria-controls="invoice-settings"
                aria-selected="true">{{ __('Invoice settings') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-uppercase" id="layout-settings-tab" data-bs-toggle="tab" href="#layout-settings"
                role="tab" aria-controls="layout-settings" aria-selected="false">{{ __('Layout settings') }}</a>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        @include('admin.settings.invoice.partials.invoice-setting')
        @include('admin.settings.invoice.partials.layout-setting')

    </div>
</div>
