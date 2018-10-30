(function ($) {
	'use strict';

jQuery(document).ready(function ($) {
	
	//Initialize DataTable Elements
	$('#example1').DataTable()
	//Initialize Select2 Elements
    $('.select2').select2()
	//Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
	//Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

});

})(jQuery);