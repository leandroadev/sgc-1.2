@include('admin.includes.alerts')

@csrf
<div class="form-group">
    <input type="text" class="form-control" name="cpf" placeholder="CPF:" value="{{ $collaborator->cpf ?? old('cpf') }}">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="Nome:" value="{{ $collaborator->name ?? old('name') }}">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="email" placeholder="E-mail:" value="{{ $collaborator->email ?? old('email') }}">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="telephone" placeholder="Telefone:" value="{{ $collaborator->telephone ?? old('telephone') }}">
</div>
<div class="form-group">
    <input type="date" class="form-control" name="birth" placeholder="Data de nascimento:" value="{{ $collaborator->birth ?? old('birth') }}">
</div>
<div class="form-group">
    <input type="text" class="form-control" name="address" placeholder="Endereço:" value="{{ $collaborator->address ?? old('address') }}">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success">Enviar</button>
    <a href="{{ route('collaborators.index') }}" class="btn btn-danger">Cancelar</a>
</div>