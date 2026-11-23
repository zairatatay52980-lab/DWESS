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

        <x-layout :title="$activity['title']">
            <article class="max-w-2xl border rounded-lg p-6 bg-white shadow-sm">
                <span class="text-xs uppercase font-semibold text-blue-600">
                    {{ $activity['category'] }}
                </span>

                <h1 class="text-3xl font-bold mt-2">{{ $activity['title'] }}</h1>

                <ul class="mt-4 space-y-2 text-gray-700">
                    <li><strong>Lugar:</strong> {{ $activity['location'] }}</li>
                    <li><strong>Fecha y hora:</strong> {{ $activity['starts_at'] }}</li>
                    <li><strong>Capacidad:</strong> {{ $activity['capacity'] }} personas</li>
                </ul>

                <a href="{{ url('/activities') }}" class="inline-block mt-6 text-blue-600 hover:underline">
                    Volver al listado
                </a>
            </article>
        </x-layout>
    </body>
</html>