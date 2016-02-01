	
	</body>
	<!-- JQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="http://mdbootstrap.com/mdbcdn/mdb.min.js"></script>

	<!-- AngularJS -->
	<script src="<?=base_url();?>assets/js/vendor/angular.min.js" type="text/javascript" charset="utf-8"></script>

	<script src="<?=base_url();?>assets/js/app.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?=base_url();?>assets/js/Utils/HttpUtils.js" type="text/javascript" charset="utf-8"></script>
	<?php
		if (isset($loadJS) && count($loadJS) > 0) {
			foreach ($loadJS as $key => $value) {
				$srcScripts = base_url(). 'assets/js/'.$value;
				echo '<script src="'.$srcScripts.'" type="text/javascript" charset="utf-8"></script>';
			}
		}
	?>

</html>