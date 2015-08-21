<?php
	$this->load->view('_partials/layout/_header');
	$this->load->view('_partials/_menu');
	/*
	echo "<pre>";
	var_dump($availableApartments);
	die;
	*/
	?>
	<div class="container-tipologias">
		<?php 
		foreach($availableApartments as $key=>$val) : ?>
			<div class="tipologia-min <?=$key > 1 ? 'down' : 'top';?>" id="<?=$val->id_tp;?>" position="<?=$key;?>">
			</div>
		<?php
		endforeach;
		?>
		
	</div>
	<?php
	$this->load->view('_partials/layout/_footer');