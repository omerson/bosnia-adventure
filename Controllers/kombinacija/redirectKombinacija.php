<?php
    $id = 1;
	$perPage = 20;	
	$numberOfKombinacija = $kombinacija->GetKombinacijaNumber();		
	$foundKombinacija = $kombinacija->GetAllKombinacija($id, $perPage);		
	require_once(VIEW_PATH.'admin/kombinacija/kombinacijaAdmin.php');
	return;		
?>