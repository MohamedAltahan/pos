<div class="tab-pane fade" wire:ignore.self id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

    <div class="form-group col-md-6 form-check">
        <x-form.input type='checkbox' wire:model='business.enable_editing_product_from_purchase'
            name='business.enable_editing_product_from_purchase' id="enable_editing_product_from_purchase"
            class="form-check-input input-primary" :checked="$business->enable_editing_product_from_purchase" />
        <label
            for="enable_editing_product_from_purchase">{{ __('Enable editing product form purchase screen') }}</label>
    </div>

</div>
