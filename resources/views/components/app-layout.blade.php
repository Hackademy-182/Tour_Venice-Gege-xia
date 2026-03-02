<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Veniceland</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">


    <main class="flex-fill container-fluid py-4 px-4">
        <div class="vl-max">
            @include('partials.nav')
            {{ $slot }}
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-1 mt-auto d-flex fixed-bottom">
        © 2026 Veniceland
    </footer>

</body>

</html>
