<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Coba</title>
</head>

<body class="font-sans bg-gray-100">

    <main>
        {{-- Navbar Here --}}
        @include('layouts.navbar')

        <div class="pt-4"> {{-- py-4, kalau nanti footer sudah dibuat file sendiri --}}
            @yield('content')
        </div>

        {{-- Footer Here --}}
        @include('layouts.footer')

    </main>

</body>

</html>
