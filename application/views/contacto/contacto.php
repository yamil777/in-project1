<?php
	$this->load->view('_partials/layout/_header');
	$this->load->view('_partials/_menu');

	?>

	<div class="container contacto">
		<?php $this->load->view('_partials/_contact-form');?>
		<div class="place-information rounded"></div>
		<iframe
			class="fr googlemap rounded"
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.751326084882!2d-64.1853952!3d-31.4209768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9432a28503231743%3A0x4c098b0b1795076e!2sArturo+Illia+Bv.+50%2C+X5000ASA+C%C3%B3rdoba!5e0!3m2!1sen!2sar!4v1435868888762" 
			width="45%"
			height="275"
			frameborder="0"
			style="-webkit-border-radius: 7px 7px 7px 7px;"
			allowfullscreen>
		</iframe>
	</div>
	<?php
	//$this->load->view('_partials/_promo');
	$this->load->view('_partials/layout/_footer');