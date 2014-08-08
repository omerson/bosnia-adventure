<?php
    $id = 1;
	$perPage = 20;	
	$numberOfRentacar = $rentacar->GetRentacarNumber();		
	$foundRentacar = $rentacar->GetAllRentacar($id, $perPage);		
	require_once(VIEW_PATH.'admin/rentacar/rentacarAdmin.php');
	return;		
?>