@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'flex w-full  items-center justify-between rounded px-3 py-2 text-white hover:bg-white hover:text-black dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:focus:text-white md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-white md:dark:hover:bg-transparent md:dark:hover:text-blue-500'
            : 'flex w-full items-center justify-between rounded px-3 py-2 text-gray-200 hover:bg-white hover:text-black dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:focus:text-white md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-white md:dark:hover:bg-transparent md:dark:hover:text-blue-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
