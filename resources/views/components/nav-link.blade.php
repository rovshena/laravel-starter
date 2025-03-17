@props([
    'active' => false,
    'mobile' => false,
])

<a
    class="rounded-md px-3 py-2 font-medium
        {{ $mobile ? 'block text-base' : 'text-sm' }}
        {{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}"
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}
>{{ $slot }}</a>
