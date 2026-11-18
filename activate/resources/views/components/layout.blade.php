@props(['title'=>'Activate'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">    

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>

    <header class="container">
        @include('partials.nav')
    </header>

    <main class="container">
        {{ $slot }}
    </main>


</body>
</html>