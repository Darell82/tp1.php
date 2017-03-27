<?php

	$app = App::getInstance();

	if ($_POST) {
		if (!empty($_POST['id'])) {
			$res = $app->getTable('category')->delete($_POST['id']);
				

			if ($res) {
				
				header('location: admin.php?p=category.edit');
			
			}
		}
	}


?>