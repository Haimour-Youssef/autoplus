<table class="table table-hover" id="sample-table-2">
	<thead>
		<tr>
			
			
			<th class="col-to-export" >Nom</th>

			<th class="col-to-export">Tél</th>
			<th>Crée le</th>

			<th  class="col-to-export">Email</th>
			<th  class="col-to-export">CV</th>
			<th  class="col-to-export">Motiv.</th>
			

			<th class="col-to-export">Pro</th>
			
			<th></th>
		</tr>
	</thead>
	<tbody>
		
		
		
		
		
		
		
		
		

		
		
		
		@forelse ($users as $data)
		
		
		
		<tr  class="">
			
			
			<td>{{ $data->name }} {{ $data->prenom }}</td>
			<td>{{ $data->tel }}</td>

			<td ><x-badge type="info">{{ $data->created_at->diffForHumans() }}</x-badge></td>

			
			
			<td>{{ $data->email }}</td>

			<td>
				@if($data->cv)<a title="{{ asset('storage/app/public/users\\'.$data->cv) }}" target="_blank" href="{{ asset('storage/app/public/users\\'.$data->cv) }}"><i class="fa fa-download"></i></a>@endif</td>
			<td>@if($data->motivation)<a target="_blank" href="{{ asset('storage/app/public/users\\'.$data->motivation) }}"><i class="fa fa-download"></i></a>@endif</td>
			

			<td>{{ $data->metier }} / {{ $data->mobilite }} / {{ $data->contrat }}</td>
			
			
			<td class="center">
				
				
				
				
				<div >
					<div class="btn-group">
						<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
							<i class="fa fa-cog"></i> <span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu pull-right">

						<!--
							<li role="presentation">
								<a role="menuitem" class="stretched-link" tabindex="-1" href="{{ route('users.edit', ['user' => $data->id]) }}">
									<i class="fa fa-edit"></i> Détails
								</a>
							</li>-->
							

							
							<li role="presentation" 
							class="">
							
							
							<form method="POST" id="form-delete-{{ $data->id }}" class="fm-inline"
								action="{{ route('users.destroy', ['user' => $data->id]) }}">
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