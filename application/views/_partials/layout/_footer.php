	    <!-- jQuery -->
	    <script src="js/jquery.js"></script>
	    <!-- jQuery UI-->
	    <script src="js/jquery-ui.min.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>

		<script src="js/general.js"></script>
		<?php 
		if (strpos($_SERVER["REQUEST_URI"], 'contacto')) {
		?>
			<script src="js/jquery.validate.min.js"></script>
		<?php
		}

		?>

	</body>
</html>