<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Document</title>

    {{-- Importare la parte di js e sass tramite vite --}}
    @vite('resources/js/app.js')
</head>
<body>
    {{-- header  --}}
        @include('partials.header')
        
        <main>
            @yield('content')
        </main>
    
    {{-- footer --}}
    @include('partials.footer')
</body>
</html>