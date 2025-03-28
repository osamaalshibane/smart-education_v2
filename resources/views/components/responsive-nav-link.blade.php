@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-indigo-400 '.session('theme','light').':border-indigo-600 text-start text-base font-medium text-indigo-700 '.session('theme','light').':text-indigo-300 bg-indigo-50 '.session('theme','light').':bg-indigo-900/50 focus:outline-none focus:text-indigo-800 '.session('theme','light').':focus:text-indigo-200 focus:bg-indigo-100 '.session('theme','light').':focus:bg-indigo-900 focus:border-indigo-700 '.session('theme','light').':focus:border-indigo-300 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 '.session('theme','light').':text-gray-400 hover:text-gray-800 '.session('theme','light').':hover:text-gray-200 hover:bg-gray-50 '.session('theme','light').':hover:bg-gray-700 hover:border-gray-300 '.session('theme','light').':hover:border-gray-600 focus:outline-none focus:text-gray-800 '.session('theme','light').':focus:text-gray-200 focus:bg-gray-50 '.session('theme','light').':focus:bg-gray-700 focus:border-gray-300 '.session('theme','light').':focus:border-gray-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
