@extends('layouts.app')

@section('content')
<div class="container py-4">
    <a class="btn btn-primary my-4" href="{{ route('types.create') }}">Aggiungi Tipo</a>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-gap-4">
        @foreach($types as $type)
        <div class="col">
            <x-type-card>
                <x-slot:name>{{ $type->name }}</x-slot>
                <x-slot:created_at>{{ $type->created_at }}</x-slot>
                <x-slot:link>{{ route('types.show', $type) }}</x-slot>
            </x-type-card>
        </div>
        @endforeach
    </div>
</div>
@endsection