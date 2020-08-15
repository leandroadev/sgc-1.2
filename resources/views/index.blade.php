@extends('layouts.app')

@section('title', 'Sistema')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Bem-vido ao sistema de gestão de colaboradores</h5>
                <p class="card-text">Faça login no sistema para gerenciar os colaboradores do CEAD/IFNMG</p>
                <p class="card-text">Se não tiver acesso contate o admintrador do sistema</p>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
    <p>Copyright © <?php echo date("Y"); ?></p>    
@endsection