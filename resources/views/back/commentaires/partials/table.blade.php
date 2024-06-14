<div class="table-responsive"><table class="table table-hover @if($datas->total() == 0) hidden @endif" id="sample-table-2">
	<thead>
		<tr>
			<th class="center">
				
				<input type="checkbox" class=" checkbox-all">
				
			</th>
			
			<th class="sorting" data-sorting-name="name" data-sorting-type="asc">Nom</th>
			<th class="sorting" data-sorting-name="email" data-sorting-type="asc">Email</th>
			<th class="sorting" data-sorting-name="note" data-sorting-type="asc">Rating</th>
			
			<th class="sorting" data-sorting-name="produit_libelle" data-sorting-type="asc">Produit</th>
			<th class="sorting" data-sorting-name="created_at" data-sorting-type="asc">Crée le</th>
			<th class="sorting" data-sorting-name="valider" data-sorting-type="asc">Valider</th>
			
			
			
			
			<th></th>
		</tr>
	</thead>
	<tbody>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		@forelse ($datas as $data)
		
		
		
		<tr  class="">
			
			
			<td class="center">
				
				<input type="checkbox" data-id="{{ $data->id }}"  class="checkbox-det"  >
				
			</td>
			

		

		<td><x-badge type="warning">{{ $data->name }}</x-badge></td>
		<td><x-badge type="default">{{ $data->email }}</x-badge></td>
		<td>@for ($i = 1; $i <= $data->note; $i++)<i class="clip-star-3"></i>@endfor</td>
		<td class=" ajax"><a href='#' role="menuitem"
				data-lien="{{ route('produits.show', ['produit' => $data->produit->id]) }}" 
				tabindex="-1" 
				class="demo"
				data-toggle="modal"
				>{{ $data->produit_libelle }}</a></td>
		<td><x-badge type="info">{{ $data->created_at->diffForHumans() }}</x-badge></td>
		<td >@if($data->valider) <x-badge type="success">Validé</x-badge>
		@else<a href="{{ route('commentaireValider',$data) }}">valider</a>
		@endif</td>
		
		

		
		
		<td class="center">




			<div >
				<div class="btn-group">
					<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
						<i class="fa fa-cog"></i> <span class="caret"></span>
					</a>
					<ul role="menu" class="dropdown-menu pull-right">






						<li role="presentation" 
						class="ajax">


						<a href='#' role="menuitem"

						data-lien="{{ route('commentaires.show', ['commentaire' => $data->id]) }}" 


						tabindex="-1" 

						class="demo"
						data-toggle="modal"
						>
						<i class="clip-zoom-in"></i> Détails
					</a>


				</li>






<li role="presentation" 
class="">


<form method="POST" id="form-delete-{{ $data->id }}" class="fm-inline"
	action="{{ route('commentaires.destroy', ['commentaire' => $data->id]) }}">
	@csrf
@method('DELETE')</form>

<a role="menuitem" tabindex="-1" 


data-form-submit="form-delete-{{ $data->id }}"
data-body-text="Êtes-vous sûr de vouloir Supprimer cette commentaire ?"
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
</table></div>


<div id="ajax-modal" class="modal fade" tabindex="-1" style="display: none;"></div>