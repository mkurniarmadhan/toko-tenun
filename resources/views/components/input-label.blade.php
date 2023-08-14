@props(['value'])

    <label
        {{ $attributes->merge(['class' => 'form-control form-control-xl']) }}>
        {{ $value ?? $slot }}
    </label>
