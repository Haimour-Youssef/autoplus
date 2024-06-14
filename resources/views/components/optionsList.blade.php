
@foreach($items as $item)
<option 

 

@if ($type == 'id')
value="{{ $item->id }}"
{{-- $item->id == $slot ? 'selected' : '' --}}   
@else 
value="{{ ucfirst($item->libelle) }}" 
{{ $item->libelle == $slot ? 'selected' : '' }} 
@endif

>{{ ucfirst($item->libelle) }}</option>
@endforeach