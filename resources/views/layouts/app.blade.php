<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $title)</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">

    {{-- Header Start--}}
    @include('layouts.partials.header')
    {{-- Header End --}}

    {{-- Content Start --}}
    <main class="">
        @yield('content')
    </main>
    {{-- Content End --}}
    {{-- Footer Start --}}
    @include('layouts.partials.footer')
    {{-- Footer End --}}

</body>

</html>