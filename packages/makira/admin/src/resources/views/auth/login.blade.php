@extends('admin::layouts.app')

	@section('content')
		<div id="login">
			<div class="panel">
				<header>
					<h1><i class="fa fa-lock fa-"></i> Loginss</h1>
				</header>
				@include('admin::common.message')
				@include('admin::common.errors')

				{{ Form::open(array( 'route' => 'admin::auth.authenticate', 'method' => 'post' ))}}
				<div class="row collapse {{ $errors->has('email') ? 'error' : '' }}">
					<div class="small-10 columns">
						{{ Form::text('email', null, array( 'placeholder' => 'Email Address / Username', 'autocomplete' => 'off')) }}
					</div>
					<div class="small-2 columns">
						<label class="postfix">{!!  Html::icon('fa-key') !!}</label>
					</div>
				</div>
				<div class="row collapse {{ $errors->has('password') ? 'error' : '' }}">
					<div class="small-10 columns">
						{{ Form::password('password', array( 'placeholder' => 'Password', 'autocomplete' => 'off')) }}
					</div>
					<div class="small-2 columns">
						<label class="postfix">{!!  Html::icon('fa-asterisk')  !!}</label>
					</div>
				</div>

				<div class="row collapse">
					<div class="large-12 columns">
						<button class="button primary" type="submit"><i class="fa fa-sign-in fa-lg"></i> Login</button>

						<a href="{{ route('admin::auth.lost-password') }}" class="button secondary">
							<i class="fa fa-question-circle"></i> Lost Password</a>
						<a href="{{ route('admin::auth.request-activation') }}" class="button secondary">
							<i class="fa fa-envelope"></i> Activate Account</a>
					</div>
				</div>

				{{ Form::close() }}
			</div>
		</div>
	@stop