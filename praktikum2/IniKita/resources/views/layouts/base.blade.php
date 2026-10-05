<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inikita</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <nav class="w-full px-20 py-2 h-15 bg-white shadow-md flex items-center justify-between">
        <div class="text-lg flex justify-start">
            <h1 class="text-xl font-bold">
                <a href="{{route("home")}}">Inikita</a>
            </h1>
        </div>
        <div class="flex justify-between gap-3 items-end">
            <a href={{ route('home') }}>Home</a>
            <a href={{ route('about') }}>Tentang Kami</a>
            <a href={{ route('contact') }}>Kontak</a>
        </div>
    </nav>

    <div class="px-20 mt-3">
        @yield('inikita-body')
    </div>

    <footer class="w-full px-20 py 2 h-10 flex items-center bg-white fixed bottom-0 inset-shadow-sm justify-center">
        <p>Copyright By &copy; Humanis 2026</p>
    </footer>
</body>
</html>
