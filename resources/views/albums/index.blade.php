<h1>Lista album</h1>

@foreach ($albums as $album)
  <ul>
    <li>
      <span>{{ $album->title }}</span>
      <a href="{{ route('albums.show' , $album) }}">Dettagli</a>
    </li>
  </ul>
@endforeach
