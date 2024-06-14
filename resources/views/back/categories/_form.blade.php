

@section('css_only')
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link href="{{ asset('assets/plugins/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" />



<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link rel="stylesheet" href="{{ asset('assets/plugins/select2/select2.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datepicker/css/datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/summernote/build/summernote.css') }}">


<link rel="stylesheet" href="{{ asset('assets/plugins/ladda-bootstrap/dist/ladda-themeless.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-social-buttons/social-buttons-3.css') }}">

<link href="{{ asset('assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/actualite/css/DT_bootstrap.css') }}" />

<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->


@endsection 




<div class="row">
			<div class="col-md-6">


<div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control"
    value="{{ old('title', $categorie->title ?? null) }}"/>
</div>










<div class="form-group">
    <label>Description</label>
    <textarea name="description" class="ckeditor form-control" cols="10" rows="10">{{ old('description', $categorie->description ?? null) }}</textarea>
</div>




<div class="form-group">

<label for="parent">Cat.Parent</label>

<select name="parent" class="form-control mb-3">

<option value="0">--</option>

  @foreach(App\Models\Categorie::orderBy('title')->where('parent',0)->get() as $data)

  <option value="{{ $data->id }}" 

   @if ( isset($categorie)) {{ $categorie->parent == $data->id ? 'selected' : '' }} @endif

   >{{ $data->title }}</option>

   @endforeach

 </select>

</div>



            </div>

            <div class="col-md-6">

<div class="div_classement_and_marque">

<div class="form-group">
    <label>Classement</label>
    <input type="text" name="classement" class="form-control"
    value="{{ old('classement', $categorie->classement ?? null) }}"/>
</div>




<div class="form-group">

 



       @foreach (App\Models\Partenaire::orderBy('libelle')->get() as $data)

       <input type="checkbox" name="partenaires[]" value="{{ $data->id }}"


         @if($categorie ?? '')

             @foreach ($categorie->partenaires as $dataP)

             @if($dataP->id == $data->id) checked="checked" @endif

             @endforeach

         @endif

         > {{ ucfirst($data->libelle) }} 

         @endforeach



 </div>


 <div class="form-group">
    <label for="picture">Icon 85 * 85px (PNG)</label>

    @if($categorie ?? '' )
    <br />
    <img src='{{ $categorie->image ? $categorie->image->url() : "--" }}' >
    @endif


    <input type="file" name="picture" id="picture" class="form-control-file"></div>





    <div class="form-group">
    <label for="picture">Image (JPG)</label>

    @if($categorie ?? '' )
    <br />
    
    <img src='{{ Storage::url("categories/".$categorie->id.".jpg") ?? "" }}' >
    @endif


    <input type="file" name="icon" id="icon" class="form-control-file"></div>



    <div class="alert alert-warning">
													<span class="label label-warning">NOTE!</span>
													<span> Catégorie parent : 1105px * 710 | Catégorie : 500px * 375 </span>
												</div>



  
</div>



            </div></div>
    <x-errors myClass="danger"></x-errors>



    

    @section('js_only')




    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script src="{{ asset('assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/autosize/jquery.autosize.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-maskmoney/jquery.maskMoney.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/commits.js') }}"></script>
    <script src="{{ asset('assets/plugins/jQuery-Tags-Input/jquery.tagsinput.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/summernote/build/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/plugins/ckeditor/adapters/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/form-elements.js') }}"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->


    <script>
        jQuery(document).ready(function() {
            Main.init();
            FormElements.init();
            
        });
    </script>






    @endsection

