@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2>Modifica il post</h2>
        <form action="{{ route('projects.update', $project) }}" method="POST" class="form-control mb-4 d-flex flex-column" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <label for="title" class="form-label">Titolo</label>
            <input class="form-control" name="title" id="title" type="text" value="{{ $project->title }}">
            <label for="type_id" class="form-label">Tipo di progetto</label>
            <select name="type_id" id="type_id" class="form-select">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : ''}}>{{ $type->name }}
                    </option>
                @endforeach
            </select>
            <div class="technologies my-2">
                <label class="form-label">Tecnologie usate</label>
                <div class="d-flex flex-wrap">
                    @foreach ($technologies as $technology)
                        <div class="group mx-2">
                            <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                                id="technology-{{ $technology->id }}" {{ $project->technologies->contains($technology->id) ? 'checked' : '' }}>
                            <label class="form-label" for="technology-{{ $technology->id }}">
                                {{ $technology->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control mb-3" name="description" id="description">{{ $project->description }}</textarea>
            <label for="image" class="form-label">Immagine</label>
            <input class="form-control" type="file" id="image" name="image">
            @if($project->image)
            <img src="{{ asset('storage/' . $project->image) }}" alt="copertina" class="cover-image"/>
            @endif
            <input class="btn btn-primary mt-2" type="submit" value="Modifica">
        </form>
    </div>
@endsection