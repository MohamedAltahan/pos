<div class="tab-pane fade" wire:ignore.self id="v-pills-system" role="tabpanel" aria-labelledby="v-pills-system-tab">

    {{-- <div class="form-group col-md-4">
        <x-form.select wire:model="business.expiry_type" name="business.expiry_type" :options="[
            'add_expiry' => 'Add item expiry date',
            'add_manufacturing' => 'add item manufacturing date and expiry period',
        ]" />
    </div> --}}

    <div class="form-group col-md-6 form-check">
        <x-form.input type='checkbox' wire:model='business.enable_help_text' name='business.enable_help_text'
            id="enable_help_text" class="form-check-input input-primary" :checked="$business->enable_help_text" />
        <label for="enable_help_text">{{ __('Show help text') }}</label>
    </div>

</div>
