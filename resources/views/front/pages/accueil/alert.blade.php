




@if(session()->has('status')) 

<div role="alert" id="alert_div_header" style="display:none;position: fixed;top: 0;width: 100%;z-index: 10;text-align: center;background: {{ session()->has('color') ? session()->get('color') : 'green' }};padding: 20px;color: white;font-weight: bold;box-shadow: 0px 0px 2px rgba(0,0,0);" class="">
  {{ session()->get('title') }} <a href="#" id="alert_a_header" style="background: white;padding: 0px 7px;color: {{ session()->has('color') ? session()->get('color') : 'green' }};border-radius: 50%;float: right;">X</a>
                         </div>

<script type="text/javascript">


jQuery(document).ready(function() {
   jQuery('#alert_div_header').slideDown().delay(5000).slideUp();

jQuery('#alert_a_header').click(function(e){
    e.preventDefault();
   jQuery('#alert_div_header').hide(); 
});
});
</script>


@endif



<div style="position: fixed;bottom: 20px;left: 13px;z-index: 10;" class="whatsup_icon" >
	<a href="https://api.whatsapp.com/send/?phone={!! nl2br(App\Models\Parametre::where('id',3)->select('valeur')->get()->first()->valeur) !!}&text&app_absent=0" target="_blank"><img src="{{ url('/') }}/asset/assets/whatsupIcon.png" style="width: 46px;"></a>
</div>



<style type="text/css">
	.whatsup_icon {

                    display: none;

                }
	@media (max-width: 767px) {

                .whatsup_icon {

                    display: block;

                }

            }
</style>



