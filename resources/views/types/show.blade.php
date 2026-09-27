@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="h1">{{ $type->name }}</div>
        <div class="d-flex my-3 gap-3">
            <a class="btn btn-warning" href="{{ route('types.edit', $type) }}">Modifica</a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                Elimina
            </button>
        </div>
        <div class="d-flex justify-content-between">
            <div class="h3 text-secondary">{{ $type->created_at }}</div>
        </div>
        <p>{{ $type->description }}</p>
    </div>


    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Elimina il tipo?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler eliminare il tipo?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{ route('types.destroy', $type) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-danger" value="Elimina Definitivamente">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection