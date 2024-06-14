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





			@auth
            @if (Auth::user()->is_admin==false)
			<div class="row">

				<div class="col-12 padding-four-lr padding-six-half-tb lg-padding-five-tb lg-padding-six-lr md-padding-six-all sm-padding-50px-tb sm-padding-15px-lr">

					<table class="table">
						<thead>
							<tr>
								<th scope="col">Réf</th>
								<th scope="col">Offre</th>
								
								<th scope="col">Etat </th>
							</tr>
						</thead>
						<tbody>



							@forelse (App\Models\User::find(1)->offres()->get() as $data)




							


							<tr>
								<th>#AED{{ $data->id }}</th>
								<td>{{ $data->title }}</td>
								
								<td>
									En cours ..
								</td>
							</tr>


							@empty

							<tr>
								<th rowspan="3">0 Candidatures</th>
								
							</tr>

							

							@endforelse
							
						</tbody>
					</table>


				</div>


			</div>

			@endif
			@endauth







		</div>
	</section>









	<section class="border p-4 text-center mb-4">

	</section>

















	@endsection

