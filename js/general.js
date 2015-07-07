
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
});

$('.contact-input, .contact-text-area').focus(function() {
	$(this).removeAttr('placeholder');
})

$('.contact-input, .contact-text-area').blur(function() {
    $(this).attr('placeholder', $(this).attr('lplaceholder'));
});

$("#reservationButton").click(function() {
	var valid = 0;
	//[0] to use the javascript property
	valid = $("form#contactForm")[0].checkValidity();
	if(valid === true) {
		$.post("contacto/sendMail", function(data) {
			console.log(data);
		});
	}
});

