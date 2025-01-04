@props([
	'href' => '#',
])
<a
    href="{{$href}}"
    role="button"
    class="inline-block px-6 py-2 bg-blue-700 hover:bg-blue-800 text-white rounded-xl transition-colors">
    {{$slot}}
</a>