{{-- Esto es un componente anonimo porque no depende de ninguna clase --}}

@props(['type' => "info"]) {{-- Aqui se le pasan los parametros que acepta --}}

@php
    switch ($type) {
        case 'info':
            $class = "text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400";
            break;

        case 'danger':
            $class = "text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400";
            break;

        case 'success':
            $class = "text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400";
            break;

        case 'warning':
            $class = "text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300";
            break;

        case 'dark':
            $class = "text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-300";
            break;
        
        default:
            $class = "text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400";
            break;
    }
@endphp

{{-- $attributes contiene las clases que se agregen a parte --}}
{{-- $attributes se une con class que ya tiene p-4 mb-4 text-sm --}}
<div {{ $attributes->merge(['class' => 'p-4 text-sm rounded-lg ' . $class]) }} role="alert"> 
    <span class="font-medium">{{$title ?? 'Info Alert!'}}</span> {{$slot}}
</div>