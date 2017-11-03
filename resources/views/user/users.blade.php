@extends('layouts.menu')
@section('title', 'Usuários')

@section('content')

<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading"><h4>Usuários</h4></div>
	</div>
</div>

<div class="row">
	@if(session('alerta'))
	<div class="alert alert-{{session('alerta')['tipo']}}">
		<a href="" class="close" data-dismiss="alert">&times;</a>
		<strong>Atenção: </strong>{{session('alerta')['msg']}}
	</div>
	@endif
	<table class="table table-striped table-hover table-bordered" id="table">
		<thead>
			<tr>
				<th>Perfil:</th>
				<th>Name:</th>
				<th>CPF:</th>
				<th>E-mail:</th>
				<th><center>Ações:</center></th>
			</tr>			
		</thead>
		<tbody>

			@foreach($usuarios as $u)
			<tr>
				<td>{{$u->isAdmin() ? 'Administrador' : 'Usuário'}}</td>
				<td>{{$u->name}}</td>
				<td>{{$u->cpf}}</td>
				<td>{{$u->email}}</td>
				<td align="center">
					<a href="{{route('user.detalhes', $u->id)}}" class="btn btn-link" style="color: #0066ff;" title="visualizar"><i class="glyphicon glyphicon-eye-open"></i></a>
					<a href="#" class="btn btn-link" style="color: #cc6600;" title="editar"><i class="glyphicon glyphicon-edit"></i></a>
					<a href="{{route('user.deletar', $u->id)}}" class="btn btn-link" style="color: #b30000;" title="remover"><i class="glyphicon glyphicon-remove"></i></a>
				</td>
			</tr>
			@endforeach
			
		</tbody>
		<tfoot>
			<tr>
				<th>Perfil:</th>
				<th>Name:</th>
				<th>CPF:</th>
				<th>E-mail:</th>
				<th><center>Ações:</center></th>
			</tr>			
		</tfoot>
	</table>
</div>

@endsection
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	});
</script>