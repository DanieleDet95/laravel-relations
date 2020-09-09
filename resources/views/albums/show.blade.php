@extends('layouts.layout')

@section('main-content')

  <h1>Dettagli album: {{ $album->title }}</h1>


  <div class="info-show">
    <ul>
      <li><b>Artista:</b>{{ $album->artist }}</li>
      <li><b>Anno pubblicazione:</b> {{ $album->year }}</li>
      <li><b>Descrizione:</b> {{ $album->description }}</li>
    </ul>
  </div>

  <div class="immagine-show">
    <img src="{{ $album->image }}" alt="{{ $album->title }}">
  </div>

  <h2>Lista canzoni</h2>


  <table>
    <tr>
      <th>Immagine</th>
      <th>Titolo</th>
      <th>Genere</th>
      <th>Info</th>
      <th>Elimina</th>
    </tr>
    @foreach ($album->songs as $song)
    <tr>
      <td><img src="{{ $song->image }}" alt="{{ $song->title }}"></td>
      <td>{{ $song->title }}</td>
      <td>{{ $song->genre }}</td>
      <td><a href="{{ route('songs.show' , $song) }}">Dettagli</a></td>
      <td>
        <form action="{{ route('songs.destroy', $song->id ) }}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit"value="Elimina"></a>
        </form>
      </td>
    </tr>
  @endforeach
  </table>

  <div>
    <a href="{{ route('albums.index') }}">Home</a>
  </div>

@endsection
