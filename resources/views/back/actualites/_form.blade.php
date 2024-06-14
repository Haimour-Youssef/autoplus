

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





<div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control"
    value="{{ old('title', $actualite->title ?? null) }}"/>
</div>

<div class="form-group">
    <label>Content</label>
    <textarea name="content" class="ckeditor form-control" cols="10" rows="10">{{ old('content', $actualite->content ?? null) }}</textarea>
</div>


<div class="form-group">
    <label for="partenaire">Marque</label>
    <select name="partenaire" class="form-control mb-3">
        @foreach(App\Models\Partenaire::orderBy('libelle')->get() as $data)
      <option value="{{ $data->id }}" 
         @if ( !empty($partenaire)) {{ $partenaire->partenaire_id == $data->id ? 'selected' : '' }} @endif
         >{{ $data->libelle }}</option>
         @endforeach
     </select>
 </div>

 <div class="form-group">
    <label>Date</label>
    <div class="input-group">
        <input value="{{ old('date_actualite', $actualite->date_actualite ?? null) }}"  name="date_actualite" type="text" data-date-format="yyyy-mm-dd" data-date-viewmode="years" class="form-control date-picker">
        <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
    </div>
</div>


 <div class="form-group">

        <input type="checkbox" name="accueil" value="1" 
         @if ( isset($actualite)) {{ $actualite->accueil == 1 ? 'checked' : '' }}
        @else checked
        @endif
        /> <label>Accueil</label>

      </div>





<div class="form-group">
    <label for="picture">Picture</label>

    @if($actualite ?? '')
    <br />
    <img src='{{ $actualite->image->url("thumbails-450") }}' width="200">
    @endif
    

    <input type="file" name="picture" id="picture" class="form-control-file"></div>

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

