@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-gray-50 block border-2 border-gray-400 font-normal p-2.5 rounded text-base text-gray-900 w-full focus:outline-none focus:ring focus:ring-rose-200 focus:border-rose-500 drop-shadow-md']) !!}>
