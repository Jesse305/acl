<!DOCTYPE html>
<html>
<head>
	<title>MySystem - @yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.toast.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.dataTables.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">MySystem</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					@if(Auth::user()->isAdmin())
					<li><a href="{{route('user.listar')}}">Usuários</a></li>
					@endif					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                        	<li>
                        		<a href="#" onclick="return false;">
                            		<strong>Perfil: </strong>{{Auth::user()->isAdmin() ? 'Administrador' : 'Usuário'}}
                            	</a>
                        	</li>
                        	<li>
                        		<a href="#"> <i class="glyphicon glyphicon-user"> Meu Cadastro</i></a>
                        	</li>
                            <li>                            	
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="glyphicon glyphicon-log-out"></i> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>					
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

	<div class="container">
		@yield('content')		
	</div>

	<!-- scripts -->
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.mask.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.toast.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/localization/messages_pt_BR.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.dataTables.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/global.js')}}"></script>
</body>
</html>