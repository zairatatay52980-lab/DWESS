
<x-layout title="Actividades">
        <h1>Listado de actividades</h1>

        <div>
            @foreach ($activities as $activity)
                <x-activity-card :activity="$activity" />
            @endforeach
    </div>
</x-layout>
    