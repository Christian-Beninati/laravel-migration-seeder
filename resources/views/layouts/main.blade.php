<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
</head>

{{-- Import asset --}}
@vite('resources/js/app.js')

<body>
    {{-- Header --}}
    <header>
        @include('includes.header')
    </header>

    {{-- Main --}}
    <main class="container">
        @yield('main-content')
    </main>

    {{-- Footer --}}
    <footer>
        @yield('footer')
    </footer>
</body>

</html>
