@extends('admin.layouts.app')

@section('title', 'Cadastro de novo colaborador')

@section('content')
    <div class="container-fluid">
        <h1><small class="text-muted">Cadastrar novo colaborador</small></h1>

        <form action="{{ route('collaborators.store') }}" method="post">
            @include('admin.pages.collaborators._partials.form')
        </form>
    </div>
@endsection

@section('footer')
    <p>Copyright © <?php echo date("Y"); ?></p>    
@endsection