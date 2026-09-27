@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2>Modifica il tipo</h2>
        <form action="{{ route('types.update', $type) }}" method="POST" class="form-control mb-4 d-flex flex-column">
            @csrf
            @method("PUT")
            <label for="name" class="form-label">Nome</label>
            <input class="form-control" name="name" id="name" type="text" value="{{ $type->name }}">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control mb-3" name="description" id="description">{{ $type->description }}</textarea>
            <input class="btn btn-primary" type="submit" value="Modifica">
        </form>
    </div>
@endsection