<div class="row justify-content-center">
				<div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
					<div class="position-relative overflow-hidden w-100">
						<span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Bonjour {{ Auth::user()->name }} <i class="fas fa-user icon-very-small" aria-hidden="true"></i> </span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-center btn-dual">
					@auth
                    @if (Auth::user()->is_admin==false)
					<a href="{{ route('monEspace') }}" class="btn btn-medium {{ Request::url() == route('monEspace') ? 'btn-transparent-black' : 'btn-dark-gray' }} text-medium border-radius-4 lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto"><i class="fas fa-star icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i> Mes candidatures</a>
					@endif
					@endauth

					


					<a href="{{ route('profile.edit', auth()->id()) }}" class="btn btn-medium {{ Request::url() == route('profile.edit', auth()->id()) ? 'btn-transparent-black' : 'btn-dark-gray' }} text-medium border-radius-4 lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto"><i class="fas fa-user icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i> Fiche personnel</a>


					<a href="{{ route('change.password') }}" class="btn btn-medium {{ Request::url() == route('change.password') ? 'btn-transparent-black' : 'btn-dark-gray' }} text-medium border-radius-4 lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto"><i class="fas fa-unlock-alt icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i> Mot de passe</a>

					
					@auth
                    @if (Auth::user()->is_admin==false)
					<a href="{{ route('offres') }}" class="btn btn-medium btn-dark-gray text-medium border-radius-4 lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto"><i class="fas fa-search icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i> Offres d'emploi</a>
					@endif
					@endauth

					<a href="{{ route('logout') }}"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();" class="btn btn-medium btn-dark-gray text-medium border-radius-4 lg-margin-15px-bottom d-table d-lg-inline-block md-margin-lr-auto"><i class="ti-arrow-right icon-very-small margin-5px-right no-margin-left" aria-hidden="true"></i> Déconnexion</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>

				</div>
			</div>