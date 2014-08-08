<?php

	require_once(MODEL_PATH.'avantura.php');
	
	$avantura = new Avantura(); 	
	$id = $_POST['id'];		
	
	require_once(CONTROLLER_PATH.'uploadImage.php');
	
	$avantura->updateSlika($id, $newname);
	$perPage = 20;	
	$numberOfAvantura = $avantura->GetAvanturaNumber();		
	$foundAvantura = $avantura->GetAllAvantura($re, $perPage);		
	include(VIEW_PATH.'admin/avantura/avanturaAdmin.php');
	
?>