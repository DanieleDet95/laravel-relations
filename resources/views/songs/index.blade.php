@extends('layouts.layout')

@section('main-content')
  <div>
    <a href="{{ route('home') }}">Home</a>
  </div>

  <h1 class="flex-center">Lista canzoni</h1>

  <div class="artist-flex">

      <table>
        <tr>
          <th>Immagine</th>
          <th>Titolo</th>
          <th>Genere</th>
          <th>Info</th>
          <th>Elimina</th>
        </tr>
        @foreach ($songs as $song)
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
