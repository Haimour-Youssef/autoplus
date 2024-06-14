  jQuery(document).ready(function() {         




    $('.date-range').daterangepicker({
        opens: 'right',
    }, function(start, end, label) {
        $(".form-search").submit();});

    $('.date-time-range').daterangepicker({
        timePicker: true,
        timePickerIncrement: 15,
        format: 'MM/DD/YYYY h:mm A'
    });


    //alert('kk');


});