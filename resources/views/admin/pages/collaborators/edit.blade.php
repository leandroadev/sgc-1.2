@extends('admin.layouts.app')

@section('title', "Editar Colaborador {$collaborator->name}")

@section('content')
<div class="container-fluid">
    <h1><small class="text-muted">Editar Colaborador: {{ $collaborator->name }}</small></h1>
    <form action="{{ route('collaborators.update', $collaborator->id) }}" method="post">
        @method('PUT')
        @include('admin.pages.collaborators._partials.form')
    </form>
</div>
@endsection
