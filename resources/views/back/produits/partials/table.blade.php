<div class="table-responsive"><table class="table table-hover @if($datas->total() == 0) hidden @endif" id="sample-table-2">
	<thead>
		<tr>
			<th class="center">
				
				<input type="checkbox" class=" checkbox-all">
				
			</th>
			
			<th class="center"></th>
			<th class="sorting" data-sorting-name="libelle" data-sorting-type="asc">Libelle</th>
			<th class="sorting" data-sorting-name="vu" data-sorting-type="desc"><i class="clip-eye"></i></th>
			<th class="sorting" data-sorting-name="users_count" data-sorting-type="desc"><i class="clip-heart"></i></th>
			<th class="sorting" data-sorting-name="commentaires_count" data-sorting-type="desc"><i class="fa fa-comments-o"></i></th>
			<th class="sorting" data-sorting-name="panier" data-sorting-type="desc"><i class="fa fa-shopping-cart"></i></th>
			<th class="sorting" data-sorting-name="marque_libelle" data-sorting-type="asc">Marque</th>
			<th class="sorting" data-sorting-name="famille_libelle" data-sorting-type="asc">Catégorie</th>
			
			
			
			<th></th>
		</tr>
	</thead>
	<tbody>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		@forelse ($datas as $data)
		
		
		
		<tr  class="">
			
			
			<td class="center">
				
				<input type="checkbox" data-id="{{ $data->id }}"  class="checkbox-det"  >
				
			</td>
			
			<td class="center ajax">
				<a href='#' id="href_img{{ $data->id }}" role="menuitem"
				data-lien="{{ route('produits.show', ['produit' => $data->id]) }}" 
				tabindex="-1" 
				class="demo"
				data-toggle="modal"
				>
				@if($data->image)
				<img width="30" height="30" src="{{ $data->image->url('thumbails-100') }}">
				@else
				<img width="30" height="30" src="{{ asset('assets/images/no-picture.jpg') }}">
				@endif
			</a>
		</td>

		<td class=" ajax"><a href='#' role="menuitem"
				data-lien="{{ route('produits.show', ['produit' => $data->id]) }}" 
				tabindex="-1" 
				class="demo"
				data-toggle="modal"
				>{{ $data->libelle }}</a></td>

		<td><a href="#"><x-badge type="default">{{ $data->vu }}</x-badge></a></td>
		<td><x-badge type="warning">{{ $data->users_count }}</x-badge></td>
		<td><x-badge type="success">{{ $data->commentaires_count }}</x-badge></td>
		<td><x-badge type="warning">{{ $data->panier }}</x-badge></td>
		<td>{{ $data->marque_libelle }}</td>
		<td >{{ $data->famille_libelle }}</td>
		
		

		
		
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

						data-lien="{{ route('produits.show', ['produit' => $data->id]) }}" 


						tabindex="-1" 

						class="demo"
						data-toggle="modal"
						>
						<i class="clip-zoom-in"></i> Détails
					</a>


				</li>



<li role="presentation" 
class="">


<a role="menuitem" tabindex="-1" 

href="{{ route('produits.edit', ['produit' => $data->id]) }}" 

>
<i class="fa fa-edit"></i> Modifier
</a>


</li>





<li role="presentation" 
class="">


<form method="POST" id="form-delete-{{ $data->id }}" class="fm-inline"
	action="{{ route('produits.destroy', ['produit' => $data->id]) }}">
	@csrf
@method('DELETE')</form>

<a role="menuitem" tabindex="-1" 


data-form-submit="form-delete-{{ $data->id }}"
data-body-text="Êtes-vous sûr de vouloir Supprimer cette produit ?"
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