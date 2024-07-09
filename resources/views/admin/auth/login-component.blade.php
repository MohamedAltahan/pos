<form method="POST" wire:submit.prevent='submit'>
    @csrf
    <div class="mb-3">
        <label for="emailaddress" class="form-label">Username</label>
        <input class="form-control" type="email" id="emailaddress" placeholder="Enter your username" autofocus
            wire:model='email' value="" name="email">

        <x-form.error name='email' message={{ $message }} />
    </div>

    <div class="mb-3">
        <a href="" class="text-muted float-end fs-12">Forgot your password?</a>
        <label for="password" class="form-label">Password</label>
        <div class="input-group input-group-merge">
            <input type="password" id="password" class="form-control" placeholder="Enter your password" value=""
                wire:model='password' name="password">
            <div class="input-group-text" data-password="false">
                <span class="password-eye"></span>
            </div>
        </div>
        <x-form.error name='password' message={{ $message }} />

    </div>

    <div class="mb-3 mb-3">
        <div class="form-check">
            <input wire:model='remember' type="checkbox" class="form-check-input" id="checkbox-signin" checked>
            <label class="form-check-label" for="checkbox-signin">Remember me</label>
        </div>
    </div>

    <div class="mb-3 mb-0 text-center">
        <button class="btn btn-primary" type="submit"> Log In </button>
    </div>

</form>
