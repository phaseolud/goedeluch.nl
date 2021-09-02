@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'shadow-sm focus:none py-3 px-4 text-lg focus:outline-none']) !!}>
