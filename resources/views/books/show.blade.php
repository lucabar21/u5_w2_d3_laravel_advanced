@extends('templates.template')
@section('title', 'Dettaglio libro')

@section('main-content')
<h1>{{ $book->title }}</h1>
    <h2>Autore: {{ $book->author }}</h2>
    <img src="{{ $book->img }}" alt="">
@endsection