<?php

	require_once(MODEL_PATH.'smjestaj.php');
	
	$smjestaj = new Smjestaj(); 	
	$id = $_POST['id'];	
	
	require_once(CONTROLLER_PATH.'uploadImage.php');
	
	$smjestaj->updateSlika($id, $newname);
	$perPage = 20;	
	$numberOfSmjestaj = $smjestaj->GetSmjestajNumber();		
	$foundSmjestaj = $smjestaj->GetAllSmjestaj($re, $perPage);		
	include(VIEW_PATH.'admin/smjestaj/smjestajAdmin.php');
	
?>