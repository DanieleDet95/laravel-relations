<h1>Dettagli album</h1>

<h2>Titolo: {{ $album->title }}</h2>
<h3>Autore: {{ $album->artist }}</h3>
<h3>Anno: {{ $album->year }}</h3>

<h2>Lista canzoni</h2>

@foreach ($album->songs as $song)
  <ul>
    <li>Titolo: {{ $song->title }}</li>
    <li>Genere: {{ $song->genre }}</li>
  </ul>
@endforeach

<div>
  <a href="{{ route('albums.index') }}">Home</a>
</div>
