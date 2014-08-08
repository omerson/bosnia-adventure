<?php

	require_once(MODEL_PATH.'kombinacija.php');
	
	$kombinacija = new Kombinacija(); 
	
	switch($route['view']){			
		case 'kombinacijaall';		
		$id = $params['id'];
		$numberOfKombinacija = $kombinacija->GetKombinacijaNumber();	
		$perPage = 5;		
		$foundKombinacija = $kombinacija->GetAllKombinacija($id, $perPage);		
		require_once(VIEW_PATH.'kombinacija/kombinacijaAll.php');
		break;	
		
		case 'kombinacija';		
		$id = $params['id'];	
		$row = $kombinacija->GetKombinacija($id);
		require_once(VIEW_PATH.'kombinacija/kombinacija.php');
		break;	
		
		case 'kombinacijaalladmin';
		$id = $params['id'];
		$perPage = 20;	
		$numberOfKombinacija = $kombinacija->GetKombinacijaNumber();		
		$foundKombinacija = $kombinacija->GetAllKombinacija($id, $perPage);		
		require_once(VIEW_PATH.'admin/kombinacija/kombinacijaAdmin.php');
		break;	
		
		case 'kombinacijaadmin';		
		$id = $params['id'];	
		$row = $kombinacija->GetKombinacija($id);
		require_once(VIEW_PATH.'admin/kombinacija/kombinacijaEdit.php');
		break;	
		
		case 'kombinacijainsert';				
		require_once(VIEW_PATH.'admin/kombinacija/kombinacijaInsert.php');
		break;	
		
		case 'kombinacijadel';	
		$id = $params['id'];
		$foundKombinacija = $kombinacija->DeleteKombinacija($id);			
		require_once(CONTROLLER_PATH.'kombinacija/redirectKombinacija.php');
		break;	
		
		case 'kombinacijaimages';	
		$id = $params['id'];
		$kombinacijaImages = $kombinacija->GetImages($id);			
		require_once(VIEW_PATH.'kombinacija/imagesKombinacija.php');
		break;	
		
		case 'kombinacijaimagesadmin';	
		$id = $params['id'];		
		$kombinacijaImages = $kombinacija->GetImages($id);			
		require_once(VIEW_PATH.'admin/kombinacija/imagesadminKombinacija.php');
		break;		
		
		case 'adminImg';
		$id = $params['id'];
		$slika = $kombinacija->getSlika($id);	
		$tip = 'kombinacija';		
		include(VIEW_PATH.'admin/izmjenisliku.php');		
		break;	
		
		case 'deleteImg';
		$id = $params['id'];					
		$kombinacija->deleteSlika($id);				
		$perPage = 20;	
		$numberOfKombinacija = $kombinacija->GetKombinacijaNumber();		
		$foundKombinacija = $kombinacija->GetAllKombinacija($re, $perPage);		
		require_once(VIEW_PATH.'admin/kombinacija/kombinacijaAdmin.php');
		break;	
		
		case 'novaImg';
		$id = $params['id'];	
		$tip = 'kombinacija';
		include(VIEW_PATH.'admin/novaImg.php');	
		break;	
		
		case 'kombinacijaimagesadmin';	
		$id = $params['id'];		
		$kombinacijaImages = $kombinacija->GetImages($id);			
		require_once(VIEW_PATH.'admin/kombinacija/imagesadminKombinacija.php');
		break;		
		
		case 'adminImg';
		$id = $params['id'];
		$slika = $kombinacija->getSlika($id);	
		$tip = 'kombinacija';		
		include(VIEW_PATH.'admin/izmjenisliku.php');		
		break;	
		
		case 'deleteImg';
		$id = $params['id'];					
		$kombinacija->deleteSlika($id);				
		$perPage = 20;	
		$numberOfKombinacija = $kombinacija->GetKombinacijaNumber();		
		$foundKombinacija = $kombinacija->GetAllKombinacija($re, $perPage);		
		require_once(VIEW_PATH.'admin/kombinacija/kombinacijaAdmin.php');
		break;	
		
		case 'novaImg';
		$id = $params['id'];	
		$tip = 'kombinacija';
		include(VIEW_PATH.'admin/novaImg.php');	
		break;					
		
		case 'getUslugekombinacija';		
		$tip = 'kombinacija';
		include(MODEL_PATH.'getUsluge.php');	
		break;
		
	}
		
?>