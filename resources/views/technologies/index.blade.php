@extends('layouts.app')

@section('content')
<div class="container py-4">
    <a class="btn btn-primary my-4" href="{{ route('technologies.create') }}">Aggiungi Tecnologia</a>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-gap-4">
        @foreach($technologies as $technology)
        <div class="col">
            <x-technology-card>
                <x-slot:name>{{ $technology->name }}</x-slot>
                <x-slot:created_at>{{ $technology->created_at }}</x-slot>
                <x-slot:color>{{ $technology->color }}</x-slot:color>
            </x-technology-card>
        </div>
        @endforeach
    </div>
</div>
@endsection