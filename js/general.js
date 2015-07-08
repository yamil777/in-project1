
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

	$("#contactForm").validate({
		rules: {
			name: "required",
			email: {
				required: true,
				email: true
			},
			tel: {
				required: true,
				number: true
			},
			ciudad: "required",
			msg: "required"
		},
		messages: {
			name: "Por favor complete su nombre",
			email: "Por favor ingrese un e-mail valido",
			tel: {
				required: "El telefono es requerido para poder contactar con usted",
				number: "Por favor ingrese un telefono valido"
			},
			ciudad: "Por favor ingrese su ciudad",
			msg: "Por favor realice su consulta"
		}
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
	valid = $("form#contactForm").valid();
	if(valid === true) {
		/*$.post("contacto/sendMail", function(data) {
			console.log(data);
		});*/
		$.ajax({
			url: 'contacto/sendMail',
			type: 'POST',
			data: $("form#contactForm").serialize()
		}).done(function(data) {
			console.log(data);
		});
	}
});

