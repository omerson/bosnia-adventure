<?php
    $id = 1;
	$perPage = 20;	
	$numberOfSmjestaj = $smjestaj->GetSmjestajNumber();		
	$foundSmjestaj = $smjestaj->GetAllSmjestaj($id, $perPage);		
	require_once(VIEW_PATH.'admin/smjestaj/smjestajAdmin.php');
	return;		
?>