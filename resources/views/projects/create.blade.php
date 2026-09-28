@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2>Aggiungi un nuovo post</h2>
        <form action="{{ route('projects.store') }}" method="POST" class="form-control mb-4 d-flex flex-column">
            @csrf
            <label for="title" class="form-label">Titolo</label>
            <input class="form-control" name="title" id="title" type="text">
            <label for="type_id" class="form-label">Tipo di progetto</label>
            <select name="type_id" id="type_id" class="form-select">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
            <div class="technologies my-2">
                <label class="form-label">Tecnologie usate</label>
                <div class="d-flex flex-wrap">
                    @foreach ($technologies as $technology)
                    <div class="group mx-2">
                        <input type="checkbox" 
                        name="technologies[]" 
                        value="{{ $technology->id }}" 
                        id="technology-{{ $technology->id }}">
                        <label class="form-label" for="technology-{{ $technology->id }}">
                            {{ $technology->name }}
                        </label>
                    </div>
                    @endforeach
                </div>

            </div>
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control mb-3" name="description" id="description"></textarea>
            <input class="btn btn-primary" type="submit" value="Aggiungi">
        </form>
    </div>
@endsection