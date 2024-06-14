<table class="table table-hover" id="sample-table-2">
	<thead>
		<tr>
			
			
			<th class="center">Photo</th>
			<th class="sorting" data-sorting-name="title" data-sorting-type="desc">Title</th>
			<th class="sorting" data-sorting-name="date_actualite" data-sorting-type="desc">Date</th>
			<th  data-sorting-name="created_at" data-sorting-type="desc">Marque</th>
			<th class="sorting" data-sorting-name="created_at" data-sorting-type="desc">Crée le</th>
			<th class="sorting" data-sorting-name="accueil" data-sorting-type="desc">Accueil</th>
			
			<th></th>
		</tr>
	</thead>
	<tbody>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		@forelse ($actualites as $data)
		
		
		
		<tr  class="">
			
			
			
			<td class="center">
				@if($data->image)
				<img width="60" src="{{ $data->image->url('thumbails-100') }}">
				@endif
			</td>
			<td>{{ $data->title }}</td>
			<td>{{ $data->date_actualite }}</td>
			<td>{{ $data->partenaire ? $data->partenaire->libelle : null }}</td>
			
			<td ><x-badge type="info">{{ $data->created_at->diffForHumans() }}</x-badge></td>
			<td ><i class="{{ $data->accueil ? 'clip-checkmark-2' : '' }}"></i></td>
			
			<td class="center">
				
				
				
				
				<div >
					<div class="btn-group">
						<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
							<i class="fa fa-cog"></i> <span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu pull-right">
							<li role="presentation">
								<a role="menuitem" class="stretched-link" tabindex="-1" href="{{ route('actualites.edit', ['actualite' => $data->id]) }}">
									<i class="fa fa-edit"></i> Edit
								</a>
							</li>
							

							
							<li role="presentation" 
							class="">
							
							
							<form method="POST" id="form-delete-{{ $data->id }}" class="fm-inline"
								action="{{ route('actualites.destroy', ['actualite' => $data->id]) }}">
								@csrf
								@method('DELETE')</form>
								
								<a role="menuitem" tabindex="-1" 
								
								
								data-form-submit="form-delete-{{ $data->id }}"
								data-body-text="Êtes-vous sûr de vouloir Supprimer ?"
								data-button-text="Supprimer"
								data-button-type="danger"
								href="#static" 
								class="btn-confirmation" 
								data-toggle="modal"
								
								>
								<i class="fa fa-times"></i> Remove
							</a>
							
							
						</li>
						
						
						

						
						
						
						
						
						
						
						
						
						
						
						
						
						
					</ul>
				</div>
			</div></td>
		</tr>
		
		
		
		
		
		@empty
		
		@endforelse
		
		
		
		
		
		
		
		
		
		
		
		
	</tbody>
</table>