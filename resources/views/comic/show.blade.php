@extends('layout.app')


@section('title', 'Fumetto Selezionato')


@section('main')

    <div class="container">
        <h1 class="mt-5 mb-3">Dettagli del fumetto: {{$comic->title}}</h1>
        <img class="mb-3" src="{{$comic->thumb}}" alt="{{$comic->title}}" />
        <div class="mb-3"><span class="d-inline-block text-uppercase fs-5 fw-bold">Description:</span> {{$comic->description}}</div>
        <div class="mb-3"><span class="d-inline-block text-uppercase fs-5 fw-bold">Price:</span> {{$comic->price}}</div>
        <div class="mb-3"><span class="d-inline-block text-uppercase fs-5 fw-bold">Series:</span> {{$comic->series}}</div>
        <div class="mb-3"><span class="d-inline-block text-uppercase fs-5 fw-bold">Sale Date:</span> {{$comic->sale_date}}</div>
        <div class="mb-3"><span class="d-inline-block text-uppercase fs-5 fw-bold">Type:</span> {{$comic->type}}</div>
        <a class="btn btn-danger mt-4 d-inline-block" href="{{route('comics.index')}}">Torna alla lista di tutti i fumetti</a>
    </div>

@endsection