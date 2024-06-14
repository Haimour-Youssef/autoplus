var ClientVehicules = function () {
    //function to initiate bootstrap extended modals
    var initClientVehicules = function () {
    	





    	$('.search-select-client').on('change', function(e) {


    		$('.close-div-nouveau-client').trigger('click');
    		if($(this).val() == "") return;

    		

    		$.ajaxSetup({
    			headers: {
    				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			}
    		});
    		var formData = {client: $(this).val()};
    		$.blockUI({message : '<i class="fa fa-spinner fa-spin"></i> En cours...'});
    		
    		$.ajax({
    			type: 'POST',url: 'vehicules/client',data: formData,dataType: 'json',
    			success : function(status) {
    				$('.search-select-vehicule').empty();
    				$(status.data).appendTo('.search-select-vehicule');
    				$.unblockUI();
    			}
    		});	
    	});




    	$('.search-select-vehicule').on('change', function(e) {

    		$('.close-div-nouveau-vehicule').trigger('click');
    		if($(this).val() == "") return;
    		$.ajaxSetup({
    			headers: {
    				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			}
    		});
    		var formData = {vehicule: $(this).val()};
    		$.blockUI({message : '<i class="fa fa-spinner fa-spin"></i> En cours...'});
    		
    		$.ajax({
    			type: 'POST',url: 'vehicule/detailsAjax',data: formData,dataType: 'json',
    			success : function(status) {

    				$('.search-select-constructeur').val(status.vehicule['constructeur_id']);
    				$('.search-select-categorie').val(status.vehicule['categorie_id']);

                	//if(status.vehicule['categorie'])$('.categorie-input').val(status.vehicule['categorie']['libelle']);

                	$.unblockUI();
                }
            });	
    	});







    	$('.btn-enregistrer-client').on('click', function(e) {
    		$.ajaxSetup({
    			headers: {
    				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			}
    		});
    		var formData = {nom: $('input[name="nom"]').val(),gsm: $('input[name="gsm"]').val(),adresse: $('input[name="adresse"]').val()};
    		
            $.blockUI({message : '<i class="fa fa-spinner fa-spin"></i> En cours...'});
            
            $.ajax({
             type: 'POST',url: 'clients/add',data: formData,dataType: 'json',
             success : function(status) {

                $('.div-nouveau-client input').val('');
                $('.search-select-client').empty();
                $(status.data).appendTo('.search-select-client');
                $('.div-nouveau-client').fadeOut();
                $.unblockUI();
            }, error: function (reject) {
                errorsValidationAjax(reject);
                $.unblockUI();
            }
        });	
        });










    	$('.btn-enregistrer-vehicule').on('click', function(e) {
    		$.ajaxSetup({
    			headers: {
    				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			}
    		});
            $('.text-danger').text('');
            var formData = {
             matricule: $('input[name="matricule"]').val(),
             client: $('.search-select-client').val(),
             modele: $('input[name="modele"]').val(),
             ptc: $('input[name="ptc"]').val(),
             km: $('input[name="km"]').val(),
             carte: $('input[name="carte"]').val(),
         };

         $.blockUI({message : '<i class="fa fa-spinner fa-spin"></i> En cours...'});

         $.ajax({
             type: 'POST',url: 'vehicules/add',data: formData,dataType: 'json',
             success : function(status) {

                $('.div-nouveau-vehicule input').val('');
                $('.search-select-vehicule').empty();
                $(status.data).appendTo('.search-select-vehicule');
                $('.div-nouveau-vehicule').fadeOut();
                $.unblockUI();
            }, error: function (reject) {
                errorsValidationAjax(reject);
                $.unblockUI();
            }
        });	
     });










    	$('.btn-add-client').click(function(e) {
    		e.preventDefault();
    		$('.div-nouveau-client').fadeIn();

    	});

    	$('.close-div-nouveau-client').click(function(e) {
    		e.preventDefault();
    		$('.div-nouveau-client').fadeOut();

    	});


    	$('.btn-add-vehicule').click(function(e) {
    		e.preventDefault();
    		if($('.search-select-client').val() == "") {alert("Veuillez sélectionner un client d'abord!");return;}
    		$('.div-nouveau-vehicule').fadeIn();

    	});

    	$('.close-div-nouveau-vehicule').click(function(e) {
    		e.preventDefault();
    		$('.div-nouveau-vehicule').fadeOut();

    	});





    };
    return {
    	init: function () {
    		initClientVehicules();
    	}
    };
}();