@extends('layout.app')

@section('title', 'Aggiungi un nuovo Fumetto')

@section('main')
    <div class="container">
        <form class="my-5" action="{{route('comics.update', ['comic' => $comic->id])}}" method="POST">
            {{-- Sicurezza CSRF  --}}
            @csrf 
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $comic->title)}}"/>
                @error('title')
                    <div class='invalid-feedback alert alert-danger p-1'>
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="5">{{old('description', $comic->description)}}</textarea>
                @error('description')
                    <div class='invalid-feedback alert alert-danger p-1'>
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb', $comic->thumb)}}"/>
                @error('thumb')
                    <div class='invalid-feedback alert alert-danger p-1'>
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price', $comic->price)}}"/>
                @error('price')
                    <div class='invalid-feedback alert alert-danger p-1'>
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series', $comic->series)}}"/>
                @error('series')
                    <div class='invalid-feedback alert alert-danger p-1'>
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}"/>
                @error('sale_date')
                    <div class='invalid-feedback alert alert-danger p-1'>
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type', $comic->type)}}"/>
                @error('type')
                    <div class='invalid-feedback alert alert-danger p-1'>
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-success mt-4">Applica Modifiche</button>
            <a class="btn btn-primary mt-4 d-inline-block" href="{{route('comics.index')}}">Torna alla lista di tutti i fumetti</a>
            
        </form>
    </div>
@endsection