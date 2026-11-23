@props(['activity'])

<article {{ $attributes->merge(['class' => 'activity-card']) }}>
    <header>
        <a href="{{ route('categories.show', $activity['category'])}}">
            <small>{{ $activity['category'] }}</small>
        </a>
    </header>


    <p><strong>{{ $activity['title'] }}</strong></p>
    <p>Lugar: {{ $activity['location'] }}</p>
    <p>Fecha: {{ $activity['starts_at'] }}</p>
    <p>Capacidad: {{ $activity['capacity'] }}</p>

    <footer>
        <a href="{{ route('categories.show', $activity['id'])}}">
            Ver detalle
        </a>
    </footer>
</article>