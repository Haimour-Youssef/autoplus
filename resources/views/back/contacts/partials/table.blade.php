<table class="table table-hover" id="sample-table-2">
	<thead>
		<tr>
			
			
			<th >Nom</th>
			<th class="sorting" data-sorting-name="title" data-sorting-type="desc">Email</th>
			<th class="sorting" data-sorting-name="date_contact" data-sorting-type="desc">Sujet</th>
			<th  data-sorting-name="created_at" data-sorting-type="desc">Message</th>
			<th class="sorting" data-sorting-name="created_at" data-sorting-type="desc">Crée le</th>
			
			<th></th>
		</tr>
	</thead>
	<tbody>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		@forelse ($contacts as $data)
		
		
		
		<tr  class="">
			
			
			
			
			<td><x-badge type="warning">{{ $data->name }}</x-badge></td>
			
			<td>{{ $data->email }}</td>
			<td>{{ $data->subject }}</td>
			<td>{{ $data->message }}</td>
			
			<td ><x-badge type="info">{{ $data->created_at->diffForHumans() }}</x-badge></td>
			
			<td class="center">
				
				
				
				
				<div >
					<div class="btn-group">
						<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
							<i class="fa fa-cog"></i> <span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu pull-right">
							
							

							
							<li role="presentation" 
							class="">
							
							
							<form method="POST" id="form-delete-{{ $data->id }}" class="fm-inline"
								action="{{ route('contacts.destroy', ['contact' => $data->id]) }}">
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