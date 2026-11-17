<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Activities</title>
    </head>
    <body>
        <h1>Activities</h1>
        @if (request()->filled('q') || isset($category))
            <p>
                <a href="{{ route('activities.index') }}">Ver todas</a>
            </p>
        @endif

        <ul>
            @foreach ($activities as $activity)
                <li>
                    <a href="{{ route('activities.show', $activity['id']) }}">
                        {{ $activity['title'] }}
                    </a>
                    
                    (<a href="{{ route('categories.show', $activity['category']) }}">{{ $activity['category'] }}</a>)
                    Lugar: {{ $activity['location'] }} | 
                    Fecha: {{ $activity['starts_at'] }} | 
                    Capacidad: {{ $activity['capacity'] }}
                </li>
            @endforeach
        </ul>
    </body>
</html>