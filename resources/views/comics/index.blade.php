@extends('layouts.main')
@section('title', 'Comics')
@section('content')

<div class="container">
    <div class="row">
        @forelse($comics as $comic)
        <div class="col-3">
    <div class="card mb-3">
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
        <div class="card-footer">
        <small class="text-muted">${{$comic->price}}</small>
        
        </div>
    </div>
</div>
 @empty
 <div class="card">
    <h1>NON CI SONO FUMETTI DISPONIBILI</h1>
 </div>
 @endforelse
        </div>
    </div>
</div>

@endsection