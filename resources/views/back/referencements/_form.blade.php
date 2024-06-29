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

    <link href="{{ asset('assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/plugins/DataTables/actualite/css/DT_bootstrap.css') }}" />

    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
@endsection


{{-- <div class="form-group">
    <label>Page Name <sub>(With a Camel Case System)</sub></label>
    <input type="text" name="page" class="form-control"
    value="{{ old('page', $seo->page ?? null) }}"/>
</div> --}}

<div class="form-group">
    <label>Indexation</label>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="indexation" @if(old('indexation', $seo->indexation ?? null)=="1") checked @endif id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Indexer la page
        </label>
    </div>
</div>

<div class="form-group col-12 col-md-6">
    <label>Url</label>
    <input type="text" name="url" class="form-control" value="{{ old('url', $seo->url ?? null) }}" />
</div>

<div class="form-group col-12 col-md-6" id="name">
    <label>Meta Title</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $seo->name ?? null) }}" />
</div>

<div class="form-group" id="property">
    <label>Meta Keywords</label>
    <input type="text" name="property" class="form-control" value="{{ old('property', $seo->property ?? null) }}" />
</div>

<div class="form-group col-12 col-md-6" id="rel">
    <label>Rel</label>
    <input type="text" name="rel" class="form-control" value="{{ old('rel', $seo->rel ?? null) }}" />
</div>

<div class="form-group col-12 col-md-6" id="href">
    <label>Href</label>
    <input type="text" name="href" class="form-control" value="{{ old('href', $seo->href ?? null) }}" />
</div>

<div class="form-group" id="content">
    <label>Meta Description</label>
    <textarea name="content" class="form-control" cols="10" rows="10">{{ old('content', $seo->content ?? null) }}</textarea>
</div>

<div class="form-group" id="picture">
    <label for="picture">Picture</label>

    @if ($seo->image ?? '')
        <br />
        <img src='{{ $seo->image->url('') }}' width="200">
    @endif

    <input type="file" name="picture" id="picture" class="form-control-file">
</div>

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
    <script src="{{ asset('assets/js/form-elements.js') }}"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->


    <script>
        jQuery(document).ready(function() {
            Main.init();
            FormElements.init();

        });
    </script>
@endsection
