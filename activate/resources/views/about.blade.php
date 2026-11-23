<x-layout title="About">

    <section>
        <h1>Informacion </h1>
        <p>Pagina de informacion </p>
    </section>

    @isset($activities)
        <section>
            <h1>Listado de actividades</h1>
            
            @foreach ($activities as $activity)

                <article>
                    <h4>{{ data_get($activity, 'title') }}</h4>
                    <p>{{ data_get($activity, 'description') }}</p>
                </article>

            @endforeach
        </section>
    @endisset

</x-layout> 

