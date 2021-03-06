@extends('layouts.layout')

@section('main-content')
  <div>
    <a href="{{ route('home') }}">Home</a>
  </div>
  
  <h1>Dettagli Artista: {{ $artist->name }}</h1>

  <div class="info-show">
    <ul>
      <li>Anno di nascita: {{ $artist->year }}</li>
      <li>Descrizione: {{ $artist->description }}</li>
      @if (!$artist->sponsors->isEmpty())
        <h3>Sponsor</h3>
        @foreach ($artist->sponsors as $sponsor)
          <li>{{ $sponsor->name }}</li>
        @endforeach
      @endif

    </ul>
    <div>
      <a href="{{ route('artists.edit', $artist ) }}">Modifica info</a>
    </div>
  </div>

  <div class="immagine-show">
    <img src="{{ $artist->image }}" alt="{{ $artist->name }}">
  </div>

  @foreach ($artist->albums as $album)
    <a href="{{ route('albums.show' , $album) }}">Visualizza album</a>
  @endforeach

  <div>
    <a href="{{ route('albums.index') }}">Home</a>
  </div>

@endsection
