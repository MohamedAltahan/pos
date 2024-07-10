@props(['type' => 'text', 'name' => '', 'value' => '', 'class' => '', 'label' => '', 'placeholder' => ''])
@if ($label)
    <label for="">{{ __($label) }}</label>
@endif

<input type="{{ $type }}" name="{{ $name }}" value='{{ old($name, $value) }}'
    class="form-control {{ $class }}" placeholder="{{ __($placeholder) }}" {{ $attributes }}>

@error($name)
    <div class="text-danger">
        {{ $message }}
    </div>
@enderror

{{-- $attributes --> will be replaced by any attributes which isn't denfined in propes --}}
