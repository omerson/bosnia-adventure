<?php

	require_once(MODEL_PATH.'smjestaj.php');
	
	$smjestaj = new Smjestaj(); 	
	
	switch($route['view']){			
		case 'smjestajall';		
		$id = $params['id'];
		$numberOfSmjestaj = $smjestaj->GetSmjestajNumber();	
		$perPage = 5;		
		$foundSmjestaj = $smjestaj->GetAllSmjestaj($id, $perPage);	
		require_once(VIEW_PATH.'smjestaj/smjestajAll.php');
		break;	
		
		case 'smjestaj';		
		$id = $params['id'];	
		$row = $smjestaj->GetSmjestaj($id);	
		require_once(VIEW_PATH.'smjestaj/smjestaj.php');
		break;	
		
		case 'smjestajalladmin';	
		$id = $params['id'];
		$perPage = 20;	
		$numberOfSmjestaj = $smjestaj->GetSmjestajNumber();		
		$foundSmjestaj = $smjestaj->GetAllSmjestaj($id, $perPage);		
		require_once(VIEW_PATH.'admin/smjestaj/smjestajAdmin.php');
		break;	
		
		case 'smjestajadmin';		
		$id = $params['id'];	
		$row = $smjestaj->GetSmjestaj($id);		
		require_once(VIEW_PATH.'admin/smjestaj/smjestajEdit.php');
		break;	
		
		case 'smjestajinsert';				
		require_once(VIEW_PATH.'admin/smjestaj/smjestajInsert.php');
		break;		
		
		case 'smjestajdel';	
		$id = $params['id'];
		$foundSmjestaj = $smjestaj->DeleteSmjestaj($id);			
		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');
		break;	
		
		case 'smjestajimages';	
		$id = $params['id'];
		$smjestajImages = $smjestaj->GetImages($id);			
		require_once(VIEW_PATH.'smjestaj/imagesSmjestaj.php');
		break;		
		
		case 'smjestajimagesadmin';	
		$id = $params['id'];		
		$smjestajImages = $smjestaj->GetImages($id);			
		require_once(VIEW_PATH.'admin/smjestaj/imagesadminSmjestaj.php');
		break;		
		
		case 'adminImg';
		$id = $params['id'];
		$slika = $smjestaj->getSlika($id);	
		$tip = 'smjestaj';		
		include(VIEW_PATH.'admin/izmjenisliku.php');		
		break;	
		
		case 'deleteImg';
		$id = $params['id'];					
		$smjestaj->deleteSlika($id);				
		$perPage = 20;	
		$numberOfSmjestaj = $smjestaj->GetSmjestajNumber();		
		$foundSmjestaj = $smjestaj->GetAllSmjestaj($re, $perPage);		
		require_once(VIEW_PATH.'admin/smjestaj/smjestajAdmin.php');
		break;	
		
		case 'novaImg';
		$id = $params['id'];	
		$tip = 'smjestaj';
		include(VIEW_PATH.'admin/novaImg.php');	
		break;			
		
		case 'getUslugesmjestaj';		
		$tip = 'smjestaj';
		include(MODEL_PATH.'getUsluge.php');	
		break;	
		
	}
		
?>