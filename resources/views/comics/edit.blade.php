@extends('layouts.main')
@section('title', 'Modifica comic')
@section('content')
<div class="container">
    <div class="card p-3">
        <h1>Modifica il tuo fumetto</h1>
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-4">

                    <!--INPUT Thumb-->

                    <label for="thumb" class="form-label ">Thumb</label>
                    <input type="text" class="form-control mb-5" id="title" name="thumb" placeholder="Thumb link" value="{{$comic->thumb}}">
                    <img calss="img-fluid"src="{{$comic->thumb}}" alt="{{$comic->title}}">
                </div>
                <div class="col-8 px-5 py-2">
                    <div class="mb-3">
                        <!--INPUT TITOLO-->

                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo del comics" value="{{$comic->title}}">

                        <!--INPUT Prezzo-->

                        <label for="price" class="form-label">Prezzo</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Prezzo del comics" min="0" value="{{$comic->price}}" step="0.1" >
                        
                        <!--INPUT Serie-->

                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" placeholder="Serie" value="{{$comic->series}}">
                       
                        <!--INPUT Data di vendita-->

                        <label for="sale_date" class="form-label">data di vendita</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="YYYY-MM-DD" value="{{$comic->sale_date}}">

                        <!-- INPUT Genere -->            

                        <label for="type" class="form-label">Genere</label>
                        <input type="text" class="form-control" id="type" name="type" placeholder="Genere" value="{{$comic->type}}">

                    </div>
                    <div class="mb-3">

                             <!--INPUT Descrizione-->    

                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" rows="8" name="description" >{{$comic->description}}</textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
                <div>
                    <a class="btn  btn-secondary me-2"href="{{route('comics.index')}}">Torna ai Comics</a>
                </div>
                <div>

                    <button class="btn btn-success me-2" type="subimit">Salva modifiche</button>
                    <button class="btn btn-danger" type="reset">Cancella</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection