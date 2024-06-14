



<div class="form-group">

	<label>Libelle</label>

	<input type="text" name="libelle" class="form-control"

	value="{{ old('libelle', $famille->libelle ?? null) }}"/>

</div>


<div class="form-group">

    <label>Description</label>

    <input type="text" name="description" class="form-control"

    value="{{ old('description', $famille->description ?? null) }}"/>

</div>





<div class="form-group">

    <label for="picture">Picture</label>



    @if($produit ?? '')

    <br />

    <img src='' width="200">

    @endif

    



    <input type="file" name="picture" id="picture" class="form-control-file"></div>













	<x-errors myClass="danger"></x-errors>