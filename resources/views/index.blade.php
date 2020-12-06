@extends('layouts.app')

@section('title', 'Página inicial')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
              <h5 class="card-header">Bem-vindo ao sistema de gestão de colaboradores</h5>
              <div class="card-body">
                <p class="card-text">Faça login no sistema para gerenciar os colaboradores de sua instituição.</p>
                <p class="card-text">Se não tiver acesso, contate o admintrador do sistema.</p>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
    <p>Copyright © <?php echo date("Y"); ?></p>
@endsection
