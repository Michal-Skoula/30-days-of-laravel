@props([
    'href' => '#',
])

@php
$style_current = "bg-gray-900 text-white";
$style_default = "text-gray-300 hover:bg-gray-700 hover:text-white";
$is_current_page = request()->is($href);
@endphp

<li class="list-none">
    <a
        href="{{$href}}"
        aria-current="{{$is_current_page ? 'page' : 'false'}}"
        class="sm:inline-block block rounded-md px-3 py-2 text-sm font-medium {{$is_current_page ? $style_current : $style_default}}">
        {{$slot}}
    </a>
</li>

