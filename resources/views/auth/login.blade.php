@extends('layouts.main')

@section('content')
<!-- Content -->
	<div id="wrapper">	
		
		<section class="bg-primary padding-25">
			<div class="container text-center">
				<h2 class="font-size-26 color-white font-weight-300 font-open-sans">Merci de vous connecter</h2>
			</div>
		</section>

		<section class="bg-grey-100 padding-top-60 padding-bottom-60 relative">
		<div class="container">
			<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					Connexion
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					@include('common.errors')

					<!-- New Task Form -->
					<form action="/auth/login" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<!-- E-Mail Address -->
						<div class="form-group">
							<label for="email" class="col-sm-3 control-label">E-Mail</label>

							<div class="col-sm-6">
								<input type="email" name="email" class="form-control" value="{{ old('email') }}">
							</div>
						</div>

						<!-- Password -->
						<div class="form-group">
							<label for="password" class="col-sm-3 control-label">Mot de passe</label>

							<div class="col-sm-6">
								<input type="password" name="password" class="form-control">
							</div>
						</div>

						<!-- Login Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-3">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-btn fa-sign-in"></i> Connexion
								</button>
							</div>
							<div class="col-sm-3">
									<a href="/facebook-connect"><img src="/img/login_fb.png" style="padding-top:5px;"></a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>


		</div>
				
			</div>
		</section>
					
		<section class="bg-success padding-25">
			<div class="container text-center">
				<h2 class="font-size-26 color-white font-weight-300 font-open-sans">Keymarket est actuellement en beta, merci de signaler les bugs que vous rencontrez <a href="">ici</a></h2>
			</div>
		</section>
	</div>
@endsection