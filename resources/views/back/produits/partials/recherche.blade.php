<div class="row">
	<div class="col-sm-12">
		<!-- start: TEXT FIELDS PANEL -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-search"></i>
				Critéres de recherche
				<div class="panel-tools">
					<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
					</a>
					
					<a class="btn btn-xs btn-link panel-refresh" href="#">
						<i class="fa fa-refresh"></i>
					</a>
					<a class="btn btn-xs btn-link panel-expand" href="#">
						<i class="fa fa-resize-full"></i>
					</a>
					<a class="btn btn-xs btn-link panel-close" href="#">
						<i class="fa fa-times"></i>
					</a>
				</div>
			</div>
			<div class="panel-body">
				
				<form action="{{ route('produits.index') }}" method="GET" name="FormOrder" class="form-search form-horizontal" >
					<input type="hidden" id="itemsValue" name="items" value="{{ request()->query('items') }}">
					<input type="hidden" id="orderBy" name="orderBy" value="{{ request()->query('orderBy') }}">
					<input type="hidden" id="orderType" name="orderType" value="{{ request()->query('orderType') }}">
					
					<div class="form-group">
						
						
						
						<div class="col-sm-6 my-3">
							
							<select name="key_search" class="form-control search-select select2 search-select2" >
								
								<option value=""></option>
								

								<optgroup label="Par Marque">
									
									<x-optionsList   typo="libelle" 	:items="App\Models\Marque::select('id','libelle')
									->whereHas('produits')
									->orderBy('libelle')
									->get()"	>{{ request()->query('key_search') }}</x-optionsList>
									
								</optgroup>



								<optgroup label="Par Fournisseurs">
									
									<x-optionsList   typo="libelle" 	:items="App\Models\Fournisseur::select('id','libelle')
									->whereHas('produits')
									->orderBy('libelle')
									->get()"	>{{ request()->query('key_search') }}</x-optionsList>
									
								</optgroup>


								<optgroup label="Produit">
									
									<x-optionsList   typo="libelle" 	:items="App\Models\Produit::select('id','libelle')
									
									->orderBy('libelle')
									->get()"	>{{ request()->query('key_search') }}</x-optionsList>
									
								</optgroup>


								<optgroup label="Par Catégorie">
									
									<x-optionsList   typo="libelle" 	:items="App\Models\Famille::select('id','libelle')
									->whereHas('produits')
									->orderBy('libelle')
									->get()"	>{{ request()->query('key_search') }}</x-optionsList>
									
								</optgroup>

								
								
							</select>
							
							
							
						</div>



						
						
						
						<div class="col-sm-6 my-3">
							
							
							<select name="produit_search" class="form-control search-select">
								<option value="">Tous produits</option>

								
								
								
							</select>
							
							
							
							
							
						</div>
						
						
						
					</div>
					
					
					<div class="col-md-9  no-padding hidden">
						<p>
							Exporter <span class="badge badge-new">CSV</span> <span class="badge badge-new">PDF</span> <span class="badge badge-new">Excel</span>
						</p>
					</div>
					
					
					
				</form>
			</div>
		</div>
		<!-- end: TEXT FIELDS PANEL -->
	</div>
</div>