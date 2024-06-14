<div class="row">
	<div class="col-sm-12">
		<!-- start: TEXT FIELDS PANEL -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-search"></i>
				Critéres de recherche
				<div class="panel-tools">
					<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
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
				
				<form action="{{ route('users.index') }}" method="GET" name="FormOrder" class="form-search form-horizontal" >
					<input type="hidden" id="itemsValue" name="items" value="{{ request()->query('items') }}">
					<input type="hidden" id="orderBy" name="orderBy" value="{{ request()->query('orderBy') }}">
					<input type="hidden" id="orderType" name="orderType" value="{{ request()->query('orderType') }}">
					
					<div class="form-group">
						
						<div class="col-sm-4" style="">
							<div class=" input-group" style="">
								<span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
								<input type="text" 
								value="{{request()->query('dateRange')}}"
								name="dateRange" 
								class="form-control date-range" 
								style="margin:0px" 
								placeholder="Séléctionner une date .."
								
								>
								<a href="#" class="input-group-addon viderBtn" style="padding: 6px 5px;"> <i class="fa fa-times-circle"></i> </a>
								
							</div>
						</div>
						
						
						<div class="col-sm-5 ">
							
							<select name="key_search" id="form-field-select-3" class="form-control search-select search-select2" >
								
								<option value=""></option>
								
								
								<optgroup label="Par Nom">
									
									<x-optionsList 
									type="libelle" 
									:items="App\Models\User::select('id','name as libelle')->orderBy('name')->get()"
									>{{request()->query('key_search')}}</x-optionsList>
									
								</optgroup>
								
								
								<optgroup label="Par Email">
									
									<x-optionsList  	type="libelle" 	:items="App\Models\User::select('id','email as libelle')->orderBy('email')->get()"	>{{ request()->query('key_search') }}</x-optionsList>
									
								</optgroup>
								
							</select>
							
							
							
						</div>
						
						
						<div class="col-sm-3">
							
							
							<select name="user_search" class="form-control search-select">
								<option value="">All users</option>
								<option {{ request()->query('user_search') == 'activate' ? 'selected' : '' }}  value="activate">Actifs ({{ App\Models\User::Where('is_valide',1)->count() }})</option>
								<option {{ request()->query('user_search') == 'desactivate' ? 'selected' : '' }}  value="desactivate">Désactivés ({{ App\Models\User::Where('is_valide',0)->count() }})</option>
								<option {{ request()->query('user_search') == 'deleted' ? 'selected' : '' }}  value="deleted">Supprimés ({{ App\Models\User::whereNotNull('deleted_at')->withTrashed()->count() }})</option>
								
							</select>
							
							
							
							
							
						</div>
						
						
						
					</div>
					
					
					<div class="col-md-9  no-padding">
						<p>
							Exporter <span class="badge badge-new">CSV</span> <span class="badge badge-new">PDF</span> <span class="badge badge-new">Excel</span>
						</p>
					</div>
					
					
					
				</form>
			</div>
		</div>
		<!-- end: TEXT FIELDS PANEL -->
	</div>
</div>