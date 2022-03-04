$(function () {
    //Datetimepicker plugin
    $('.datetimepicker').bootstrapMaterialDatePicker({
        format: 'dddd DD MMMM YYYY - HH:mm',
        clearButton: true,
        weekStart: 1
    });

    $('.datepicker').bootstrapMaterialDatePicker({
        format: 'dddd DD MMMM YYYY',
        clearButton: true,
        weekStart: 1,
        time: false
    });

    $('.timepicker').bootstrapMaterialDatePicker({
        format: 'HH:mm',
        clearButton: true,
        date: false
    });

    $('.date-end').bootstrapMaterialDatePicker({
        weekStart: 1, 
        time: false,
        clearButton: true
    });
    
    $('.date-start').bootstrapMaterialDatePicker({
        weekStart: 1, 
        time: false,
        clearButton: true
    }).on('change', function(e, date) {
        $('.date-end').bootstrapMaterialDatePicker('setMinDate', date);
    });
});