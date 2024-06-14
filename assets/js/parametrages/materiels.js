





////// Foreign = pay
////// Foreign2 = typ


















var TableData = function () {
	
	
	var runEditableTable = function(){
		
		var newRow = false;
		var actualEditingRow = null;
		
		function restoreRow(oTable, nRow) {
			var aData = oTable.fnGetData(nRow);
			var jqTds = $('>td', nRow);
			
			for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
				oTable.fnUpdate(aData[i], nRow, i, false);
			}
			
			oTable.fnDraw();
		}
		
		function editRow(oTable, nRow) {
			var aData = oTable.fnGetData(nRow);
			var jqTds = $('>td', nRow);
			jqTds[0].innerHTML = '<input id="libelle-new" name="libelle" type="text" class="form-control" value="' + aData[0] + '"><div class="text-danger libelle-error"></div></form>';
			jqTds[1].innerHTML = $('#' + $('#sample_2').attr('data-foreign') + '_select_div').html();
			jqTds[2].innerHTML = $('#' + $('#sample_2').attr('data-foreign2') + '_select_div').html();
			

			 // Si update
			 $select = $('#sample_2 .' + $('#sample_2').attr('data-foreign') + '_select');
			 $select2 = $('#sample_2 .' + $('#sample_2').attr('data-foreign2') + '_select');
			 $select3 = $('#sample_2 .' + $('#sample_2').attr('data-foreign3') + '_select');
			 $tr = $select.parents('tr');

			 var idRow = $tr.attr('data-id');
			 
			 if (idRow) {				
				$select.val($tr.attr('data-id-' + $('#sample_2').attr('data-foreign')));
				$select2.val($tr.attr('data-id-' + $('#sample_2').attr('data-foreign2')));
				
			}
			 

			jqTds[3].innerHTML = '<input type="text" class="form-control" name="serie" value="' + aData[3] + '">';
			jqTds[4].innerHTML = '<input type="text" class="form-control" name="programme" value="' + aData[4] + '">';
			jqTds[5].innerHTML = '<input type="text" class="form-control" name="aslan" value="' + aData[5] + '">';
			jqTds[6].innerHTML = '<input type="text" class="form-control" name="acquisition" value="' + aData[6] + '">';
			jqTds[7].innerHTML = '<input type="text" class="form-control" name="etalonage" value="' + aData[7] + '">';
			jqTds[8].innerHTML = '<input type="text" class="form-control" name="p_etalonage" value="' + aData[8] + '">';
			
			
			
			jqTds[9].innerHTML = '<a class="save-row" href="">Save</a>';
			jqTds[10].innerHTML = '<a class="cancel-row" href="">Cancel</a>';
			
		}
		
		function saveRow(oTable, nRow) {
			var jqInputs = $('input', nRow);
			oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
			oTable.fnUpdate($('#sample_2 .' + $('#sample_2').attr('data-foreign') + '_select option:selected').text(), nRow, 1, false);
			oTable.fnUpdate($('#sample_2 .' + $('#sample_2').attr('data-foreign2') + '_select option:selected').text(), nRow, 2, false);
			oTable.fnUpdate(jqInputs[1].value, nRow, 3, false);
			oTable.fnUpdate(jqInputs[2].value, nRow, 4, false);
			oTable.fnUpdate(jqInputs[3].value, nRow, 5, false);
			oTable.fnUpdate(jqInputs[4].value, nRow, 6, false);
			oTable.fnUpdate(jqInputs[5].value, nRow, 7, false);
			oTable.fnUpdate(jqInputs[6].value, nRow, 8, false);
			oTable.fnUpdate('<a class="edit-row" href="">Edit</a>', nRow, 9, false);
			oTable.fnUpdate('<a class="delete-row" href="">Delete</a>', nRow, 10, false);
			oTable.fnDraw();
			newRow = false;
			actualEditingRow = null;
		}
		
		$('body').on('click', '.add-row', function(e) {
			e.preventDefault();
			if (newRow == false) {
				if (actualEditingRow) {
					restoreRow(oTable, actualEditingRow);
				}
				newRow = true;
				var aiNew = oTable.fnAddData(['','','', '', '', '','','', '', '', '']);
				var nRow = oTable.fnGetNodes(aiNew[0]);
				editRow(oTable, nRow);
				actualEditingRow = nRow;
			}
		});
		$('#sample_2').on('click', '.cancel-row', function(e) {
			
			e.preventDefault();
			if (newRow) {
				newRow = false;
				actualEditingRow = null;
				var nRow = $(this).parents('tr')[0];
				oTable.fnDeleteRow(nRow);
				
			} else {
				restoreRow(oTable, actualEditingRow);
				actualEditingRow = null;
			}
		});
		
		
		
		
		
		
		
		
		
		
		
		
		
		$('#sample_2').on('click', '.delete-row', function(e) {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			e.preventDefault();
			
			if (newRow && actualEditingRow) {
				oTable.fnDeleteRow(actualEditingRow);
				newRow = false;
				
			}
			var nRow = $(this).parents('tr')[0];
			var dataId = $(this).parents('tr').attr('data-id');
			bootbox.confirm("Are you sure to delete this row?", function(result) {
				if (result) {
					$.blockUI({
						message : '<i class="fa fa-spinner fa-spin"></i> Suppression ...'
					});
					$.mockjax({
						url : '/tabledata/delete/webservice',
						dataType : 'json',
						responseTime : 1000,
						responseText : {
							say : 'ok'
						}
					});
					
					$.ajax({
						url : $('#sample_2').attr('data-object') + '/' + dataId,
						dataType : 'json',
						type: 'DELETE',
						success : function(status) {
							

							$.unblockUI();
							oTable.fnDeleteRow(nRow);
							$('.' + $('#sample_2').attr('data-object') +'-counter').text(status.count);
						}
					});				
					
				}
			});
			
			
			
		});
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		$('#sample_2').on('click', '.save-row', function(e) {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			e.preventDefault();
			
			
			
			var nRow = $(this).parents('tr')[0];
			var idRow = $(this).parents('tr').attr('data-id');
			
			var formData = $('.form-submit-ajax').serialize();
			
			
			var url = $('#sample_2').attr('data-object');
			var mode = 'POST';
			
			//// pour update
			
			if (idRow) {				
				var url = $('#sample_2').attr('data-object') + '/' + idRow;
				var mode = 'PUT';
			}
			
			
			
			
			
			$.blockUI({
				message : '<i class="fa fa-spinner fa-spin"></i> En cours...'
			});
			$.mockjax({
				url : '/tabledata/add/webservice',
				dataType : 'json',
				responseTime : 1000,
				responseText : {
					say : 'ok'
				}
			});
			
			
			var type = mode;
			var ajaxurl = url;
			
			
			
			$.ajax({
				type: type,
				url: ajaxurl,
				data: formData,
				dataType: 'json',
				success : function(status) {
					
					if($('#sample_2').attr('data-with-refresh') == 1)
					window.location.reload();
					
					if (status.type == "add") {
						$('.' + $('#sample_2').attr('data-object') +'-counter').text(status.count);
						$('#sample_2 tbody tr:not([data-id]').attr('data-id',status.data['id']);
						$('#sample_2 tbody tr:not([data-id-' + $('#sample_2').attr('data-foreign') + ']').attr('data-id-' + $('#sample_2').attr('data-foreign'),status.data[$('#sample_2').attr('data-foreign') + '_id']);
						$('#sample_2 tbody tr:not([data-id-' + $('#sample_2').attr('data-foreign2') + ']').attr('data-id-' + $('#sample_2').attr('data-foreign2'),status.data[$('#sample_2').attr('data-foreign2') + '_id']);
							}
					else{
						$('#sample_2 tbody tr[data-id=' + status.data['id'] + ']').attr('data-id-' + $('#sample_2').attr('data-foreign'),status.data[$('#sample_2').attr('data-foreign') + '_id']);
						$('#sample_2 tbody tr[data-id=' + status.data['id'] + ']').attr('data-id-' + $('#sample_2').attr('data-foreign2'),status.data[$('#sample_2').attr('data-foreign2') + '_id']);
						}
					
					
					$.unblockUI();
					saveRow(oTable, nRow);	



				},
				error : function (data) {
					$.unblockUI();
					
					
					// libelle
					$('#libelle-new').addClass('has-error');
					$('.libelle-error').text(data.responseJSON.errors.libelle);
					//else if(data.require) {if(data.require.password)
				}
			});	
		});
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		$('#sample_2').on('click', '.edit-row', function(e) {
			e.preventDefault();
			if (actualEditingRow) {
				if (newRow) {
					oTable.fnDeleteRow(actualEditingRow);
					newRow = false;
				} else {
					restoreRow(oTable, actualEditingRow);
					
				}
			}
			var nRow = $(this).parents('tr')[0];
			editRow(oTable, nRow);
			actualEditingRow = nRow;
			
		});
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		var oTable = $('#sample_2').dataTable({
			"aoColumnDefs" : [{
				"aTargets" : [0]
			}],
			"oLanguage" : {
				"sLengthMenu" : "Show _MENU_ Rows",
				"sSearch" : "",
				"oPaginate" : {
					"sPrevious" : "",
					"sNext" : ""
				}
			},
			"aaSorting" : [[0, 'asc']],
			"aLengthMenu" : [[5, 10, 15, 20, -1], [5, 10, 15, 20, "All"] // change per page values here
		],
		// set the initial value
		"iDisplayLength" : 10,
	});
	$('#sample_2_wrapper .dataTables_filter input').addClass("form-control input-sm").attr("placeholder", "Search");
	// modify table search input
	$('#sample_2_wrapper .dataTables_length select').addClass("m-wrap small");
	// modify table per page dropdown
	$('#sample_2_wrapper .dataTables_length select').select2();
	// initialzie select2 dropdown
	$('#sample_2_column_toggler input[type="checkbox"]').change(function() {
		/* Get the DataTables object again - this is not a recreation, just a get of the object */
		var iCol = parseInt($(this).attr("data-column"));
		var bVis = oTable.fnSettings().aoColumns[iCol].bVisible;
		oTable.fnSetColumnVis(iCol, ( bVis ? false : true));
	});
	
	
	
	
	
	
};



return {
	//main function to initiate template pages
	init: function () {
		runEditableTable();
	}
};
}();