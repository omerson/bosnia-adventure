<?php

	require_once(MODEL_PATH.'rentacar.php');
	
	$rentacar = new Rentacar(); 	
	$id = $_POST['id'];		
	
	require_once(CONTROLLER_PATH.'uploadImage.php');
	
	$rentacar->insertSlika($tip, $newname, $id);
	$perPage = 20;	
	$numberOfRentacar = $rentacar->GetRentacarNumber();		
	$foundRentacar = $rentacar->GetAllRentacar($re, $perPage);		
	include(VIEW_PATH.'admin/rentacar/rentacarAdmin.php');
	
?>