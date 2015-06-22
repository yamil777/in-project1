
// A $( document ).ready() block.
$( document ).ready(function() {
	//Script to Activate the Carousel -->
	$('.carousel').carousel({
	    interval: 5000, //changes the speed
	});

	$('.datePicker').datepicker({
		dateFormat: 'dd/mm/yy'
	});
});

$('#startDateIcon').click(function() {
	$('#startDate').focus();
});

$('#endDateIcon').click(function() {
	$('#endDate').focus();
})
