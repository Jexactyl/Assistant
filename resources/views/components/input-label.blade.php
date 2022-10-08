@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-200 mb-2']) }}>
    {{ $value ?? $slot }}
</label>
