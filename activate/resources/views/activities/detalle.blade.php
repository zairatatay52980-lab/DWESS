<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Activities</title>
    </head>
    <body>
        <h1>Proximas actividades</h1>

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