<?php

	require_once(MODEL_PATH.'admin.php');	
	
	$admin = new Admin(); 
	
	switch($route['view']){			
		case 'adminarea';
		require_once(VIEW_PATH.'admin/admin.php');
		break;	
	}
	
	
?>