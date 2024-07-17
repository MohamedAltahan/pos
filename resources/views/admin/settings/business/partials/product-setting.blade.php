<div class="tab-pane fade" wire:ignore.self id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

    <div class="row align-items-end">
        <div class="text-center">
            <h5>{{ __('These options will be reflected at (Add new product page)') }}</h5>
        </div>

        <hr style="border: 2px solid">

        <div class="row align-items-end">

            <div class="form-group col-md-4 form-check">
                <x-form.input type='checkbox' wire:model='business.enable_product_expiry'
                    name='business.enable_product_expiry' id="enable_product_expiry"
                    class="form-check-input input-primary" :checked="$business->enable_product_expiry" />
                <label for="enable_product_expiry">{{ __('Enable adding expiry to products') }}</label>
            </div>


            <div class="form-group col-md-4">
                <x-form.select x-bind:disabled="!$wire.business.enable_product_expiry" wire:model="business.expiry_type"
                    name="business.expiry_type" :options="[
                        'add_expiry' => 'Add item expiry date',
                        'add_manufacturing' => 'add item manufacturing date and expiry period',
                    ]" />
            </div>


            <div class="form-group col-md-4">
                <x-form.select x-bind:disabled="!$wire.business.enable_product_expiry"
                    wire:model="business.on_product_expiry" name="business.on_product_expiry"
                    label="If product about to expire" :options="[
                        'keep_selling' => 'keep selling',
                        'stop_selling' => 'stop selling',
                    ]" />
            </div>

            <div class="form-group col-md-4 ">
                <x-form.input
                    x-bind:disabled="($wire.business.on_product_expiry != 'stop_selling') ||
                    ($wire.business.enable_product_expiry == false)"
                    type='number' wire:model='business.stop_selling_before' name='business.stop_selling_before'
                    label="Number of days befor stop selling :" />
            </div>
        </div>

        <hr style="border: 2px solid">

        <div class="form-group col-md-4 form-check">
            <x-form.input type='checkbox' wire:model='business.enable_rack' name='business.enable_rack'
                class="form-check-input input-primary" id="enable_rack" :checked="$business->enable_rack" />
            <label for="enable_rack">{{ __('Enable rack') }}</label>
        </div>

        <div class="form-group col-md-4 form-check">
            <x-form.input type='checkbox' wire:model='business.enable_row' name='business.enable_row'
                class="form-check-input input-primary" id="enable_row" :checked="$business->enable_row" />
            <label for="enable_row">{{ __('Enable row') }}</label>
        </div>

        <div class="form-group col-md-4 form-check">
            <x-form.input type='checkbox' wire:model='business.enable_position' name='business.enable_position'
                class="form-check-input input-primary" id="enable_position" :checked="$business->enable_position" />
            <label for="enable_position">{{ __('Enable position') }}</label>
        </div>

        <div class="form-group col-md-4 form-check">
            <x-form.input type='checkbox' wire:model='business.enable_warranty' name='business.enable_warranty'
                class="form-check-input input-primary" id="enable_warranty" :checked="$business->enable_warranty" />
            <label for="enable_warranty">{{ __('Enable warranty') }}</label>
        </div>

    </div>

</div>
