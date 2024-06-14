var CheckDets = function () {
    //function to initiate bootstrap extended modals
    var initCheckDets = function () {
    	


        
    function calculeItemsSelected()
    {
        $nbr = $('.checkbox-det:checked').size();
        $('.span-count-selection').text($nbr + ' sélectionné(s)');

        //if($nbr == 0) $('.btn-selection').hide();
        //else $('.btn-selection').show();
    }

    $('.checkbox-all').click(function() {


        $('.checkbox-det').prop( "checked", $(this).is(':checked') );

        calculeItemsSelected();

    });


    $('.checkbox-det').click(function() {

        calculeItemsSelected();

    });
    $('.bnt-cadnas').click(function() {

        if($('.checkbox-det:checked').size() == 0) {
            alert('0 sélectionné');
            return false;
        }
        $cadnas = $("#" + $(this).attr('data-form-submit')).find("input[name=cadnas]");

        $cadnas.val('');
        $('.checkbox-det:checked').each(function( index ) {
            $separator = ',';
            if (index == 0) $separator = '';
            $cadnas.val($cadnas.val() + $separator + ($( this ).attr("data-id")));
        });

    });


    	

    	
    	
    };
    return {
    	init: function () {
    		initCheckDets();
    	}
    };
}();