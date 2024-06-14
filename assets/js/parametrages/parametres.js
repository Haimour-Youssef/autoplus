
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
			jqTds[0].innerHTML = '<textarea id="valeur-new" style="width:100%" name="valeur" type="text" class="form-control">' + aData[0] + '</textarea><div class="text-danger valeur-error"></div>';
			
			
			
			
			jqTds[1].innerHTML = '<a class="save-row" href="">Save</a>';
			jqTds[2].innerHTML = '<a class="cancel-row" href="">Cancel</a>';
			
		}
		
		function saveRow(oTable, nRow) {
			var jqInputs = $('textarea', nRow);
			oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
			oTable.fnUpdate('<a class="edit-row" href="">Edit</a>', nRow, 1, false);

			oTable.fnUpdate('<a></a>', nRow, 2, false);
			

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
				var aiNew = oTable.fnAddData(['','', '']);
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
					
					
					if (status.type == "add") {
						$('.' + $('#sample_2').attr('data-object') + '-counter').text(status.count);
						$('#sample_2 tbody tr:not([data-id]').attr('data-id',status.data['id']);
					}
					
					$.unblockUI();
					saveRow(oTable, nRow);	

				},
				error : function (data) {
					$.unblockUI();
					
					// valeur
					$('#valeur-new').addClass('has-error');
					$('.valeur-error').text(data.responseJSON.errors.valeur);
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