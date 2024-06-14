<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>Détails commentaire #{{ $data->id }}</h3>
</div>
<div class="modal-body">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab1" data-toggle="tab">Commentaire </a></li>
		
	</ul>
	<div class="tab-content">
		

























		<div class="tab-pane active" id="tab1">
{!! nl2br($data->content) !!}

		</div>
		

		
	</div>
</div>
















