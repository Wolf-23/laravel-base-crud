@extends('layout.app')

@section('title', 'Lista dei fumetti')

@section('main')
    <div class="container">
        <a class="mt-3 d-inline-block btn btn-success" href="{{route('comics.create')}}">Aggiungi un nuovo fumetto</a>

        <table class="table mt-4 table-dark">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col" class="myTable">Description</th>
                <th scope="col">Thumb</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale Date</th>
                <th scope="col">Type</th>
                <th scope="col">BTN</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr class="table-secondary">
                        <th scope="row">{{$comic->id}}</th>
                        <td>{{$comic->title}}</td>
                        <td class="myTable">{{$comic->description}}</td>
                        <td>{{$comic->thumb}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                        <td><a class="btn btn-success" href="{{route('comics.show', ['comic' => $comic->id])}}">Vedi</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection