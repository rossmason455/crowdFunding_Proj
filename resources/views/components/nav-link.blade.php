@props(['active'])

@php
$classes = ($active ?? false)
            ? 'nav-link active fw-medium border-bottom border-primary text-dark'
            : 'nav-link fw-medium text-secondary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
