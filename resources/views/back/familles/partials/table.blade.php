<table class="table table-hover" id="sample-table-2">

	<thead>

		<tr>

			

			

			<th class="center">Photo</th>

			<th class="sorting" data-sorting-name="classement" data-sorting-type="desc">Libelle</th>

			<th class="center">Produits</th>

			

			<th></th>

		</tr>

	</thead>

	<tbody>

		

		

		

		

		

		

		

		

		

		

		

		

		

		

		

		

		@forelse ($familles as $data)

		

		

		

		<tr  class="">

			

			

			<td class="center">

				@if($data->image)

				<img width="60" src="{{ $data->image->url() }}">

				@endif

			</td>

			



			<td>{{ $data->libelle }}</td>



			<td>{{ $data->produits->count() }}</td>

			

			<td class="center">

				

				

				

				

				<div >

					<div class="btn-group">

						<a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">

							<i class="fa fa-cog"></i> <span class="caret"></span>

						</a>

						<ul role="menu" class="dropdown-menu pull-right">

							<li role="presentation">

								<a role="menuitem" class="stretched-link" tabindex="-1" href="{{ route('familles.edit', ['famille' => $data->id]) }}">

									<i class="fa fa-edit"></i> Modifier

								</a>

							</li>

							



							

							<li role="presentation" 

							class="">

							

							

							<form method="POST" id="form-delete-{{ $data->id }}" class="fm-inline"

								action="{{ route('familles.destroy', ['famille' => $data->id]) }}">

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