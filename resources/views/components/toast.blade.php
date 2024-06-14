
@if(session()->has('status'))
<script>
    $( window ).load(function() { 
			return $.toast({
				heading:"{{ session()->get('title') }}",
                text:"{{ session()->get('content') }}",
				showHideTransition:"slide",
				position:"top-right",
				icon:"{{ session()->get('status') }}",
				loader:!1
			})
		});
</script>
@endif

