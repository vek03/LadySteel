@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-red-500 text-left text-base font-medium text-red-500 bg-rose-50 focus:outline-none focus:text-rose-500 focus:bg-red-300 focus:border-red-500 transition duration-150 ease-in-out'
            : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-red-500 hover:text-rose-500 hover:bg-rose-50 hover:border-red-500 focus:outline-none focus:text-rose-500 focus:bg-rose-50 focus:border-red-500 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
