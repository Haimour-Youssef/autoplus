<div class="form-group">
	<label>Lien</label>
	<input type="text" name="lien" class="form-control"
	value="{{ old('lien', $partenaire->lien ?? null) }}"/>
</div>


<div class="form-group">
	<label>Libelle</label>
	<input type="text" name="libelle" class="form-control"
	value="{{ old('libelle', $partenaire->libelle ?? null) }}"/>
</div>




<div class="form-group">
	<label for="picture">Picture 563 * 300</label>

	@if($partenaire ?? '')
	<br />
	<img src='{{ $partenaire->image->url() }}' width="200">
	@endif



	<input type="file" name="picture" id="picture" class="form-control-file">
</div>

	<x-errors myClass="danger"></x-errors>