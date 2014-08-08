<?php

	require_once(MODEL_PATH.'citybreaks.php');
	
	$citybreaks = new Citybreaks(); 	
	$id = $_POST['id'];		
	
	require_once(CONTROLLER_PATH.'uploadImage.php');
	
	$citybreaks->updateSlika($id, $newname);
	$perPage = 20;	
	$numberOfCitybreaks = $citybreaks->GetCitybreaksNumber();		
	$foundCitybreaks = $citybreaks->GetAllCitybreaks($re, $perPage);		
	include(VIEW_PATH.'admin/citybreaks/citybreaksAdmin.php');
	
?>