
@props(['label', 'name', 'type' => 'text'])

<div class="space-y-2">

    <label for="{{ $name }}" class="label text-left">{{ $label }}</label>
    <input type="{{ $type }}" class="input" name="{{ $name }}" value="{{ old($name, '') }}" {{ $attributes }}>

    @error($name)
        <p class="text-red-500 text-sm text-left">{{ $message }}</p>
    @enderror

</div>
