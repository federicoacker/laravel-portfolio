@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2>Aggiungi un nuovo post</h2>
        <form action="{{ route('projects.store') }}" method="POST" class="form-control mb-4 d-flex flex-column">
            @csrf
            <label for="title" class="form-label">Titolo</label>
            <input class="form-control" name="title" id="title" type="text">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control mb-3" name="description" id="description"></textarea>
            <input class="btn btn-primary" type="submit" value="Aggiungi">
        </form>
    </div>
@endsection