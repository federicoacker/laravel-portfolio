@extends('layouts.app')

@section('content')
<div class="container py-4">
    <a class="btn btn-primary my-4" href="{{ route('technologies.create') }}">Aggiungi Tecnologia</a>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-gap-4">
        @foreach($technologies as $technology)
        <div class="col">
            <x-technology-card :tech="$technology"/>
        </div>
        @endforeach
    </div>
</div>
@endsection