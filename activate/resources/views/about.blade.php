<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About</title>
    </head>
    <body>
        <x-layout title="Activate">
            <h1>Informacion </h1>
            <p>Pagina de informacion </p>

        </x-layout>
        
        <x-layout title="Actividades">
            <h1>Listado de actividades</h1>

            @foreach ($activities as $activity)
                <article>
                    <h3>{{ $activity['title'] ?? $activity->title }}</h3>
                    <p>{{ $activity['description'] ?? $activity->description }}</p>
                </article>
            @endforeach
        </x-layout>
    </body>

    
</html>