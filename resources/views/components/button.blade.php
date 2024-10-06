@props(['type', 'color'])

@php
    $type = ($type ?? false)
            ? $type
            : 'button';
    $color = ($color ?? false)
            ? $color
            : 'link';
@endphp

<button {{ $attributes->merge(['type' => $type, 'class' => 'btn btn-' . $color]) }}>
    {{ $slot }}
</button>

