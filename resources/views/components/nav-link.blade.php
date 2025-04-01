
@props(['active'])

@php
$classes = ($active ?? false)
            ? 'nav-link active fw-medium text-dark'
            : 'nav-link fw-medium text-secondary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>