@extends('layouts.layout')

@section('main-content')

  <div>
    <a href="{{ route('home') }}">Home</a>
  </div>

  <h1 class="flex-center">Lista album</h1>
  <div class="data">
    <span><b>Data:</b> {{ $data->format('D d F Y') }}</span>
  </div>
  <p><a href="{{ route('artists.index') }}"class="link-list">Lista artisti</a></p>

  <table>
    <tr>
      <th>Immagine</th>
      <th>Titolo</th>
      <th>Info</th>
      <th>Elimina</th>
    </tr>
    @foreach ($albums as $album)
    <tr>
      <td><img src="{{ $album->image }}" alt="{{ $album->title }}"></td>
      <td>{{ $album->title }}</td>
      <td><a href="{{ route('albums.show' , $album) }}">Dettagli</a></td>
      <td>
        <form action="{{ route('albums.destroy', $album->id ) }}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit"value="Elimina"></a>
        </form>
      </td>
    </tr>
    @endforeach
  </table>

@endsection
