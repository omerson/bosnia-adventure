<?php
    $id = 1;
	$perPage = 20;	
	$numberOfAvantura = $avantura->GetAvanturaNumber();		
	$foundAvantura = $avantura->GetAllAvantura($id, $perPage);		
	require_once(VIEW_PATH.'admin/avantura/avanturaAdmin.php');
	return;		
?>