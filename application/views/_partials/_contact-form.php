<div lang="es" class="contact-form-container fl rounded">
	<form id="contactForm" class="contact-form" method="POST" action="javascript:void(0);">
		<p class="contact-label">CONTACTO</p>
	    <div>
	        <input 

	        	class="contact-input" 
	        	required lplaceholder="NOMBRE Y APELLIDO" 
	        	placeholder="NOMBRE Y APELLIDO" 
	        	type="text" 
	        	name="name" 
	        	id="name" />
	    </div>
	    <div>
	        <input class="contact-input" required lplaceholder="E-MAIL" placeholder="E-MAIL" type="email" name="email" id="email" />
	    </div>
	    <div>
	        <input class="contact-input" required lplaceholder="TELEFONO" placeholder="TELEFONO" type="text" pattern="\d*" name="tel" id="tel" />
	    </div>
	    <div>
	        <input class="contact-input" required lplaceholder="CIUDAD"  placeholder="CIUDAD" type="text" name="ciudad" id="ciudad" />
	    </div>
	    <div>
	        <textarea required class="contact-text-area" name="msg" id="msg" lplaceholder="¿CUAL ES TU CONSULTA?" placeholder="¿CUAL ES TU CONSULTA?"></textarea>
	    </div>

	    <div class="button">
	        <button id="reservationButton" class="btn btn-default btn-lg btn-reservar btn-contact" type="submit">RESERVAR</button>
	    </div>

	    <div id="errorMessage"> </div>
	</form>
</div>