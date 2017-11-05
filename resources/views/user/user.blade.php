@extends('layouts.menu')

@section('title', 'Detalhes do Usuário')

@section('content')

<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading"><h4>Detalhes do Usuário</h4></div>
	</div>
</div>

@if(session('alerta'))
<div class="row">
	<div class="alert alert-{{session('alerta')['tipo']}}">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Atenção: </strong> {{session('alerta')['msg']}}
	</div>
</div>
@endif

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

@if(Auth::user()->isAdmin())
	@if(!$usuario->isAdmin())
		<div class="row">
			<label>Permissões:</label>
			<form id="addPermissao" method="POST" action="{{route('user.permissoes', $usuario)}}">
				{{csrf_field()}}
				@foreach($permissaos as $perm)
				<label class="checkbox-inline"><input type="checkbox" name="permissaos[]" value="{{$perm->id}}"
					@foreach($usuario->permissoes as $p)
						@if($p->id == $perm->id) checked @endif
					@endforeach
				>{{$perm->tipo}}</label>
				@endforeach
				<div class="pull-right">
					<button type="submit" class="btn btn-success btn-sm" id="btn_perm">Aplicar</button>
				</div>	
			</form>
		</div>
	@endif
@endif
@endsection