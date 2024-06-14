
<select name="perPage" id="select-items" class="form-control search-select">

    @for ($i = 1; $i < $count/10; $i++)
    <option 
    {{ $selecte == $i*10 ? 'selected' : '' }} 
    value="{{ $i*10 }}">{{ $i*10 }}</option>
    @endfor

    
    <option {{ $count == $selecte ? 'selected' : '' }} value="{{ $count }}">All</option>
    
</select>

