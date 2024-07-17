<div class="tab-pane fade" id="v-pills-tax" role="tabpanel" aria-labelledby="v-pills-tax-tab">
    <div class="row">

        <div class="form-group col-md-4">
            <x-form.input wire:model='business.tax_name' name='business.tax_name' label='Tax name' placeholder='Tax name' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='business.tax_number' name='business.tax_number' label='Tax number'
                placeholder='Tax number' />
        </div>

        <div class="form-group col-md-6 form-check ms-3">
            <x-form.input type='checkbox' wire:model='business.enable_inline_tax' name='business.enable_inline_tax'
                id="enable_inline_tax" class="form-check-input input-primary " :checked="$business->enable_inline_tax" />
            <label for="enable_inline_tax">{{ __('Enable inline tax in purchase and sell') }}</label>
        </div>

    </div>
</div>
