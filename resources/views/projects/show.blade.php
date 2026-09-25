@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="h1">{{ $project->title }}</div>
    <div class="d-flex justify-content-between">
        <div class="h3 text-secondary">{{ $project->tag }}</div>
        <div class="h3 text-secondary">{{ $project->created_at }}</div>
    </div>
    <hr>
    <p>{{ $project->description }}</p>
</div>
@endsection