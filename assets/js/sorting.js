var Sorting = function () {
    //function to initiate bootstrap extended modals
    var initSorting = function () {
    	


        

            $orderBy=$('#orderBy').val();
            $orderType=$('#orderType').val();
            //alert($orderType);
            $newOrder = "desc";if ($orderType == $newOrder) $newOrder = 'asc';
            
            $th = $('.table th[data-sorting-name="' + $orderBy + '"]');
            $th.addClass("sorting_" + $orderType);
            $th.attr("data-sorting-type",$newOrder);

        
        $('#itemsValue').val($('#select-items').val());
        
        $('.search-select').on('change', function (e) {
            
            $('#itemsValue').val($('#select-items').val());
            $('.form-search').submit();
        });
        
        
        $('.sorting').on('click', function (e) {
            
            $('#orderBy').val($(this).attr('data-sorting-name'));
            $('#orderType').val($(this).attr('data-sorting-type'));
            
            $('.form-search').submit();
        });


    	

    	
    	
    };
    return {
    	init: function () {
    		initSorting();
    	}
    };
}();