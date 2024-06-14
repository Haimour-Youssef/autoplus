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
				<div class="col-12 padding-four-lr padding-six-half-tb lg-padding-five-tb lg-padding-six-lr md-padding-six-all sm-padding-50px-tb sm-padding-15px-lr">






					<form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">

						@csrf 
						@method('PUT')


						 @if (session('status'))
						<div class="alert alert-success" role="alert">
						Votre fiche personnel est mis à jour avec succès!
						</div>
						@endif




						<div class=" tab-style2">





							@if($errors->any())

							<div class="errorHandler alert alert-danger ">
								<ul>
									@foreach($errors->all() as $error)
									<li><i class="fa fa-remove-sign"></i>{{ $error }}</li>
									@endforeach
								</ul>


							</div>

							@endif



							<div class="">
								<div class="col-12">
									<!-- start tab navigation -->
									<ul class="nav nav-tabs alt-font text-uppercase text-small text-center font-weight-600 justify-content-center">
										<li class="nav-item"><a class="nav-link active" href="#tab_sec1" data-toggle="tab"><i class="far fa-address-card text-extra-dark-gray "></i> Informations</a></li>
										@auth
                    					@if (Auth::user()->is_admin==false)
										<li class="nav-item"><a class="nav-link" href="#tab_sec3" data-toggle="tab"><i class="icon-pricetags text-extra-dark-gray"></i> CV</a></li>
										<li class="nav-item"><a class="nav-link" href="#tab_sec4" data-toggle="tab"><i class="icon-desktop text-extra-dark-gray "></i> P.J</a></li>
										@endif
										@endauth
									</ul>
									<!-- end tab navigation -->
								</div>
							</div>                                
							<div class="tab-content">
								<!-- start tab content -->
								<div class="tab-pane med-text fade in active show" id="tab_sec1">
									<div class="row align-items-center">
										<div class="col-12">

											<div>



												Nom
												<input id="name" type="text" class="input-bg  @error('name') is-invalid @enderror" name="name" placeholder="Nom *" value="{{ old('name', Auth::user()->name ) }}" autocomplete="name" autofocus>


												Prénom
												<input  type="text" class="input-bg  @error('prenom') is-invalid @enderror" name="prenom" placeholder="Prénom *" value="{{ old('prenom', Auth::user()->prenom ) }}" autocomplete="prenom" autofocus>


												Email
												<input id="email" type="email" class="input-bg  @error('email') is-invalid @enderror" name="email" placeholder="Email *" value="{{ old('email', Auth::user()->email ) }}" autocomplete="email">

												Login
												<input id="username" placeholder="Login *" type="username" class="input-bg  @error('username') is-invalid @enderror" name="username" value="{{ old('username', Auth::user()->username ) }}" autocomplete="username">



												Tél
												<input  type="text" class="input-bg  @error('tel') is-invalid @enderror" name="tel" placeholder="Tél *" value="{{ old('tel', Auth::user()->tel ) }}" autocomplete="Tel" autofocus>


												Adresse
												<input  type="text" class="input-bg  @error('adresse') is-invalid @enderror" name="adresse" placeholder="Adresse *" value="{{ old('adresse', Auth::user()->adresse ) }}"  >

												

											</div>
										</div>
									</div>
								</div>
								<!-- end tab content -->

								
								<!-- start tab content -->
								<div class="tab-pane fade in" id="tab_sec3">
									<div class="row align-items-center">
										<div class="col-12">

											<div>



												Mobilité géographique
												<select name="mobilite" class="input-bg">
													@foreach(App\Models\User::MOBILITES as $mobilite)
													<option value="{{ $mobilite }}" 
													{{ old("mobilite") === $mobilite ? 'selected' : '' }}
													{{ Auth::user()->mobilite === $mobilite ? 'selected' : '' }}
													>{{ $mobilite }}</option>
													@endforeach
												</select>

												Métier recherché
												<select name="metier" class="input-bg">
													@foreach(App\Models\User::METIERS as $metier)
													<option value="{{ $metier }}"
													{{ old("metier") === $metier ? 'selected' : '' }}
													{{ Auth::user()->metier === $metier ? 'selected' : '' }}
													>{{ $metier }}</option>
													@endforeach
												</select>

												Type de contrat
												<select name="contrat" class="input-bg">
													@foreach(App\Models\User::CONTRATS as $contrat)
													<option value="{{ $contrat }}"
													{{ old("contrat") === $contrat ? 'selected' : '' }}
													{{ Auth::user()->contrat === $contrat ? 'selected' : '' }}
													>{{ $contrat }}</option>
													@endforeach
												</select>






												

											</div>
										</div>
									</div>
								</div>
								<!-- end tab content -->
								<!-- start tab content -->
								<div class="tab-pane fade in" id="tab_sec4">
									<div class="row align-items-center">
										<div class="col-12">

											<div>

												CV (Type : DOC, PDF, JPG)
												<input type="file" name="cv"  placeholder="CV*" class="input-bg">
												Lettre de Motivation
												<input type="file" name="motivation" placeholder="Lettre de motivation*" class="input-bg">


												

											</div>
										</div>
									</div>
								</div>
								<!-- end tab content -->

							</div>       
						</div>



						<button type="submit" style="float: right;" class="btn btn-large btn-dark-gray text-large border-radius-4 lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto">

							Mettre à jour

						</button>


					</form>


























				</div>

			</div>









		</div>
	</section>







	@endsection

