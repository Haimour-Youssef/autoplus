<div class="form-group">
    <label>Classement</label>
    <input type="text" name="classement" class="form-control"
        value="{{ old('classement', $banniere->classement ?? null) }}"/>
</div>


<div class="form-group">
    <label>Lien</label>
    <input type="text" name="lien" class="form-control"
        value="{{ old('lien', $banniere->lien ?? null) }}"/>
</div>

<div class="form-group">
    <label for="picture">Picture 1920 * 600</label>

    @if($banniere ?? '')
    <br />
    <img src='{{ $banniere->image->url() }}' width="300">
    @endif
   

    <input type="file" name="picture" id="picture" class="form-control-file"></div>

<x-errors myClass="danger"></x-errors>