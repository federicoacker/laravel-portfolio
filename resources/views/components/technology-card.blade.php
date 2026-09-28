<div class="card text-white" style="background-color:{{ $tech->color }}">

    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <div class="card-title">{{ $tech->name }}</div>
            <div class="buttons d-flex gap-1">
                <a class="btn btn-warning px-1 py-0" href="{{ route('technologies.edit', $tech) }}">Modifica</a>
                <button type="button" class="btn btn-danger px-1 py-0" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $tech->id }}">
                    Elimina
                </button>
            </div>
        </div>
        <div class="card-footer">
            <div class="card-text">{{ $tech->created_at }}</div>
        </div>

        <div class="modal fade" id="deleteModal-{{ $tech->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteModalLabel">Elimina la tecnologia?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sei sicuro di voler eliminare la tecnologia: {{ $tech->name }} ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <form action="{{ route('technologies.destroy', $tech) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <input type="submit" class="btn btn-danger" value="Elimina Definitivamente">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>