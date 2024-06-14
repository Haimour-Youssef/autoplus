<table class="table table-hover" id="sample-table-2">
	<thead>
		<tr>
			
			
			<th class="center">Photo</th>
			<th class="sorting" data-sorting-name="title" data-sorting-type="desc">Title</th>
			<th  data-sorting-name="created_at" data-sorting-type="desc">Ville</th>
			<th  data-sorting-name="created_at" data-sorting-type="desc">Contrat</th>
			<th  data-sorting-name="created_at" data-sorting-type="desc">Candidats</th>
			<th class="sorting" data-sorting-name="created_at" data-sorting-type="desc">Crée le</th>
			
			<th></th>
		</tr>
	</thead>
	<tbody>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		@forelse ($offres as $data)
		
		
		
		<tr  class="">
			
			
			
			<td class="center">
				@if($data->image)
				<img width="60" src="{{ $data->image->url('thumbails-100') }}">
				@endif
			</td>
			<td>{{ $data->title }}</td>
			<td>{{ $data->ville ? $data->ville->libelle : null }}</td>
			<td>{{ $data->contrat }}</td>
			<td><x-badge type="danger">{{ $data->users->count() }}</x-badge></td>
			
			<td ><x-badge type="info">{{ $data->created_at }}</x-badge></td>
			
			<td class="center">
				
				
				
				
				<div >
					<div class="btn-group">
						<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
							<i class="fa fa-cog"></i> <span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu pull-right">
							<li role="presentation">
								<a role="menuitem" class="stretched-link" tabindex="-1" href="{{ route('offres.edit', ['offre' => $data->id]) }}">
									<i class="fa fa-edit"></i> Détails
								</a>
							</li>
							

							
							<li role="presentation" 
							class="">
							
							
							<form method="POST" id="form-delete-{{ $data->id }}" class="fm-inline"
								action="{{ route('offres.destroy', ['offre' => $data->id]) }}">
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
								<i class="fa fa-times"></i> Supprimer
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