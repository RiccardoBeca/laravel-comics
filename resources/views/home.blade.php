@extends('layout.main')

@section('content')

<main>
  <div class="jumbotron"></div>
   <div class="prova">
      <div class="w-70 cards-container">
        <CardComp
         v-for="(book, index) in booksList" :key="`book${index}`"
         :thumb="book.thumb"
         :series="book.series"
        />  
        <button><a href="#">LOAD MORE</a></button>
      </div>
  </div>
  
</main>

@endsection