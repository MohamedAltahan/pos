<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <div class="row align-items-end">

        <div class="form-group col-md-4">
            <x-form.input wire:model='business_name' name="business_name" label='Business name'
                value="{{ @$setting->business_name }}" placeholder='Business name' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='email' name="email" label='Email' value="{{ @$setting->email }}"
                placeholder='Email' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='phone' name="phone" label='Phone' value="{{ @$setting->phone }}"
                placeholder='Phone' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='address' name="address" label='Address' value="{{ @$setting->address }}"
                placeholder='Address' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='map' name="map" label='Map on google' value="{{ @$setting->map }}"
                placeholder='Map on google' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='currency_symbol' name="currency_symbol" label='Currency symbol'
                value="{{ @$setting->currency_symbol }}" placeholder='Currency symbol' />
        </div>

        <div class="form-group col-md-4">
            <label for="">{{ __('Default currency') }}</label>
            <select name="currency" wire:model='currency' class="form-control select2">
                <option value="">{{ __('Select currency') }}</option>
                @foreach (config('setting.currency_list') as $currency => $symbol)
                    <option @selected(@$setting->currency == $symbol) value="{{ $symbol }}">
                        {{ $currency }}
                        ({{ $symbol }})
                    </option>
                @endforeach
            </select>
            <x-form.error name='currency' message={{ $message }} />
        </div>

        <div class="form-group col-md-4">
            <label for="">{{ __('Layout direction') }}</label>
            <select name="layout" class="form-control ">
                <option @selected(@$setting->layout == 'ltr') value="ltr">{{ __('LTR') }}</option>
                <option @selected(@$setting->layout == 'rtl') value="rtl">{{ __('RTL') }}</option>
            </select>
            <x-form.error name='layout' message={{ $message }} />
        </div>

        <div class="form-group col-md-4">
            <label for="">{{ __('Time zone') }}</label>
            <select name="time_zone" id="" class="form-control select2">
                <option value="">{{ __('Select time zone') }}</option>
                @foreach (config('setting.time_zone') as $timeZone => $value)
                    <option @selected(@$setting->time_zone == $timeZone) value="{{ $timeZone }}">
                        {{ $timeZone }}
                    </option>
                @endforeach
            </select>
            <x-form.error name='time_zone' message={{ $message }} />
        </div>
    </div>
</div>
