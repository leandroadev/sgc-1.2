@extends('admin.layouts.app')

@section('title', "Editar Colaborador {$collaborator->name}")
    
@section('content')
    <h1>Editar Colaborador {{ $collaborator->name }}</h1>
    <form action="{{ route('collaborators.update', $collaborator->id) }}" method="post">
        @method('PUT')
        @include('admin.pages.collaborators._partials.form')
    </form>
@endsection