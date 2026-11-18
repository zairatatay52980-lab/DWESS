<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Activities</title>
    </head>
    <body>
        <h1>Proximas actividades</h1>
        
        @if (request()->filled('q') || isset($category))
            <p>
                <a href="{{ route('activities.index') }}">Volver</a>
            </p>
        @endif

        <h3>{{ $activity['title'] }}</h3>
        
        <ul>
            <li>
                <strong>Categoria:</strong>{{ $activity['category']}}
            </li>
            <li>
                <strong>Lugar:</strong>{{ $activity['location'] }}
            </li>
            <li>
                <strong>Fecha:</strong>{{ $activity['starts_at'] }}
            </li>
            <li>
                <strong>Plazas:</strong>{{ $activity['capacity'] }}
            </li>
        </ul>
    </body>
</html>