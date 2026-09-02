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
            background-color: #0f172a;
        }

    </style>
</head>

<body class="bg-transparent min-h-screen flex flex-col">

    {{-- Header Start--}}
    <header
        class="sticky mix-blend-difference top-0 z-50 w-full backdrop-blur-md bg-transparent border-b border-white/10 shadow-lg">
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
        style="background-image: url('{{ asset('assets/images/mount-footer.png') }}');">
        @include('layouts.partials.footer')
    </footer>
    {{-- Footer End --}}

</body>

</html>