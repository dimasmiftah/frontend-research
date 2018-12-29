<?php 
	$existNames = array ('Dimas','Dian','Dinda','Danial');
	if (isset($_POST['suggestion'])) {
		$name = $_POST['suggestion'];

		if (!empty($name)) {
			foreach ($existNames as $existName) {
				if (strpos($existName, $name) !== false) {
					echo $existName;
					echo '<br>';
				}
			}
		}
	}
 ?>