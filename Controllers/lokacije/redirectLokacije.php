<?php
    $id = 1;
	$perPage = 20;	
	$numberOfLokacije = $lokacije->GetLokacijeNumber();		
	$foundLokacije = $lokacije->GetAllLokacije($id, $perPage);		
	require_once(VIEW_PATH.'admin/lokacije/lokacijeAdmin.php');
	return;		
?>