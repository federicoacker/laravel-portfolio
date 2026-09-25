@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-gap-4">
        @foreach($projects as $project)
        <div class="col">
            <x-project-card>
                <x-slot:title>{{ $project['title'] }}</x-slot>
                <x-slot:tag>{{ $project['tag'] }}</x-slot>
                <x-slot:description>{{ $project['description'] }}</x-slot>
                <x-slot:created_at>{{ $project['created_at'] }}</x-slot>
            </x-project-card>
        </div>
        @endforeach
    </div>
</div>
@endsection