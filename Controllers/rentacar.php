<?php

	require_once(MODEL_PATH.'rentacar.php');
	
	$rentacar = new Rentacar(); 
	
	switch($route['view']){			
		case 'rentacarall';		
		$id = $params['id'];
		$numberOfRentacar = $rentacar->GetRentacarNumber();	
		$perPage = 5;		
		$foundRentacar = $rentacar->GetAllRentacar($id, $perPage);	
		require_once(VIEW_PATH.'rentacar/rentacarAll.php');
		break;	
		
		case 'rentacar';		
		$id = $params['id'];	
		$row = $rentacar->GetRentacar($id);	
		require_once(VIEW_PATH.'rentacar/rentacar.php');
		break;	
		
		case 'rentacaralladmin';	
		$id = $params['id'];
		$perPage = 20;	
		$numberOfRentacar = $rentacar->GetRentacarNumber();		
		$foundRentacar = $rentacar->GetAllRentacar($id, $perPage);		
		require_once(VIEW_PATH.'admin/rentacar/rentacarAdmin.php');
		break;	
		
		case 'rentacaradmin';		
		$id = $params['id'];	
		$row = $rentacar->GetRentacar($id);		
		require_once(VIEW_PATH.'admin/rentacar/rentacarEdit.php');
		break;	
		
		case 'rentacarinsert';				
		require_once(VIEW_PATH.'admin/rentacar/rentacarInsert.php');
		break;		
		
		case 'rentacardel';	
		$id = $params['id'];
		$foundRentacar = $rentacar->DeleteRentacar($id);			
		require_once(CONTROLLER_PATH.'rentacar/redirectRentacar.php');
		break;	
		
		case 'rentacarimages';	
		$id = $params['id'];
		$rentacarImages = $rentacar->GetImages($id);			
		require_once(VIEW_PATH.'rentacar/imagesRentacar.php');
		break;	
		
		case 'rentacarimagesadmin';	
		$id = $params['id'];		
		$rentacarImages = $rentacar->GetImages($id);			
		require_once(VIEW_PATH.'admin/rentacar/imagesadminRentacar.php');
		break;		
		
		case 'adminImg';
		$id = $params['id'];
		$slika = $rentacar->getSlika($id);	
		$tip = 'rentacar';		
		include(VIEW_PATH.'admin/izmjenisliku.php');		
		break;	
		
		case 'deleteImg';
		$id = $params['id'];					
		$rentacar->deleteSlika($id);				
		$perPage = 20;	
		$numberOfRentacar = $rentacar->GetRentacarNumber();		
		$foundRentacar = $rentacar->GetAllRentacar($re, $perPage);		
		require_once(VIEW_PATH.'admin/rentacar/rentacarAdmin.php');
		break;	
		
		case 'novaImg';
		$id = $params['id'];	
		$tip = 'rentacar';
		include(VIEW_PATH.'admin/novaImg.php');	
		break;			
		
		case 'getUslugerentacar';		
		$tip = 'rentacar';
		include(MODEL_PATH.'getUsluge.php');	
		break;
		
	}
		
?>