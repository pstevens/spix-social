{{-- layout --}}
@extends('layouts.main')

{{-- section --}}
@section('content')

	<!--
		feature:
		- form to sign up
	-->
	<div class="panel panel-default">

		<!-- header -->
		<div class="panel-heading">
			<h3 class="panel-title">Sign Up</h3>
		</div>

		<!-- body -->
		<div class="panel-body">

			<!-- error messages -->
			@if($errors->count() > 0)
				<div class="alert alert-warning">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<ul>
						{{ HTML::ul($errors->all()) }}
					</ul>
				</div>
			@endif

			<!-- form for user sign up -->
			{{ Form::open(array('url'=>'users/signup')) }}

				<div class="form-group">
					{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email')) }}
				</div>

				<div class="form-group">
					{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
				</div>

				<div class="form-group">
					{{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Password confirmation')) }}
				</div>

				<div class="form-group">
					{{ Form::submit('Sign Up', array('class'=>'btn btn-default')) }}
				</div>

			{{ Form::close() }}

		</div>

	</div>

@stop
