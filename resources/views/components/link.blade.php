@props(['color', 'href'])

@php
    $color = ($color ?? false)
            ? $color
            : 'link';
    $href = ($href ?? false)
            ? $href
            : false;
@endphp

<a {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-' . $color, 'href' => $href]) }}>
    {{ $slot }}
</a>