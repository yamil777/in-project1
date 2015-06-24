	<div class="row reservation-bar-container carousel-indicators col-xs-12">
		<div class="col-xs-3 reservation-tile">
			<p>LLEGADA</p>
			<input id="startDate" name="startDate" readonly type="text" placeholder="__/__/__" class="datePicker textbox col-xs-6 cp"/>
			<span id="startDateIcon" class="col-xs-2 reservation-icon calendar cp"></span>
			<!-- example with font icon -->
			<!-- <span id="startDateIcon" class="col-xs-2 font-icon date-icon">&#xe801;</span> -->
		</div>
		<div class="col-xs-3 reservation-tile">
			<p>SALIDA</p>
			<input id="endDate" name="endDate" readonly type="text" placeholder="__/__/__" class="datePicker textbox col-xs-6 cp"/>
			<span id="endDateIcon" class="col-xs-2 reservation-icon calendar cp"></span>
		</div>
		<div class="col-xs-3 reservation-tile">
			<p>PERSONAS</p>
			<input type="text" id="persons" name="persons" class="col-xs-2 textbox"/>
			<span id="personIcon" class="col-xs-2 reservation-icon person cp"></span>
		</div>
		<div class="col-xs-3 reservation-tile">
			<button class="btn btn-default btn-lg btn-reservar">
				RESERVAR
			</button>
		</div>
	</div>