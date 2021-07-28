@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'shadow-sm focus:none py-2 px-2 focus:outline-none']) !!}>
