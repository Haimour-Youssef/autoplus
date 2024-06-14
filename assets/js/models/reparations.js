var Reparations = function () {
    //function to initiate bootstrap extended modals
    var initReparations = function () {
        





        $('.form-submit-ajax').on('submit', function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            // renitialiser errors
            
            var formData = $('.form-submit-ajax').serialize();

            $.blockUI({message : '<i class="fa fa-spinner fa-spin"></i> En cours...'});

            $.ajax({
             type: 'POST',url: 'reparations',data: formData,dataType: 'json',
             success : function(status) {$('.form-submit-ajax').trigger("reset");window.location.reload();}, 
             error: function (reject) {
                errorsValidationAjax(reject);
                $.unblockUI();
            }
        }); 
        });




        $(".search-select2").select2({
            placeholder: "Recherche Rapide ...",
            minimumInputLength: 3,
            allowClear: true
        });


        $(".homologation-select2").select2({
            placeholder: "Homologation Tachy ...",
            allowClear: true
        });





    };
    return {
        init: function () {
            initReparations();
        }
    };
}();