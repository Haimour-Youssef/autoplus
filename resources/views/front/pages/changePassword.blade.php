@extends('front.layouts.app')


@section('title', 'Mon espace | ')

@section('content')



<section class="wow fadeIn border-top text-white white-link bg-black padding-50px-tb sm-padding-30px-tb page-title-small">
	<div class="container">
		<div class="row align-items-center alt-font">
			<div class="col-lg-8 col-md-6 text-center text-md-left">
				<!-- start page title -->
				<h1 class=" font-weight-600 mb-0">ESPACE CANDIDATS</h1>
				<!-- end page title -->
				<!-- start sub title 
					<span class="d-block margin-5px-top">Contacter AUTOPLUS</span>-->
					<!-- end sub title -->
				</div>
				<div class="col-lg-4 white-link col-md-6 sm-margin-10px-top breadcrumb text-small justify-content-center justify-content-md-end">
					<!-- start breadcrumb -->
					<ul>
						<li><a href="{{ route('home') }}" class="text-white">Accueil</a></li>

						<li class="text-gray">ESPACE CANDIDATS</li>
					</ul>
					<!-- end breadcrumb -->
				</div>
			</div>
		</div>
	</section>













	<section class="wow fadeIn" style="padding: 130px 0px;">
		<div class="container">
			


			@include('front.partials.espace-header')






			<div class="row">

				<div class="col-12">

					<br /><br />


					<form method="POST" action="{{ route('change.password') }}">

						@csrf 



						 @if (session('status'))
						<div class="alert alert-success" role="alert">
						Votre Mot de passe est mis à jour avec succès!
						</div>
						@endif



						@foreach ($errors->all() as $error)

						<p class="text-danger">{{ $error }}</p>

						@endforeach 




						<div class="form-group row">

							<label for="password" class="col-md-4 text-md-right">Nouveau mot de passe</label>



							<div class="col-md-6">

								<input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">

							</div>

						</div>



						<div class="form-group row">

							<label for="password" class="col-md-4 col-form-label text-md-right">Confirmation</label>



							<div class="col-md-6">

								<input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">

							</div>

						</div>



						<div class="form-group row mb-0">

							<div class="col-md-8 offset-md-4">


								



								<button type="submit" class="btn btn-large btn-dark-gray text-large border-radius-4 lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto">

									Mettre à jour

								</button>

							</div>

						</div>

					</form>


				</div>


			</div>









		</div>
	</section>







	@endsection

