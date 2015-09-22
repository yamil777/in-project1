<?php
echo form_open('tipologias');
?>
	<div class="row reservation-bar-container carousel-indicators col-xs-12">
		<div class="col-xs-3 reservation-tile">
			<?php
				echo form_label('LLEGADA', 'startDate');
				echo form_input(
						array(
							'name' => 'startDate',
							'id' => 'startDate',
							'readonly' => 'readonly',
							'placeholder' => '__/__/__',
							'class' => 'datePicker textbox col-xs-6 cp'
					));
			 ?>
			<span id="startDateIcon" class="col-xs-2 reservation-icon calendar cp"></span>
			<!-- example with font icon -->
			<!-- <span id="startDateIcon" class="col-xs-2 font-icon date-icon">&#xe801;</span> -->
		</div>
		<div class="col-xs-3 reservation-tile">
			<?php
				echo form_label('SALIDA', 'startDate');
				echo form_input(
						array(
							'name' => 'endDate',
							'id' => 'endDate',
							'readonly' => 'readonly',
							'placeholder' => '__/__/__',
							'class' => 'datePicker textbox col-xs-6 cp'
					));
			 ?>
			<span id="endDateIcon" class="col-xs-2 reservation-icon calendar cp"></span>
		</div>
		<div class="col-xs-3 reservation-tile">
			<?php
				echo form_label('PERSONAS', 'startDate');
				echo form_input(
						array(
							'name' => 'persons',
							'id' => 'persons',
							'class' => 'col-xs-2 textbox'
					));
			 ?>
			<span id="personIcon" class="col-xs-2 reservation-icon person cp"></span>
		</div>
		<div class="col-xs-3 reservation-tile">
			<button class="btn btn-default btn-lg btn-reservar btn-home">
				RESERVAR
			</button>
		</div>
	</div>