<table class="table table-hover" id="sample-table-2" style="width: 100%; table-layout: auto;">
	<thead>
		<tr>
			
			<th class="center">Photo</th>
			<th class="sorting" data-sorting-name="Page" data-sorting-type="desc">Page</th>
			<th class="sorting" data-sorting-name="Url" data-sorting-type="desc">Url</th>
			<th class="sorting" data-sorting-name="Name" data-sorting-type="desc">Name</th>
			<th class="sorting" data-sorting-name="Content" data-sorting-type="desc">Content</th>
			<th class="sorting" data-sorting-name="Property" data-sorting-type="desc">Property</th>
			<th class="sorting" data-sorting-name="Rel" data-sorting-type="desc">Rel</th>
			<th class="sorting" data-sorting-name="Href" data-sorting-type="desc">Href</th>
			
			<th></th>
		</tr>
	</thead>
	<tbody>
		
		
		@forelse ($seo as $data)
		
		
		
		<tr  class="">
			
			
			
			<td class="center">
				@if($data->image)
				<img width="60" src="{{ $data->image->url('') }}">
				@endif
			</td>
			<td>{{ $data->page }}</td>
			<td>{{ $data->url }}</td>
			<td>{{ $data->name }}</td>
			<td>{{ $data->content }}</td>
			
			<td >{{ $data->property }}</td>
			<td >{{ $data->rel }}</td>
			<td >{{ $data->href }}</td>
			
			<td class="center">
				
				
				
				
				<div >
					<div class="btn-group">
						<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
							<i class="fa fa-cog"></i> <span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu pull-right">
							<li role="presentation">
								<a role="menuitem" class="stretched-link" tabindex="-1" href="{{ route('referencements.edit', ['referencement' => $data->id]) }}">
									<i class="fa fa-edit"></i> Edit
								</a>
							</li>
							

							
							<li role="presentation" 
							class="">
							
							
							<form method="POST" id="form-delete-{{ $data->id }}" class="fm-inline"
								action="{{ route('referencements.destroy', ['referencement' => $data->id]) }}">
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
@include('back.referencements.partials.pagination')