@extends('layout.app')

@section('title', 'Aggiungi un nuovo Fumetto')

@section('main')
    <div class="container">
        <form class="mt-5" action="{{route('comics.store')}}" method="POST">
            {{-- Sicurezza CSRF  --}}
            @csrf 

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" />
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control" rows="5"></textarea>
            </div>
            
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" />
            </div>
            
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" />
            </div>
            
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" />
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" />
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" />
            </div>
            
            <button type="submit" class="btn btn-success">Inserisci Fumetto</button>
            <a class="btn btn-primary d-inline-block" href="{{route('comics.index')}}">Annulla</a>
            
        </form>
    </div>
@endsection