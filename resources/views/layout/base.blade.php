<!doctype html>
<html class="h-full bg-white">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
    <script defer src="{{ asset("js/menu.js") }}" ></script>
    <script defer src="{{ asset("js/app.js") }}" ></script>

</head>
<body class="h-full">
<div class="min-h-full" x-data>

    @include("layout.menu")

    <div class="flex flex-col lg:pl-64">
        <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 border-b border-gray-200 bg-white lg:hidden">
            <button
                x-data
                @click="$store.menu.menuVisible = true;"
                type="button"
                    class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500 lg:hidden">
                <span class="sr-only">Open sidebar</span>
                <!-- Heroicon name: outline/bars-3-center-left -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5"/>
                </svg>
            </button>

        </div>

        <main class="flex-1">
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
