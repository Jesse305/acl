<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{route('user.registro')}}"><i class="glyphicon glyphicon-user"> Registrar</i></a></li>
			</ul>
		</div>
	</nav>

	<div class="container" style="margin-top: 60px;">
		<div class="row" style="margin-top: 40px;">
			<div class="col-xs-12 col-md-6 col-md-offset-3">
				@if(session('alerta'))
				<div class="alert alert-{{session('alerta')['tipo']}}">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					<strong>Atenção: </strong>{{session('alerta')['msg']}}
				</div>
				@endif
				<div class="panel panel-primary">
					<div class="panel-heading"><strong>Entrar</strong></div>
					<div class="panel-body">

						<form class="form-horizontal" id="form" method="POST" action="{{route('autenticar')}}">
							{{csrf_field()}}
							<div class="form-group">
								<label for="cpf" class="control-label col-xs-2">CPF:</label>
								<div class="col-xs-10">
									<input class="form-control cpf" type="text" name="cpf" id="cpf" value="{{old('cpf')}}">
								</div>
							</div>

							<div class="form-group">
								<label for="password" class="control-label col-xs-2">Password:</label>
								<div class="col-xs-10">
									<input class="form-control" type="password" name="password" id="password">
								</div>
							</div>

							<div class="text-center">
								<button type="submit" class="btn btn-primary btn-sm" id="btn_entrar">Entrar</button>
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
	<script type="text/javascript" src="{{asset('js/login.js')}}"></script>
</body>
</html>