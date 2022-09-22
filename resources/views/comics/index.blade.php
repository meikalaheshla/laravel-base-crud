@extends('layouts.main')
@section('title', 'Comics')
@section('content')
<div class="container">
    <div class="card">
        @dump($comics)
        ciao
    </div>
</div>
@endsection