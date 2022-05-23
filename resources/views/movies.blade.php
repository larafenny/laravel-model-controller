<h1>LISTA FILM</h1>
<h2> Titolo</h2>
@foreach ($movies as $movie)
    <div>
        {{ $movie->title }}
    </div>
@endforeach
