@props(['active'])
    @php
        $classes = $active ?? false ? 'sidebar-item active' : 'sidebar-item';
    @endphp
    <li {{ $attributes->merge(['class' =>$classes]) }}> {{ $slot }}</li>
