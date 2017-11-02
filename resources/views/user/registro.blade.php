<!DOCTYPE html>
<html>
<head>
	<title>Registro de usário</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.toast.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<a class="navbar-brand" href="#">MySystem</a>
			<ul class="nav navbar-nav">
				
			</ul>
		</div>
	</nav>

	<div class="container" style="margin-top: 60px;">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Cadastro de Usuário</h3>
					</div>
					<div class="panel-body">
						@if(session('alerta'))
						<div class="alert alert-{{session('alerta')['tipo']}}">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Atenção: </strong> {{session('alerta')['msg']}}
						</div>
						@endif
						<form class="form-horizontal" id="form" method="POST" action="{{route('user.registrar')}}">
							{{csrf_field()}}
							<div class="form-group">
								<label class="control-label col-xs-2" for="name">*Nome:</label>
								<div class="col-xs-10">
									<input class="form-control" type="text" name="name" id="name" value="{{old('name')}}">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-2" for="cpf">*CPF:</label>
								<div class="col-xs-10">
									<input class="form-control cpf" type="text" name="cpf" id="cpf" value="{{old('cpf')}}">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-2" for="email">*E-mail:</label>
								<div class="col-xs-10">
									<input class="form-control" type="text" name="email" id="email" value="{{old('email')}}">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-2" for="password">*Senha:</label>
								<div class="col-xs-10">
									<input class="form-control" type="password" name="password" id="password">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-2" for="c_password">*Confirma Senha:</label>
								<div class="col-xs-10">
									<input class="form-control" type="password" name="c_password" id="c_password">
								</div>
							</div>
							<div class="text-center">
								(campos com * são obrigatórios.)
							</div>
							<div class="text-right">
								<button type="button" class="btn btn-warning btn-sm" onclick="javascript:history.back();">		Cancelar
								</button>
								<button type="submit" class="btn btn-success btn-sm" id="btn_salvar">Salvar</button>
							</div>
						</form>						
					</div>
				</div>
			</div>
		</div>		
	</div>


	<!-- scripts -->
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.mask.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.toast.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/localization/messages_pt_BR.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/global.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/registro.js')}}"></script>
</body>
</html>