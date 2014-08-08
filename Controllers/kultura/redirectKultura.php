<?php
    $id = 1;
	$perPage = 20;	
	$numberOfKultura = $kultura->GetKulturaNumber();		
	$foundKultura = $kultura->GetAllKultura($id, $perPage);		
	require_once(VIEW_PATH.'admin/kultura/kulturaAdmin.php');
	return;		
?>