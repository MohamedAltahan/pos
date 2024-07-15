<div class="tab-pane fade show active"wire:ignore.self id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <div class="row align-items-end">

        <div class="form-group col-md-4">
            <span>*</span>
            <x-form.input wire:model='business.name' name='business.name' label='Business name'
                placeholder='Business name' />
        </div>

        {{-- upload logo and preview --}}
        <div class="form-group col-md-4">
            @if ($logo == null)
                Logo preview:
                <img src="{{ asset('uploads/' . $business->logo) }}" width="120">
                {{-- preview images only --}}
            @elseif(in_array($logo->extension(), config('livewire.temporary_file_upload.preview_mimes')))
                Logo preview:
                <img src="{{ $logo->temporaryUrl() }}" width="120">
            @endif
            <div wire:loading wire:target='logo' class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <x-form.input accept="image/*" wire:model.live='logo' name='logo' type="file"
                label="Upload buisness logo" />
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
            <x-form.input wire:model='business.start_date' name='business.start_date' label="Business start date"
                type="date" />
        </div>


        <div class="form-group col-md-4">
            <x-form.input wire:model='business.phone' name='business.phone' label='Phone' placeholder='Phone' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='business.email' name='business.email' label='Email' placeholder='Email' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='business.address' name='business.address' label='Address' placeholder='Address' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='business.map' name='business.map' label='Map on google'
                placeholder='Map on google' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='business.currency_symbol' name='business.currency_symbol' name="currency_symbol"
                label='Currency symbol' placeholder='Currency symbol' />
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
    <link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}">
@endpush
@push('scripts')
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
    <script src="{{ asset('dashboard/assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
@endpush
