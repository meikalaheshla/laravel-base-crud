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
                <div class="price">

                    <span>${{$comic->price}}</span>
                </div>
                <div class="utility-buttons">
                     <a href="{{route('comics.edit', $comic->id)}}"class="btn btn-secondary rounded-pill">Modifica</a>
                     <button class="btn btn-danger rounded-pill">Cancella</button>
                </div>
            </div>
        </div>


    </div>
    

@endsection