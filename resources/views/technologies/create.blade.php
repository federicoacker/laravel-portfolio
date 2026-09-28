@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2>Aggiungi una nuova tecnologia</h2>
        <form action="{{ route('technologies.store') }}" method="POST" class="form-control mb-4 d-flex flex-column">
            @csrf
            <label for="name" class="form-label">Nome</label>
            <input required class="form-control" name="name" id="name" type="text">
            <div class="d-flex my-4">
                <label for="color" class="form-label me-2">Colore</label>
                <input type="color" class="form-control w-25" name="color" id="color">
            </div>
            <input class="btn btn-primary" type="submit" value="Aggiungi">
        </form>
    </div>
@endsection