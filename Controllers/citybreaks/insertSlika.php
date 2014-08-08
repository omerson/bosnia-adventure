<?php

	require_once(MODEL_PATH.'citybreaks.php');
	
	$citybreaks = new Citybreaks(); 	
	$id = $_POST['id'];		
	
	require_once(CONTROLLER_PATH.'uploadImage.php');
	
	$citybreaks->insertSlika($tip, $newname, $id);
	$perPage = 20;	
	$numberOfCitybreaks = $citybreaks->GetCitybreaksNumber();		
	$foundCitybreaks = $citybreaks->GetAllCitybreaks($re, $perPage);		
	include(VIEW_PATH.'admin/citybreaks/citybreaksAdmin.php');
	
?>