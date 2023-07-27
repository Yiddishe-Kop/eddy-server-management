@props(['active' => false])

@php
    $classes = ($active ?? false)
        ? 'inline-flex items-center rounded-md bg-brand-100 px-3 py-2 text-sm font-medium text-brand-900'
        : 'inline-flex items-center rounded-md px-3 py-2 text-sm font-medium text-brand-900 hover:bg-brand-50';
@endphp

<Link {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</Link>
