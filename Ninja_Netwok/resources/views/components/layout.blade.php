<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faiz Barber Shop</title>
    @vite('resources/css/app.css')
</head> 
<body>
    <header>
        <nav>
            <h1>Faiz Barber Shop</h1>
        </nav>
        <a href="/Barbers">Our Barbers</a>
        <a href="/Barbers/Create">Add a Barber</a>
    </header>
    <main class="container">
        {{$slot}}
    </main>
</body>
</html>