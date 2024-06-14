<table class="table table-hover" id="sample-table-2">
	<thead>
		<tr>
			
			
			<th class="center">Photo</th>
			<th class="sorting" data-sorting-name="classement" data-sorting-type="desc">Libelle</th>
			<th class="sorting" data-sorting-name="classement" data-sorting-type="desc">Lien</th>
			<th class="sorting" data-sorting-name="created_at" data-sorting-type="desc">Crée le</th>
			<th class="center">Produits</th>
			
			<th></th>
		</tr>
	</thead>
	<tbody>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		@forelse ($partenaires as $data)
		
		
		
		<tr  class="">
			
			
			
			<td class="center">
				@if($data->image)
				<img width="100" src="{{ $data->image->url() }}">
				@endif
			</td>
			<td>{{ $data->libelle }}</td>
			<td>{{ $data->lien }}</td>
			<td ><x-badge type="info">{{ $data->created_at->diffForHumans() }}</x-badge></td>
			<td>{{ $data->categories->count() }}</td>
			
			<td class="center">
				
				
				
				
				<div >
					<div class="btn-group">
						<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
							<i class="fa fa-cog"></i> <span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu pull-right">
							<li role="presentation">
								<a role="menuitem" class="stretched-link" tabindex="-1" href="{{ route('partenaires.edit', ['partenaire' => $data->id]) }}">
									<i class="fa fa-edit"></i> Edit
								</a>
							</li>
							

							
							<li role="presentation" 
							class="">
							
							
							<form method="POST" id="form-delete-{{ $data->id }}" class="fm-inline"
								action="{{ route('partenaires.destroy', ['partenaire' => $data->id]) }}">
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