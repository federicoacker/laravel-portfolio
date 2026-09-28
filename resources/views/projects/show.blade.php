@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="h1">{{ $project->title }}</div>
        <div class="d-flex my-3 gap-3">
            <a class="btn btn-warning" href="{{ route('projects.edit', $project) }}">Modifica</a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                Elimina
            </button>
        </div>
        <div class="d-flex justify-content-between">
            <div class="h3 text-secondary">{{ $project->tag }}</div>
            <div class="h3 text-secondary">{{ $project->created_at }}</div>
        </div>
        <hr>
        @if(count($project->technologies) > 0)
        <div class="technologies">
            <small>Technologie usate:</small>
            <div class="d-flex">
                @foreach ($project->technologies as $technology)
                    <span class="badge mx-1" style="background-color:{{ $technology->color }}; color:black">{{ $technology->name }}</span>
                @endforeach
            </div>
        </div>
        @endif
        @if($project->type)
            <div class="d-flex gap-2">
                <h3>Tipo di Progetto: </h3>
                <a href="{{ $project->type ? route('types.show', $project->type) : '' }}">
                    <h3>{{ $project->type?->name ?? "Non c'è nessun tipo assegnato a questo progetto"}}</h3>
                </a>
            </div>
        @endif
        <hr>
        <p>{{ $project->description }}</p>
    </div>


    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Elimina il progetto?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler eliminare il progetto?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-danger" value="Elimina Definitivamente">
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection