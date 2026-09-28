@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2>Modifica la tecnologia</h2>
        <form action="{{ route('technologies.update', $technology) }}" method="POST" class="form-control mb-4 d-flex flex-column">
            @csrf
            @method("PUT")
            <label for="name" class="form-label">Nome</label>
            <input required class="form-control" name="name" id="name" type="text" value="{{ $technology->name }}">
            <div class="d-flex my-4">
                <label for="color" class="form-label me-2">Colore</label>
                <input type="color" class="form-control w-25" name="color" id="color" value="{{ $technology->color }}">
            </div>
            <input class="btn btn-primary" type="submit" value="Modifica">
        </form>
    </div>
@endsection