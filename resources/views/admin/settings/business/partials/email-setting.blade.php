<div class="tab-pane fade" wire:ignore.self id="v-pills-email" role="tabpanel" aria-labelledby="v-pills-email-tab">
    <div class="row">

        <div class="form-group col-md-4">
            <x-form.input wire:model='emailSetting.host' name='emailSetting.host' label='Host' placeholder='Host' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='emailSetting.port' name='emailSetting.port' label='Port' placeholder='Port' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='emailSetting.username' name='emailSetting.username' label='Username'
                placeholder='Username' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='emailSetting.password' name='emailSetting.password' label='Password'
                placeholder='Password' type="password" />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='emailSetting.encryption' name='emailSetting.encryption' label='Encryption'
                placeholder='tls / ssl' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='emailSetting.fromEmail' name='emailSetting.fromEmail' label='From email address'
                placeholder='Sender@test.com' type='email' />
        </div>

        <div class="form-group col-md-4">
            <x-form.input wire:model='emailSetting.fromName' name='emailSetting.fromName' label='From Name'
                placeholder='Ali' />
        </div>
    </div>
    {{-- @dd($emailSetting) --}}
    <div class="text-center">
        <a class="btn btn-success btn-lg my-4" wire:click="sendTestEmail">Send
            test email</a>
    </div>
</div>
