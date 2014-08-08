<?php

	require_once(MODEL_PATH.'kombinacija.php');
	
	$kombinacija = new Kombinacija(); 	
	$id = $_POST['id'];		
	
	require_once(CONTROLLER_PATH.'uploadImage.php');
	
	$kombinacija->updateSlika($id, $newname);
	$perPage = 20;	
	$numberOfKombinacija = $kombinacija->GetKombinacijaNumber();		
	$foundKombinacija = $kombinacija->GetAllKombinacija($re, $perPage);		
	include(VIEW_PATH.'admin/kombinacija/kombinacijaAdmin.php');
	
?>