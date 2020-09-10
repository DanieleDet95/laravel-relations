@extends('layouts.layout')

@section('main-content')

  <div>
    <a href="{{ route('home') }}">Home</a>
  </div>
  
  <h1 class="flex-center">Dettagli album: {{ $album->title }}</h1>
  <div class="data">
    <span><b>Data:</b> {{ $data->format('D d F Y') }}</span>
  </div>

  <div class="info-show">
    <ul>
      <li><b>Artista:</b><a href="{{ route('artists.show', $album->artist_id)}}">{{ $album->artist['name'] }}</a></li>
      <li><b>Anno pubblicazione:</b> {{ $album->year }}</li>
      <li><b>Descrizione:</b> {{ $album->description }}</li>
    </ul>
  </div>

  <div class="immagine-show">
    <img src="{{ $album->image }}" alt="{{ $album->title }}">
  </div>

  <div class="lista-show">
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

  </div>

@endsection
