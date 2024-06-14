<div class="row">
	<div class="col-sm-12">
		
		<!-- start: PAGE TITLE & BREADCRUMB -->
		<ol class="breadcrumb">
			<li>
				<i class="clip-grid-6"></i>
				<a href="#"> {{ $menu }} </a>
			</li>
			<li class="active">
				{{ $objet }}s
			</li>
			<li class="search-box">
				<form class="sidebar-search">
					<div class="form-group">
						<input type="text" placeholder="Start Searching...">
						<button class="submit">
							<i class="clip-search-3"></i>
						</button>
					</div>
				</form>
			</li>
		</ol>
		<div class="page-header">
			<h1>{{ $objet }}s <small>administration</small></h1>
		</div>
		<!-- end: PAGE TITLE & BREADCRUMB -->
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<x-alert>Change a few things up and try submitting again.</x-alert>
	</div>
</div>