<div class="alert alert-{{ $type ?? '' }} no-display">
	<button data-dismiss="alert" class="close">
		×
	</button>
	<div class="alert-body">{{ $slot }}</div>
</div>