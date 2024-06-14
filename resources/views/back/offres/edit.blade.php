@extends('back.layouts.app')

@section('content')



    <div class="main-content">
	
	<!-- end: SPANEL CONFIGURATION MODAL FORM -->
	<div class="container">
		
		@include('back.layouts.title', ['menu' => 'Paramétrages','objet' => 'Modifier Offre'])
		
		
		
		
		<div class="row">
			<div class="col-md-12">
				<!-- start: TABLE WITH IMAGES PANEL -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="fa fa-external-link-square"></i>
						Modifier Offre(s)
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
						
						
						






















					<div class="tabbable">
												<ul id="myTab4" class="nav nav-tabs tab-padding tab-space-3 tab-blue">
													<li class="active">
														<a href="#panel_tab3_example1" data-toggle="tab">
															Détails offre
														</a>
													</li>
													<li>
														<a href="#panel_tab3_example2" data-toggle="tab">
															Condidats ({{ $offre->users->count() }})
														</a>
													</li>
													
												</ul>
												<div class="tab-content">
													<div class="tab-pane in active" id="panel_tab3_example1">
													<form method="POST" 
          action="{{ route('offres.update', ['offre' => $offre->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $offre->id }}">

        @include('back.offres._form')

        <button type="submit" class="btn btn-primary btn-block">Update!</button>
    </form>
													</div>
													<div class="tab-pane" id="panel_tab3_example2">
														<p>
														
														@php
														$users = $offre->users
														@endphp
														@include('back.users.partials.table')
														</p>
														
													</div>
													
												</div>
											</div>






















						
						
						    
						
						
						
						
					</div>
					
					
				</div>
				
			</div>
			<!-- end: TABLE WITH IMAGES PANEL -->
		</div>
		
	</div>
</div>

@endsection




