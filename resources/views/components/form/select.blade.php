@props(['name' => '', 'options', 'selected' => '', 'class' => '', 'label' => ''])
@if ($label)
    <label for="">{{ __($label) }}</label>
@endif
<select name="{{ $name }}" class="form-control {{ $class }}" {{ $attributes }}>

    @foreach ($options as $key => $value)
        <option value="{{ $key }}" @selected($key == $selected)>{{ __($value) }}</option>
    @endforeach

    @error($name)
        <div class="text-danger">
            {{ $message }}
        </div>
    @enderror

</select>
