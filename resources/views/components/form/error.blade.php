@props(['name', 'message'])

@error($name)
    <div class="text-danger">
        {{ $message }}
    </div>
@enderror
