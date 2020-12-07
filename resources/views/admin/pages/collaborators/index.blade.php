@extends('admin.layouts.app')

@section('title', 'Colaboradores')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="list-group">
                    <a href="{{ url('home') }}" class="list-group-item list-group-item-action">{{ __('Painel') }}</a>
                    <a href="{{ url('collaborators') }}" class="list-group-item list-group-item-action active">{{ __('Colaboradores') }}</a>
                    <a href="{{ url('#') }}" class="list-group-item list-group-item-action">{{__('Menu') }}</a>
                    <a href="{{ url('#') }}" class="list-group-item list-group-item-action">{{__('Menu') }}</a>
                </div>
            </div>
            <div class="col-md-10">
                <h1><small class="text-muted">Exibindo os colaboradores</small></h1>
                <a href="{{ route('collaborators.create') }}" class="btn btn-primary">Cadastrar</a>
                <form action="{{ route('collaborators.search') }}" method="post" class="form form-inline">
                    @csrf
                    <input type="text" name="filter" placeholder="Filtrar por CPF:" class="form-control" value="{{ $filters['filter'] ?? ""}}">
                    <button type="submit" class="btn btn-info">Pesquisar</button>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>CPF</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Data de nascimento</th>
                            <th>Endereço</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($collaborators as $collaborator)
                            <tr>
                                <td>{{ $collaborator->cpf }}</td>
                                <td>{{ $collaborator->name }}</td>
                                <td>{{ $collaborator->email }}</td>
                                <td>{{ $collaborator->telephone }}</td>
                                <td>{{ $collaborator->birth }}</td>
                                <td>{{ $collaborator->address }}</td>
                                <td>
                                    <a href="{{ route('collaborators.edit', $collaborator) }}">Editar</a>
                                    <a href="{{ route('collaborators.show', $collaborator) }}">Detalhes</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @if(isset($filters))
                    {!! $collaborators->appends($filters)->links() !!} <!--Paginação-->
                @else
                    {!! $collaborators->links() !!} <!--Paginação-->
                @endif
            </div>
        </div>
    </div>

@endsection

@section('footer')
    <p>Copyright © <?php echo date("Y"); ?></p>
@endsection