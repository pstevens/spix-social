<!DOCTYPE html>
<html>

	<head>

		<title>Spix Social</title>

		<!-- meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- stylesheets -->
		{{ HTML::style('http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css') }}
		{{ HTML::style('http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css') }}

	</head>

	<body>

		<!-- menu -->
		<nav class="navbar navbar-default" role="banner">
			<div class="container-fluid">

				<!-- toogle menu -->
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					{{ HTML::link('/', 'Spix Social', array('class'=>'navbar-brand')) }}
				</div>

				<!-- navbar menu -->
				<div class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

					<!-- left side -->
					<ul class="nav navbar-nav">
						<li></li>
					</ul>

					<!-- right side -->
					<p class="navbar-text navbar-right">
						@if(Auth::check())
							<span class="glyphicon glyphicon-user"></span>
							{{ Auth::user()->email }}
							&nbsp;
							<span class="glyphicon glyphicon-trash"></span>
							{{ HTML::link('users/logout', 'Log Out', array('class'=>'navbar-link')) }}
						@else
							<span class="glyphicon glyphicon-trash"></span>
							{{ HTML::link('users/login', 'Log In', array('class'=>'navbar-link')) }}
						@endif
					</p>

				</div>

			</div>
		</nav>

		<!-- messages -->
		<div class="container-fluid">
			@if(Session::has('message'))
				<div class="alert alert-warning alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Message!</strong> {{ Session::get('message') }}
				</div>
			@endif
		</div>

		<!-- content -->
		<div class="container-fluid">
			{{ $content }}
		</div>

		<!-- javascripts -->
		{{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}
		{{ HTML::script('http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js') }}

	</body>

</html>