@extends('layouts.layout')

@section('main-content')
  <div>
    <a href="{{ route('home') }}">Home</a>
  </div>

  <h1 class="flex-center">Lista artisti</h1>

  <div class="artist-flex">

    @foreach ($artists as $artist)

      <div class="artist-block">
        <a href="{{ route('artists.show' , $artist) }}">
          <h2>Nome originario: {{ $artist->name }}</h2>
          <p>Anno di nascita: {{ $artist->year }}</p>
          <p>Descrizione: {{ $artist->description }}</p>
          <img src="{{ $artist->image }}" alt="{{ $artist->name }}">
          <br>
          @foreach ($artist->albums as $album)
            <a href="{{ route('albums.show' , $album) }}"class="link-list">Visualizza album</a>
          @endforeach
        </a>
      </div>

    @endforeach

  </div>
@endsection
