@extends('layout.app')

@section('title', 'Aggiungi un nuovo Fumetto')

@section('main')
    <div class="container">
        <form class="mt-3" action="{{route('comics.update', ['comic' => $comic->id])}}" method="POST">
            {{-- Sicurezza CSRF  --}}
            @csrf 
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}"/>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control" rows="5">{{$comic->description}}</textarea>
            </div>
            
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}"/>
            </div>
            
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}"/>
            </div>
            
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}"/>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}"/>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}"/>
            </div>
            
            <button type="submit" class="btn btn-success mt-4">Applica Modifiche</button>
            <a class="btn btn-primary mt-4 d-inline-block" href="{{route('comics.index')}}">Torna alla lista di tutti i fumetti</a>
            
        </form>
    </div>
@endsection