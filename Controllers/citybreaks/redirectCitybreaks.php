<?php
    $id = 1;
	$perPage = 20;	
	$numberOfCitybreaks = $citybreaks->GetCitybreaksNumber();		
	$foundCitybreaks = $citybreaks->GetAllCitybreaks($id, $perPage);		
	require_once(VIEW_PATH.'admin/citybreaks/citybreaksAdmin.php');
	return;		
?>