<!doctype html>
<html lang="en">
    <title>Ticketsysteem deniz</title>
 <head>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900">
<div>
    <header>
        @include('components.header')
    </header>
    <main>
        @yield('content')
    </main>

</div>
</body>
    <footer>
        @include('components.footer')
    </footer>
</html>
