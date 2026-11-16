<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Activities</title>
    </head>
    <body>
        <h1>Activities</h1>

        <ul>
            @foreach ($activities as $activity)
                <li>
                    <a href="{{ route('activities.show', )"></a>
                    {{ $activity['title'] }} ({{ $activity['category'] }})
                    Lugar: {{ $activity['location'] }} | 
                    Fecha: {{ $activity['starts_at'] }} | 
                    Capacidad: {{ $activity['capacity'] }} |
                </li>
            @endforeach
        </ul>
    </body>
</html>