
<table class="table table-hover" id="sample_1">
	<thead>
		<tr>
			
			
			<th class="center">Photo</th>
			<th class="sorting" data-sorting-name="title" data-sorting-type="desc">Title</th>
			<th class="sorting" data-sorting-name="title" data-sorting-type="desc">Parent</th>
			<th class="sorting" data-sorting-name="classement" data-sorting-type="desc">classement</th>
			<th class="sorting" data-sorting-name="created_at" data-sorting-type="desc">Crée le</th>
			<th>Marques</th>
			
			<th></th>
		</tr>
	</thead>
	<tbody>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		@forelse ($categories as $data)
		
		
		
		<tr  class="">
			
			
			
			<td class="center">
				@if($data->image)
				<img height="50" src="{{ $data->image->url() }}">
				@endif
			</td>
			<td>{{ $data->title }}</td>
			<td>{{ (App\Models\Categorie::where('id',$data->parent)->select('title')->get()->first()->title) ?? '--' }}</td>

			<td>{{ $data->classement }}</td>
			<td ><x-badge type="info">{{ $data->created_at->diffForHumans() }}</x-badge></td>

			<td><x-badge type="warning">{{ $data->partenaires->count() }}</x-badge></td>
			



			<td class="center">
			<form method="POST" id="form-delete-{{ $data->id }}" class="fm-inline"
								action="{{ route('categories.destroy', ['category' => $data->id]) }}">
								@csrf
								@method('DELETE')</form>
												<div class="">
													<a href="{{ route('categories.edit', ['category' => $data->id]) }}" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
													
													
								<a data-form-submit="form-delete-{{ $data->id }}"
								data-body-text="Êtes-vous sûr de vouloir Supprimer ?"
								data-button-text="Supprimer"
								data-button-type="danger"
								href="#static" 
								
								data-toggle="modal" class="btn btn-xs btn-bricky tooltips btn-confirmation" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												</td>


		</tr>
		
		













			
		
		@forelse ((App\Models\Categorie::where('parent',$data->id)->get()) as $dataD)
		
		
		
		<tr  class="" style="background: rgba(0,0,0,.03);">
			
			
			
			<td class="center">
				@if($dataD->image)
				<img style="padding-left: 40px;" height="50" src="{{ $dataD->image->url() }}">
				@endif
			</td>
			<td>----- {{ $dataD->title }}</td>
			<td>{{ (App\Models\Categorie::where('id',$dataD->parent)->select('title')->get()->first()->title) ?? '--' }}</td>

			<td>{{ $dataD->classement }}</td>
			<td ><x-badge type="info">{{ $dataD->created_at->diffForHumans() }}</x-badge></td>

			<td><x-badge type="warning">{{ $dataD->partenaires->count() }}</x-badge></td>
			
			<td class="center">
			<form method="POST" id="form-delete-{{ $dataD->id }}" class="fm-inline"
								action="{{ route('categories.destroy', ['category' => $dataD->id]) }}">
								@csrf
								@method('DELETE')</form>
												<div class="">
													<a href="{{ route('categories.edit', ['category' => $dataD->id]) }}" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
													
													
								<a data-form-submit="form-delete-{{ $dataD->id }}"
								data-body-text="Êtes-vous sûr de vouloir Supprimer ?"
								data-button-text="Supprimer"
								data-button-type="danger"
								href="#static" 
								
								data-toggle="modal" class="btn btn-xs btn-bricky tooltips btn-confirmation" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
												</div>
												</td>
		</tr>
		
		
		
		
		
		@empty
		
		@endforelse
	
		
		
		
		@empty
		
		@endforelse
		
		
		
		
		




























		
		
		
		
		
		
		
		
	</tbody>
</table>