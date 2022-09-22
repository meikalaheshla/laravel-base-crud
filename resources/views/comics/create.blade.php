@extends('layouts.main')
@section('title', 'Aggiungi comic')
@section('content')
<div class="container">
    <div class="card p-3">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-4">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" id="title" name="thumb" placeholder="Thumb link">
                    <img src="" alt="">
                </div>
                <div class="col-8 px-5 py-2">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo del comics">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Prezzo del comics" min="0" value="0" step="0.1">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" placeholder="Serie">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" placeholder="Serie">
                        <label for="sale_date" class="form-label">data di vendita</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="YYYY-MM-DD">
                        <label for="type" class="form-label">Genere</label>
                        <input type="text" class="form-control" id="type" name="type" placeholder="Genere">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" rows="8" name="description"></textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
                <div>
                    <a class="btn  btn-secondary me-2"href="{{route('comics.index')}}">Torna ai Comics</a>
                </div>
                <div>

                    <button class="btn btn-primary me-2" type="subimit">Aggiungi</button>
                    <button class="btn btn-danger" type="reset">Cancella</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection