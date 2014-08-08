<?php

	require_once(MODEL_PATH.'kultura.php');
	
	$kultura = new Kultura(); 	
	$id = $_POST['id'];		
	
	require_once(CONTROLLER_PATH.'uploadImage.php');
	
	$kultura->insertSlika($tip, $newname, $id);
	$perPage = 20;	
	$numberOfKultura = $kultura->GetKulturaNumber();		
	$foundKultura = $kultura->GetAllKultura($re, $perPage);		
	include(VIEW_PATH.'admin/kultura/kulturaAdmin.php');
	
?>