@props(['activity'])
    
<article {{ $attributes->merge(['class' => 'activity-card']) }}>

    <p><strong>{{ $activity['title'] }}</strong></p>
    <p>Lugar: {{ $activity['location'] }}</p>
    <p>Fecha: {{ $activity['starts_at'] }}</p>
    <p>Capacidad: {{ $activity['capacity'] }}</p>


    <a href="{{ url('/activities') }}" class="inline-block mt-6 text-blue-600 hover:underline">
                    Volver al listado
    </a>
</article>
