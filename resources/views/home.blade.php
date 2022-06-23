@extends('layout.main')

@section('content')

<main>
  <div class="jumbotron"></div>
   <div class="prova">
      <div class="w-70 cards-container">

        @foreach ($comics as $comic )
        
          <div class="wrapper">
            <div class="img-container">
            <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
            </div>
            <p>{{ $comic->title }}</p>
          </div>

        @endforeach
        <button><a href="#">LOAD MORE</a></button>
      </div>
  </div>
</main>

@endsection