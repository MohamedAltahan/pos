<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <div class="row align-items-end">

        <div class="form-group col-md-4">
            <span>*</span>
            <x-form.input wire:model='business.name' name='business.name' label='Business name'
                placeholder='Business name' />
        </div>

        <div class="form-group col-md-4">
            <x-form.select wire:model="business.date_format" name="business.date_format" label="Select date format"
                :options="[
                    'm/d/Y' => __('mm/dd/yyyy'),
                    'd-m-Y' => __('dd-mm-yyyy'),
                    'd/m/Y' => __('dd/mm/yyyy'),
                    'm-d-Y' => __('mm-dd-yyyy'),
                ]" />
        </div>

        <div class="form-group col-md-4">
            <x-form.select wire:model='business.time_format' name='business.time_format' label="Select time format"
                :options="['12' => __('12 hours'), '24' => __('24 hours')]" />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='business.logo' name='business.logo' type="file" label="Upload buisness logo" />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='business.start_date' name='business.start_date' label="Business start date"
                value="{{ date('d-m-Y') }}" id="pc-datepicker-3" readonly />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='business.phone' name='business.phone' label='Phone'
                value="{{ @$setting->phone }}" placeholder='Phone' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='business.email' name='business.email' label='Email'
                value="{{ @$setting->email }}" placeholder='Email' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='business.address' name='business.address' label='Address'
                value="{{ @$setting->address }}" placeholder='Address' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='business.map' name='business.map' label='Map on google'
                value="{{ @$setting->map }}" placeholder='Map on google' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='business.currency_symbol' name='business.currency_symbol' name="currency_symbol"
                label='Currency symbol' value="{{ @$setting->currency_symbol }}" placeholder='Currency symbol' />
        </div>


        <div class="form-group col-md-4">
            <x-form.select wire:model='business.currency' name='business.currency' label="Default currency"
                :options="config('setting.currency_list')" />
        </div>


        <div class="form-group col-md-4">
            <x-form.select wire:model='business.layout' name='business.layout' label="Layout direction"
                :options="['ltr' => 'LTR', 'rtl' => 'RTL']" />
        </div>


        <div class="form-group col-md-4">
            <x-form.select wire:model='business.time_zone' name='business.time_zone' label="Select time zone"
                :options="config('setting.time_zone_list')" :selected="$business->time_zone" />
        </div>

        <div class="form-group col-md-4">
            <x-form.select wire:model="business.currency_precision" name="business.currency_precision"
                label="Currency precision" :options="[0, 1, 2, 3, 4]" />
        </div>

        <div class="form-group col-md-4">
            <x-form.select wire:model="business.quantity_precision" name="business.quantity_precision"
                label="Quantity precision" :options="[0, 1, 2, 3, 4]" />
        </div>

    </div>
</div>
@push('styles')
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/plugins/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/plugins/bootstrap-timepicker.min.css">
@endpush
@push('scripts')
    <script src="{{ asset('dashboard') }}/assets/js/plugins/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/plugins/bootstrap-timepicker.min.js"></script>

    <script>
        //date picker _______________
        arrows = {
            leftArrow: '<i class="feather icon-chevron-left"></i>',
            rightArrow: '<i class="feather icon-chevron-right"></i>'
        }

        $('#pc-datepicker-3, #pc-datepicker-3_validate').datepicker({
            todayBtn: "linked",
            clearBtn: true,
            todayHighlight: true,
            templates: arrows,
            format: "dd-mm-yyyy"
        });

        //time picker__________________
        $.fn.timepicker.defaults = $.extend(true, {}, $.fn.timepicker.defaults, {
            icons: {
                up: 'feather icon-chevron-up',
                down: 'feather icon-chevron-down'
            }
        });
        // minimum setup
        $('#pc-timepicker-1, #pc-timepicker-1-modal').timepicker();

        // minimum setup
        $('#pc-timepicker-2, #pc-timepicker-2-modal').timepicker({
            minuteStep: 1,
            defaultTime: '',
            showSeconds: true,
            showMeridian: false,
            snapToStep: true
        });
    </script>
@endpush
