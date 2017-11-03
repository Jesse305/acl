@extends('layouts.menu')

@section('title', 'Detalhes do Usuário')

@section('content')

<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading"><h4>Detalhes do Usuário</h4></div>
	</div>
</div>

<div class="row">
	<table class="table table-bordered table-striped table-hover table-responsive">
		<tr>
			<td><b>Perfil:</b> {{$usuario->isAdmin() ? 'Administrador' : 'Usuário'}}</td>
			<td><b>Nome:</b> {{$usuario->name}}</td>
			<td><b>CPF:</b> {{$usuario->cpf}}</td>
			<td><b>E-mail:</b> {{$usuario->email}}</td>
		</tr>
	</table>
</div>

@if(!$usuario->isAdmin())
<div class="row">
	<label>Permissões:</label>
	<form id="addPermissao" method="POST" action="">
		@foreach($permissaos as $perm)
		<label class="checkbox-inline"><input type="checkbox" name="permissaos[]" value="{{$perm->id}}"
		>{{$perm->tipo}}</label>
		@endforeach		
	</form>
</div>
@endif
@endsection