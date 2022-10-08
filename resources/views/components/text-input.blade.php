@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-gray-700 p-1 rounded-md border-gray-600 text-white']) !!}>
