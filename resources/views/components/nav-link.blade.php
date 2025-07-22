@props(['active' => false, 'class' => ''])

@php
    $baseClass = $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
@endphp
<a {{ $attributes->merge(['class' => "rounded-md px-3 py-2 text-sm font-medium $baseClass $class"]) }}>

    {{ $slot }} </a>
