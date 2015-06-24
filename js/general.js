
// A $( document ).ready() block.
$( document ).ready(function() {
	//Script to Activate the Carousel -->
	$('.carousel').carousel({
	    interval: 5000, //changes the speed
	});

	$('.datePicker').datepicker({
		dateFormat: 'dd/mm/yy',
		minDate: 0
	});
});

$('#startDateIcon').click(function() {
	if($('#ui-datepicker-div').is(':hidden')) {
		$('#startDate').focus();
	}
});

$('#endDateIcon').click(function() {
	if($('#ui-datepicker-div').is(':hidden')) {
		$('#endDate').focus();
	}
})
