@extends('layouts.layout')

@section('main-content')
  <div class="flex-center">
    <h1>MENU'</h1>
  </div>

  <div class="artist-flex">
    <div class="artist-block">
      <a href="{{ route('artists.index') }}">Artisti</a>
    </div>
    <div class="artist-block">
      <a href="{{ route('albums.index') }}">Albums</a>
    </div>
    <div class="artist-block">
      <a href="{{ route('songs.index') }}">Canzoni</a>
    </div>
  </div>
@endsection
