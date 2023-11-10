@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-red-500 border-2 border-red-500 duration-500 font-bold hover:bg-white hover:text-red-500 mx-3 navbar-btn px-3 py-2 rounded text-white text-xl'
            : 'bg-white border-2 border-red-500 duration-500 font-bold hover:bg-red-500 hover:text-white mx-3 navbar-btn px-3 py-2 rounded text-red-500 text-xl';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
