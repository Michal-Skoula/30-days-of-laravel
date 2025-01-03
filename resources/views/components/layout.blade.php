<!doctype html>
<html lang="en">
<head>
    @props([
        'title' => 'Homepage',
        'description' => config('meta.description'),
    ])
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title . config('meta.title_suffix') }}</title>
    <meta name="description" content="{{$description}}">
    <link rel="stylesheet" href="/output.css">
</head>
<body>
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!--
                          Icon when menu is closed.
              
                          Menu open: "hidden", Menu closed: "block"
                        -->
                        <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!--
                          Icon when menu is open.
              
                          Menu open: "block", Menu closed: "hidden"
                        -->
                        <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex shrink-0 items-center">
                        <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <ul class="flex space-x-4">
                            <x-nav-link href="/">Home</x-nav-link>
                            <x-nav-link href="/about">About</x-nav-link>
                            <x-nav-link href="/contact">Contact</x-nav-link>
                            <x-nav-link href="/jobs">Jobs</x-nav-link>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <ul class="space-y-1 px-2 pb-3 pt-2">
                <x-nav-link href="/">Home</x-nav-link>
                <x-nav-link href="/about">About</x-nav-link>
                <x-nav-link href="/contact">Contact</x-nav-link>
            </ul>
        </div>
    </nav>
    <main class="max-w-7xl mx-auto px-6 py-8">
    
    {{$slot}} {{-- Content goes here --}}
    
    </main>
</body>
</html>