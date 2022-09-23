@extends('layouts.main')
@section('title', 'Comics')
@section('content')

<div class="container">
    <h1 class="display-4 fw-semibold text-danger">Tutti i nostri fumetti</h1>
    <div class="buttons d-flex align-items-center justify-content-end mb-5">
                <a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi un fumetto</a>
            </div>
    <div class="row">
        @forelse($comics as $comic)
        <div class="col-3">
            <a class="text-dark" href="{{route('comics.show', $comic->id)}}">
                
                <div class="card mb-3 ">
                    @if($comic->thumb)
                    <img class="card-img-top" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <h5 class="card-subtitle">{{$comic->series}}</h5>
                        <h5 class="card-subtitle">{{$comic->sale_date}}</h5>
                        <h5 class="card-subtitle">{{$comic->type}}</h5>
                        
                        <p class="card-text text-truncate">{{$comic->description}}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center ">
                        <div class="price">
                            <small class="text-muted">${{$comic->price}}</small>
                        </div>
                        <div class="utility-buttons">
                            <a href="{{route('comics.edit', $comic->id)}}"class="btn btn-secondary rounded-pill">Modifica</a>
                            <button class="btn btn-danger rounded-pill">Cancella</button>
                        </div>


                        
                    </div>
                </a>
            </div>
        </div>
        
        @empty
        <div class="card">
            <h1>NON CI SONO FUMETTI DISPONIBILI</h1>
            </div>
            @endforelse
            <div class="buttons d-flex align-items-center justify-content-end mb-5">
                <a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi un fumetto</a>
            </div>
        </div>
    </div>
</div>

@endsection