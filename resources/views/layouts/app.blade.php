<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $title)</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }
    </style>
</head>

<body class="bg-blue-50 min-h-screen flex flex-col">

    {{-- Header Start--}}
    <header class="sticky top-0 z-50 w-full backdrop-blur-md bg-slate-100/40 border-b border-white/10 shadow-lg">
        @include('layouts.partials.header')
    </header>
    {{-- Header End --}}

    {{-- Content Start --}}
    <main class="flex-1 w-full">
        @yield('content')
    </main>
    {{-- Content End --}}

    {{-- Footer Start --}}
    <footer class="relative w-full text-white overflow-hidden bg-cover bg-center min-h-125 "
        style="background-image: url('{{ asset('storage/assets/mount-footer.png') }}');">
        @include('layouts.partials.footer')
    </footer>
    {{-- Footer End --}}

</body>

</html>