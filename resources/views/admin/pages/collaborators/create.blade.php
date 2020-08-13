@extends('admin.layouts.app')

@section('title', 'Cadastro de novo colaborador')

@section('content')
    <h1>Cadastrar novo colaborador</h1>

    <form action="{{ route('collaborators.store') }}" method="post">
        @include('admin.pages.collaborators._partials.form')
    </form>

@endsection
