<div class="row">
	<div class="col-sm-2 my-3 @if($datas->total() < 10) hidden @endif">
		<x-optionsPerPage 
								selecte="{{ request()->query('items') }}"
								count='{{ $datas->total() }}'></x-optionsPerPage>
</div>
<div class="col-sm-10 my-3 text-right">
	{!! $datas->withQueryString()->links() !!}
</div>
</div>