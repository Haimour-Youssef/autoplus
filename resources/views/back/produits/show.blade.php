<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Détails produit #{{ $data->id }}</h3>
</div>
<div class="modal-body">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab1" data-toggle="tab">Produits </a></li>
		<li><a href="#tab2" data-toggle="tab">Description</a></li>
		<li><a href="#tab3" data-toggle="tab">Prix</a></li>
		<li><a href="#tab4" data-toggle="tab"><i class="fa fa-heart"></i> Wishlist ({{ $data->users->count() }})</a></li>
		<li><a href="#tab5" data-toggle="tab"><i class="fa fa-comments-o"></i> Avis ({{ $data->commentaires->count() }})</a></li>
	</ul>
	<div class="tab-content">
		

























		<div class="tab-pane active" id="tab1">

			<div class="row">

				<div class="col-sm-6 text-center">


					
				@if($data->image)
				<img width='300' src="{{ $data->image->url('thumbails-450') }}">
				@else
				<img style="max-width: 400px;width: 100%" src="{{ asset('assets/images/no-picture.jpg') }}">
				@endif



				</div>
				<div class="col-sm-6">
					
					<div class="table-responsive"><table class="table table-condensed table-hover">
						<thead>
							<tr>
								<th colspan="3">Informations générales</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								
								<td  colspan="3">{{ $data->libelle }}</td>

							</tr>

							<tr>
								<td>Notes</td>
								<td>@for ($i = 1; $i <= $data->note; $i++)<i class="clip-star-3"></i>@endfor 
								( {{$data->commentaires->count()}} Avis)</td>

							</tr>

							<tr>
								<td>Marque</td>
								<td><span class="label label-sm label-info">{{ $data->marque->libelle }}</span></td>

							</tr>



							



							<tr>
								<td>Fournisseur</td>
								<td>{{ $data->fournisseur->libelle }}</td>

							</tr>
							<tr>
								<td>Catégorie</td>
								<td><span class="label label-sm label-warning">{{ $data->famille->libelle }}</span></td>

							</tr>
							<tr>
								<td>Ajouté le</td>
								<td>{{ $data->created_at }}</td>

							</tr>
							<tr>
								<td>Modifié le</td>
								<td>{{ $data->updated_at }}</td>

							</tr>

						</tbody>
					</table></div>


				</div>
			</div>

		</div>
		










		<div class="tab-pane" id="tab2">


			{!! nl2br($data->description) !!}

		</div>
		
















		<div class="tab-pane" id="tab3">


			<div class="table-responsive"><table class="table table-condensed table-hover">

				<tbody>


					<tr>
						<td>Prix TTC</td>
						<td><span class="label label-sm label-danger " >{{ $data->prix_ttc}}.00Dhs</span></td>

					</tr>

					<tr>
						<td>Prix de vente</td>
						<td><span class="label label-sm label-warning " >{{ $data->prix_reduis}}.00Dhs</span></td>

					</tr>
					<tr>
						<td>Stock</td>
						<td><span class="label label-sm label-info " >{{ $data->stock}} Unité(s)</span></td>

					</tr>

					

				</tbody>
			</table></div>

		</div>













		<div class="tab-pane" id="tab4">


			<div class="table-responsive"><table class="table table-condensed table-hover">
				<thead>
					<tr>
						<th colspan="3"><i class="fa fa-heart"></i> Wishlists</th>
					</tr>
				</thead>
				<tbody>

					@foreach($data->users as $wishlist)

					<tr>
						<td>{{ $wishlist->name }}</td>
						<td><span class="label label-sm label-danger " >{{ $wishlist->pivot->created_at }}</span></td>

					</tr>

					@endforeach



				</tbody>
			</table>
		</div>

		</div>




				<div class="tab-pane" id="tab5">


			<div class="table-responsive"><table class="table table-condensed table-hover">
				<thead>
					<tr>
						<th colspan="6"><i class="fa fa-comments-o"></i> Avis</th>
					</tr>
				</thead>
				<tbody>

					@foreach($data->commentaires as $comment)

					<tr>
						<td>{{ $comment->name }}</td>
						<td>{{ $comment->email }}</td>
						<td>@for ($i = 1; $i <= $comment->note; $i++)<i class="clip-star-3"></i>@endfor</td>
						<td>{{ $comment->content }}</td>
						<td>@if($comment->valider)<i class="clip-checkmark-circle-2 "></i>@else
						    <i class="clip-spinner-2"></i>@endif</td>
						<td><span class="label label-sm label-danger " >{{ $comment->created_at }}</span></td>

					</tr>

					@endforeach



				</tbody>
			</table>
		</div>

		</div>


		
	</div>
</div>
















