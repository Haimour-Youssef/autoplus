@extends('back.layouts.app')


@section('css_only')
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link href="{{ asset('assets/plugins/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" />

<link rel="stylesheet" href="{{ asset('assets/plugins/select2/select2.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/media/css/DT_bootstrap.css') }}" />

<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->


@endsection	

@section('content')


<div class="main-content" data-object="parametres">

	<!-- end: SPANEL CONFIGURATION MODAL FORM -->
	<div class="container">
		<!-- start: PAGE HEADER -->
		@include('back.layouts.title', ['menu' => 'Paramétrage','objet' => 'Paramétrage'])
		<!-- end: PAGE HEADER -->
		<!-- start: PAGE CONTENT -->
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="fa fa-external-link-square"></i><span class="parametres-counter">{{ $parametres->count() }}</span> Trouvé(s)
						<div class="panel-tools">
							<a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
							<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
							<a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
							<a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
							<a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
						</div>
					</div>
					<div class="panel-body">
						<div class="row" style="display: none;">
							<div class="col-md-12 space20">
								<button class="btn btn-green add-row">
									Add New <i class="fa fa-plus"></i>
								</button>
							</div>
						</div>
						
						
						<div class="table-responsive">
							<form action="#" method="GET" name="FormOrder" class="form-submit-ajax">
							<table class="table table-striped table-hover" data-object="parametres" id="sample_2">
								<thead>
									<tr>
										<th>Libelle</th>
										
										
										<th>Edit</th>
										<th></th>
									</tr>
								</thead>
								<tbody>

									@foreach ($parametres as $data)


									<tr data-id='{{ $data->id }}'>
										<td>{{ $data->valeur }}</td>
										
										
										<td><a href="#" class="edit-row"> Edit </a></td>
										<td></td>
									</tr>

									@endforeach
									
								</tbody>
							</table>
							</form>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- end: PAGE CONTENT-->
	</div>
</div>


@endsection

@section('js_only')





<script type="text/javascript" src="{{ asset('assets/plugins/bootbox/bootbox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/jquery-mockjax/jquery.mockjax.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/DataTables/media/js/DT_bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/parametrages/parametres.js') }}"></script>






<script>
	jQuery(document).ready(function() {
		Main.init();
		TableData.init();
	});
</script>



@endsection






