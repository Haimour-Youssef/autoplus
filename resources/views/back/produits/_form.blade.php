



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





<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->





@endsection 


<x-errors myClass="danger"></x-errors>









<div class="tabbable">
  <ul id="myTab4" class="nav nav-tabs tab-padding tab-space-3 tab-blue">
    <li class="active">
      <a href="#panel_tab3_example1" data-toggle="tab">
        Libelle
      </a>
    </li>
    <li>
      <a href="#panel_tab3_example2" data-toggle="tab">
        Famille
      </a>
    </li>
    <li>
      <a href="#panel_tab3_example3" data-toggle="tab">
        Prix
      </a>
    </li>
    <li>
      <a href="#panel_tab3_example4" data-toggle="tab">
        Photo
      </a>
    </li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane in active" id="panel_tab3_example1">




      <div class="form-group">

        <label>Title</label>

        <input type="text" name="libelle" class="form-control"

        value="{{ old('libelle', $produit->libelle ?? null) }}"/>

      </div>



      <div class="form-group">

        <label>Description</label>

        <textarea name="description" class="form-control" cols="10" rows="10">{{ old('description', $produit->description ?? null) }}</textarea>

      </div>


    </div>
    <div class="tab-pane" id="panel_tab3_example2">















      <div class="form-group">

        <label for="marque">Marque</label>

        <select name="marque_id" class="form-control mb-3">

          @foreach(App\Models\Marque::orderBy('libelle')->get() as $data)

          <option value="{{ $data->id }}" 

           @if ( isset($produit)) {{ $produit->marque_id == $data->id ? 'selected' : '' }} @endif

           >{{ $data->libelle }}</option>

           @endforeach

         </select>

       </div>





       <div class="form-group">

        <label for="famille">Famille</label>

        <select name="famille_id" class="form-control mb-3">

          @foreach(App\Models\Famille::orderBy('libelle')->get() as $data)

          <option value="{{ $data->id }}" 

           @if ( isset($produit)) {{ $produit->famille_id == $data->id ? 'selected' : '' }} @endif

           >{{ $data->libelle }}</option>

           @endforeach

         </select>

       </div>






       <div class="form-group">

        <label for="fournisseur">Fournisseur</label>

        <select name="fournisseur_id" class="form-control mb-3">

          @foreach(App\Models\Fournisseur::orderBy('libelle')->get() as $data)

          <option value="{{ $data->id }}" 

           @if ( isset($produit)) {{ $produit->fournisseur_id == $data->id ? 'selected' : '' }} @endif

           >{{ $data->libelle }}</option>

           @endforeach

         </select>

       </div>




















     </div>

          <div class="tab-pane" id="panel_tab3_example3">
      


            <div class="form-group">

        <label>Prix original (TTC)</label>

        <input type="text" name="prix_ttc" class="form-control"

        value="{{ old('prix_ttc', $produit->prix_ttc ?? null) }}"/>

      </div>

      <div class="form-group">

        <label>Prix de vente (TTC)</label>

        <input type="text" name="prix_reduis" class="form-control"

        value="{{ old('prix_reduis', $produit->prix_reduis ?? null) }}"/>

      </div>

      <div class="form-group">

        <label>Unité(s) en stock</label>

        <input type="text" name="stock" class="form-control"

        value="{{ old('stock', $produit->stock ?? null) }}"/>

      </div>




      



      </div>
     <div class="tab-pane" id="panel_tab3_example4">







      <div class="form-group">



        @if($produit ?? '')

        <br />

        @if($produit->image)
        <img width="300"  src="{{ $produit->image->url('thumbails-450') }}">
        @else
        <img width="300" src="{{ asset('assets/images/no-picture.jpg') }}">
        @endif

        @endif





        <input type="file" name="picture" id="picture" class="form-control-file"></div>







      </div>
    </div>
  </div>
























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



  <script src="{{ asset('assets/plugins/bootstrap-modal/js/bootstrap-modal.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}"></script>
  <script src="{{ asset('assets/js/ui-modals.js') }}"></script>


  <script src="{{ asset('assets/js/form-elements.js') }}"></script>

  <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->





  <script>

    jQuery(document).ready(function() {

      Main.init();

            //FormElements.init();

            

          });

        </script>













        @endsection



