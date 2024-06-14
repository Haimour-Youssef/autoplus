@extends('back.layouts.app')

@section('css_only')
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link href="{{ asset('assets/plugins/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" />




<link rel="stylesheet" href="{{ asset('assets/plugins/select2/select2.css') }}">


<link rel="stylesheet" href="{{ asset('assets/plugins/datepicker/css/datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}">
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY-->
<link rel="stylesheet" href="{{ asset('assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/summernote/build/summernote.css') }}">


<link rel="stylesheet" href="{{ asset('assets/plugins/ladda-bootstrap/dist/ladda-themeless.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-social-buttons/social-buttons-3.css') }}">

<link href="{{ asset('assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/media/css/DT_bootstrap.css') }}" />

<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->


@endsection	

@section('content')
<div class="main-content" data-object="commentaires">
	
	<!-- end: SPANEL CONFIGURATION MODAL FORM -->
	<div class="container">
		
		@include('back.layouts.title', ['menu' => 'Paramétrages','objet' => 'Avi'])
		
		@include('back.commentaires.partials.recherche')
		
		
		
		
		
		<div class="row">
			<div class="col-md-12">
				<!-- start: TABLE WITH IMAGES PANEL -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="fa fa-external-link-square"></i>
						{{ $datas->total() }} Avis
						<div class="panel-tools">
							<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
							</a>
							<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
								<i class="fa fa-wrench"></i>
							</a>
							<a class="btn btn-xs btn-link panel-refresh" href="#">
								<i class="fa fa-refresh"></i>
							</a>
							<a class="btn btn-xs btn-link panel-expand" href="#">
								<i class="fa fa-resize-full"></i>
							</a>
							<a class="btn btn-xs btn-link panel-close" href="#">
								<i class="fa fa-times"></i>
							</a>
						</div>
					</div>
					<div class="panel-body">
						
						









						
						<div class="row" style='display: {{ $datas->total() == 0 ? "none" : "" }}'>
							<div class="col-md-4 ">
								


								<div class="btn-group btn-selection btn-block  my-3" >
									<button type="button" class="btn btn-purple">
										<i class="fa fa-arrow-circle-down"></i>
										<span class='span-count-selection'>0 sélectionné(s)</span>
									</button>
									<button data-toggle="dropdown" class="btn btn-purple dropdown-toggle">
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu  btn-block" role="menu">


										<form method="POST" id="form-valider-select" class="fm-inline"	action="{{ route('commentaireValiderSelect') }}">
											@method('PATCH')
											@csrf

											<input type="hidden" name="cadnas" value="" />
										</form>
										<li>
											<a  
											data-form-submit="form-valider-select"
											data-body-text="Êtes-vous sûr de vouloir valider la séléction ?"
											data-button-text="Valider"
											data-button-type="info"
											href="#static" 
											class="btn-confirmation bnt-cadnas" 
											data-toggle="modal">
											<i class="fa fa-check"></i>
											Valider
										</a>
									</li>


									<form method="POST" id="form-verifie-select" class="fm-inline"	action="{{ route('commentaireDestroySelect') }}">
											@method('DELETE')
											@csrf

											<input type="hidden" name="cadnas" value="" />
										</form>
										<li>
											<a  
											data-form-submit="form-verifie-select"
											data-body-text="Êtes-vous sûr de vouloir supprimer la séléction ?"
											data-button-text="Supprimer"
											data-button-type="danger"
											href="#static" 
											class="btn-confirmation bnt-cadnas" 
											data-toggle="modal">
											<i class="fa fa-times"></i>
											Supprimer
										</a>
									</li>
									


								</ul>
							</div>




						</div>

						

					</div>
					










					<div class="row">
						<div class="col-sm-12">@include('back.commentaires.partials.table')</div>
					</div>


					@include('back.commentaires.partials.pagination')


				</div>


			</div>

		</div>
		<!-- end: TABLE WITH IMAGES PANEL -->
	</div>

</div>
</div>







@endsection

@section('js_only')



<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="{{ asset('assets/plugins/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>





<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="{{ asset('assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js') }}"></script>
<script src="{{ asset('assets/plugins/autosize/jquery.autosize.min.js') }}"></script>

<script src="{{ asset('assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-maskmoney/jquery.maskMoney.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/commits.js') }}"></script>
<script src="{{ asset('assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<script src="{{ asset('assets/plugins/summernote/build/summernote.min.js') }}"></script>
<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/plugins/ckeditor/adapters/jquery.js') }}"></script>

<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/form-elements.js') }}"></script>
<!--	end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->



	<script src="{{ asset('assets/plugins/ladda-bootstrap/dist/spin.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/ladda-bootstrap/dist/ladda.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js') }}"></script>
	<script src="{{ asset('assets/js/ui-buttons.js') }}"></script>

	<script type="text/javascript" src="{{ asset('assets/plugins/bootbox/bootbox.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/jquery-mockjax/jquery.mockjax.js') }}"></script>


	<script src="{{ asset('assets/plugins/bootstrap-modal/js/bootstrap-modal.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}"></script>
	<script src="{{ asset('assets/js/ui-modals.js') }}"></script>

	<script src="{{ asset('assets/js/models/produits.js') }}"></script>
	<script src="{{ asset('assets/js/check-det.js') }}"></script>
	<script src="{{ asset('assets/js/sorting.js') }}"></script>

	<script>


		jQuery(document).ready(function() {



			UIModals.init();
			Main.init();
			UIButtons.init();
		//FormElements.init();
		
		Produits.init();
		//ClientMarques.init();
		CheckDets.init();
		Sorting.init();	







	});



</script>



@endsection






