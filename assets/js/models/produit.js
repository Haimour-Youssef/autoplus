function actualiser(){
	
	$(window).data('ajaxready', true);
	
	$('.form-search').on('submit', function (e) {
		
		e.preventDefault();
		if ($(window).data('ajaxready') == false) return;
		$(window).data('ajaxready', false);
		ajaxExecute('searching');
		return false;
		
	});
	
	
	
	
}



function ajaxExecute(mode)
{
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	
	
	//console.log(formData);
	
	var url = 'produits/search';
	var type = 'POST';
	
	if(mode == 'searching')
	{
		var formData = $('.form-search').serialize() + '&elements=0';
	

		$.blockUI({
			message : '<i class="fa fa-spinner fa-spin"></i> En cours...'
		});
		
		
		
		$.ajax({
			type: type,
			url: url,
			data: formData,
			dataType: 'json',
			success : function(status) {
				
				console.log('searching');
				$('.div-content-table').html(status.html);
				$.unblockUI();
				$('.counter-produits').text(status.total);
				
				$(window).data('ajaxready', true);
				
			}
		});
	}
	
	/// charging
	else{

		var formData = $('.form-search').serialize() + '&elements=' + $('.checkbox-det').size();
	

		$(window).data('ajaxready', false);
		
		$.ajax({
			type: type,
			url: url,
			data: formData,
			dataType: 'json',
			success : function(status) {
				
				console.log('charging');
				$('.div-content-table').append(status.html);
				
				$('#loader').fadeOut(400);
				
				$(window).data('ajaxready', true);
				
			}
		});
		
		
		
	}
	
	
	
	
}



function actualiserAjax(){
	
	
	infiniteScroll();
	
	
	
	function infiniteScroll(){
		
		
		//if($('.counter-produits').text() > $('.checkbox-det').size()) {
		
		//console.log('encore');
		
		$(window).data('ajaxready', true);
		
		
		var deviceAgent = navigator.userAgent.toLowerCase();
		var agentID = deviceAgent.match(/(iphone|ipod|ipad)/);
		
		$(window).scroll(function() {
			
			if ($(window).data('ajaxready') == false) return;
			
			//console.log('ST' + $(window).scrollTop());
			//console.log('WH' + $(window).height());
			//console.log('DH' + $(document).height());

			//if(($(window).scrollTop() + $(window).height()) == $(document).height()
			//|| agentID && ($(window).scrollTop() + $(window).height()) > $(document).height()) {
			
			if(	$(document).height() - 300 > ($(window).scrollTop())) {
				
				$(window).data('ajaxready', false);
				
				$('#loader').fadeIn(400);
				
				ajaxExecute('charging');
				
				
				
				
			}
		});
		//}
	};
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$('.search-select').on('change', function (e) {
		$('.form-search').submit();
	});
	
	
	$('.table th').removeClass("sorting_desc");
	$('.table th').removeClass("sorting_asc");
	
	if($('#orderBy').val() == "")
	{
		$('.table th[data-sorting-name="libelle"]').addClass("sorting_asc");
	}
	else
	{
		$orderBy=$('#orderBy').val();
		$orderType=$('#orderType').val();
		$newOrder = "asc";if ($orderType == $newOrder) $newOrder = "desc";
		
		$th = $('.table th[data-sorting-name="' + $orderBy + '"]');
		$th.addClass("sorting_" + $orderType);
		$th.attr("data-sorting-type",$newOrder);
	}	
	
	
	
	
	function calculeItemsSelected()
	{
		$('.span-count-selection').text($('.checkbox-det:checked').size() + ' selected');
	}
	
	$('.checkbox-all').click(function() {
		
		$('.checkbox-det').prop( "checked", $(this).is(':checked') );
		
		calculeItemsSelected();
		
	});
	
	$('.checkbox-det').click(function() {
		
		//console.log('checkbox-det clik');
		calculeItemsSelected();
		
	});
	
	
	
	$('.bnt-cadnas').click(function() {
		
		$cadnas = $("#" + $(this).attr('data-form-submit')).find("input[name=cadnas]");
		
		$cadnas.val('');
		$('.checkbox-det:checked').each(function( index ) {
			$separator = ',';
			if (index == 0) $separator = '';
			$cadnas.val($cadnas.val() + $separator + ($( this ).attr("data-id")));
		});
		
	});
	
	
	
	
	
	
	
	
	$('.sorting').on('click', function () {
		
		//alert('son');
		$('#orderBy').val($(this).attr('data-sorting-name'));
		$('#orderType').val($(this).attr('data-sorting-type'));
		
		
		$('.form-search').submit();
		
	});
	
	
	
	
	
}