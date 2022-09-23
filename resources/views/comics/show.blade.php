@extends('layouts.main')
@section('title', $comic->title)
@section('content')

<div class="container">
    <div class="card p-4">
        <h1 class="card-title">{{$comic->title}}</h1>
        <h4 class="card-subtitle text-muted">Serie:{{$comic->series}}</h4>
        <h4 class="card-subtitle text-muted">Genere: {{$comic->type}}</h4>
        <div class="row mt-3">
            <div class="col-4 mb-3">
                <img class="image-fluid rounded"src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </div>
            <div class="col-8">
                <p class="">{{$comic->description}}</p>
                

            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
            <div>
                    <a class="btn  btn-secondary me-2"href="{{route('comics.index')}}">Torna ai Comics</a>
                </div>
                <div class="price">

                    <span>${{$comic->price}}</span>
                </div>
                <div class="utility-buttons d-flex">
                     <a href="{{route('comics.edit', $comic->id)}}"class="btn btn-secondary rounded-pill me-2">Modifica</a>
                     <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                         @csrf
                         @method('DELETE')
                        <button type="submit"class="btn btn-danger rounded-pill">Cancella</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
    

@endsection