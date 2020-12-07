@extends('admin.layouts.app')

@section('title', "Detalhes do colaborador {$collaborator->name}")

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <h1><small class="text-muted">Detalhes do colaborador: {{ $collaborator->name }}</small></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <ul class="list-group">
                <li class="list-group-item"><strong>CPF: </strong>{{ $collaborator->cpf }}</li>
                <li class="list-group-item"><strong>Nome: </strong>{{ $collaborator->name }}</li>
                <li class="list-group-item"><strong>E-mail: </strong>{{ $collaborator->email }}</li>
                <li class="list-group-item"><strong>Telefone: </strong>{{ $collaborator->telephone }}</li>
                <li class="list-group-item"><strong>Data de nascimento: </strong>{{ $collaborator->birth }}</li>
                <li class="list-group-item"><strong>Endereço: </strong>{{ $collaborator->address }}</li>
            </ul>
        </div>
    </div>
    <div>
        <form action="{{ route('collaborators.destroy', $collaborator->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar</button>
            <a href="{{ route('collaborators.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</div>

@endsection

@section('footer')
    <p>Copyright © <?php echo date("Y"); ?></p>    
@endsection