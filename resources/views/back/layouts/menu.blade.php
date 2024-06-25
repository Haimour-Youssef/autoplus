<div class="navbar-content">
	<!-- start: SIDEBAR -->
	<div class="main-navigation navbar-collapse collapse">
		<!-- start: MAIN MENU TOGGLER BUTTON -->
		<div class="navigation-toggler">
			<i class="clip-chevron-left"></i>
			<i class="clip-chevron-right"></i>
		</div>
		<!-- end: MAIN MENU TOGGLER BUTTON -->
		<!-- start: MAIN NAVIGATION MENU -->
		<ul class="main-navigation-menu">
			
			
			

			<li class="">
				<a data-object="offres" href="{{ route('offres.index') }}"><i class="clip-user"></i>
					<span class="title"> Offres </span><span class="badge badge-new offres-counter">{{ App\Models\Offre::count() }}</span>
				</a>
			</li>

			<li class="">
				<a data-object="users" href="{{ route('users.index') }}"><i class="clip-user"></i>
					<span class="title"> Candidats </span><span class="badge badge-new users-counter">{{ App\Models\User::where('is_admin','false')->count() }}</span>
				</a>
			</li>

			<li class="">
				<a data-object="categories" href="{{ route('categories.index') }}"><i class="clip-user"></i>
					<span class="title"> Catégories </span><span class="badge badge-new categories-counter">{{ App\Models\Categorie::count() }}</span>
				</a>
			</li>
			

			<!--
			<li class="">
				<a data-object="promotions" href="{{ route('promotions.index') }}"><i class="clip-user"></i>
					<span class="title"> Promotions </span><span class="badge badge-new promotions-counter">{{ App\Models\Promotion::count() }}</span>
				</a>
			</li>
-->

			<li class="">
				<a data-object="actualites" href="{{ route('actualites.index') }}"><i class="clip-user"></i>
					<span class="title"> Media </span><span class="badge badge-new medias-counter">{{ App\Models\Actualite::count() }}</span>
				</a>
			</li>

			<li class="">
				<a data-object="bannieres" href="{{ route('bannieres.index') }}"><i class="clip-user"></i>
					<span class="title"> Banniéres </span><span class="badge badge-new bannieres-counter">{{ App\Models\Banniere::count() }}</span>
				</a>
			</li>

			<li class="">
				<a data-object="partenaires" href="{{ route('partenaires.index') }}"><i class="clip-user"></i>
					<span class="title"> Marques </span><span class="badge badge-new partenaires-counter">{{ App\Models\Partenaire::count() }}</span>
				</a>
			</li>

			<li class="">
				<a data-object="contacts" href="{{ route('contacts.index') }}"><i class="clip-user"></i>
					<span class="title"> Contacts </span><span class="badge badge-new contacts-counter">{{ App\Models\Contact::count() }}</span>
				</a>
			</li>

			<li class="">

						<a data-object="parametres" href="{{ route('parametres.index') }}"><i class="clip-user"></i>

							<span class="title"> Paramétres </span><span class="badge badge-new users-counter">{{ App\Models\Parametre::count() }}</span>

						</a>

			</li>
			
			<li class="">
				<a data-object="Référencement" href="{{ route('referencements.index') }}"><i class="clip-user"></i>
					<span class="title"> Référencement  </span><span class="badge badge-new contacts-counter">{{ App\Models\Referencement::count() }}</span>
				</a>
			</li>
			

			
			
			
			
		</ul>
		<!-- end: MAIN NAVIGATION MENU -->
	</div>
	<!-- end: SIDEBAR -->
</div>