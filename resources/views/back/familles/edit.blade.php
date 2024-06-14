@extends('back.layouts.app')



@section('content')







    <div class="main-content">

	

	<!-- end: SPANEL CONFIGURATION MODAL FORM -->

	<div class="container">

		

		@include('back.layouts.title', ['menu' => 'Paramétrages','objet' => 'Famille'])

		

		

		

		

		<div class="row">

			<div class="col-md-12">

				<!-- start: TABLE WITH IMAGES PANEL -->

				<div class="panel panel-default">

					<div class="panel-heading">

						<i class="fa fa-external-link-square"></i>

						Modifier Famille(s)

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

						

						

						

						

						

						    <form method="POST" 

          action="{{ route('familles.update', ['famille' => $famille->id]) }}" enctype="multipart/form-data">

        @csrf

        @method('PUT')

        <input type="hidden" name="id" value="{{ $famille->id }}">



        @include('back.familles._form')



        <button type="submit" class="btn btn-primary btn-block">Update!</button>

    </form>

						

						

						

						

					</div>

					

					

				</div>

				

			</div>

			<!-- end: TABLE WITH IMAGES PANEL -->

		</div>

		

	</div>

</div>



@endsection









