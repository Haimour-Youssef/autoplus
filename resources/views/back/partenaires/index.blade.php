@extends('back.layouts.app')

@section('css_only')
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link href="{{ asset('assets/plugins/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" />



<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link rel="stylesheet" href="{{ asset('assets/plugins/select2/select2.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datepicker/css/datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}">
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
<div class="main-content" data-object="partenaires">
	
	<!-- end: SPANEL CONFIGURATION MODAL FORM -->
	<div class="container">
		
		@include('back.layouts.title', ['menu' => 'Paramétrages','objet' => 'Partenaire'])
		
		
		
		
		<div class="row">
			<div class="col-md-12">
				<!-- start: TABLE WITH IMAGES PANEL -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="fa fa-external-link-square"></i>
						{{ $partenaires->count() }} Partenaire(s)
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
						
						
						
						<div class="row">
							<div class="col-md-2 ">
								
								
								<a class="btn btn-green" href="{{ route('partenaires.create') }}">
									Add New <i class="fa fa-plus"></i>
								</a>
								
							</div>
							
							
							
						</div>
						
						<div class="row">
							<div class="col-sm-12">@include('back.partenaires.partials.table')</div>
						</div>
						
						
						
						
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
<script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-maskmoney/jquery.maskMoney.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/commits.js') }}"></script>
<script src="{{ asset('assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<script src="{{ asset('assets/plugins/summernote/build/summernote.min.js') }}"></script>
<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/plugins/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ asset('assets/js/form-elements.js') }}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->



<script src="{{ asset('assets/plugins/ladda-bootstrap/dist/spin.min.js') }}"></script>
<script src="{{ asset('assets/plugins/ladda-bootstrap/dist/ladda.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js') }}"></script>
<script src="{{ asset('assets/js/ui-buttons.js') }}"></script>




<script src="{{ asset('assets/plugins/bootstrap-modal/js/bootstrap-modal.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}"></script>
<script src="{{ asset('assets/js/ui-modals.js') }}"></script>


<script>
	jQuery(document).ready(function() {
		Main.init();
		FormElements.init();
		UIButtons.init();
		UIModals.init();
		
		
		function calculeItemsSelected()
		{
			$('.span-count-selection').text($('.checkbox-det:checked').size() + ' selected');
		}
		
		$('.checkbox-all').click(function() {
			
			$('.checkbox-det').prop( "checked", $(this).is(':checked') );
			
			calculeItemsSelected();
			
		});
		
		
		$('.checkbox-det').click(function() {
			
			calculeItemsSelected();
			
		});
		$('.bnt-cadnas').click(function() {
			
			$cadnas = $("#" + $(this).attr('data-form-submit')).find("input[name=cadnas]");
			
			$cadnas.val('');
			$('.checkbox-det:checked').each(function( index ) {
				$separator = ',';
				if (index == 0) $separator = '';
				$cadnas.val($cadnas.val() + $separator + ($( this ).attr("data-id")));
			});
			
		});
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		if($('#orderBy').val() == "")
		{
			$('.table th[data-sorting-name="name"]').addClass("sorting_asc");
		}
		else
		{
			$orderBy=$('#orderBy').val();
			$orderType=$('#orderType').val();
			$newOrder = "asc";if ($orderType == $newOrder) $newOrder = "desc";
			
			$th = $('.table th[data-sorting-name="' + $orderBy + '"]');
			$th.addClass("sorting_" + $orderType);
			$th.attr("data-sorting-type",$newOrder);
		}
		
		
		
		
		
		$('#itemsValue').val($('#select-items').val());
		$('.search-select').on('change', function (e) {
			
			$('#itemsValue').val($('#select-items').val());
			$('.form-search').submit();
		});
		
		
		$('.sorting').on('click', function (e) {
			
			$('#orderBy').val($(this).attr('data-sorting-name'));
			$('#orderType').val($(this).attr('data-sorting-type'));
			
			$('.form-search').submit();
		});
		
		
		
		
	});
</script>



@endsection






