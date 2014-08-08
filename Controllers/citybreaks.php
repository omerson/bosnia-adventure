<?php

	require_once(MODEL_PATH.'citybreaks.php');
	
	$citybreaks = new Citybreaks(); 
	
	switch($route['view']){			
		case 'citybreaksall';		
		$id = $params['id'];
		$numberOfCitybreaks = $citybreaks->GetCitybreaksNumber();	
		$perPage = 5;		
		$foundCitybreaks = $citybreaks->GetAllCitybreaks($id, $perPage);		
		require_once(VIEW_PATH.'citybreaks/citybreaksAll.php');
		break;	
		
		case 'citybreaks';		
		$id = $params['id'];	
		$row = $citybreaks->GetCitybreaks($id);	
		require_once(VIEW_PATH.'citybreaks/citybreaks.php');
		break;	
		
		case 'citybreaksalladmin';		
		$id = $params['id'];
		$perPage = 20;	
		$numberOfCitybreaks = $citybreaks->GetCitybreaksNumber();		
		$foundCitybreaks = $citybreaks->GetAllCitybreaks($id, $perPage);	
		require_once(VIEW_PATH.'admin/citybreaks/citybreaksAdmin.php');
		break;	
		
		case 'citybreaksadmin';		
		$id = $params['id'];	
		$row = $citybreaks->GetCitybreaks($id);		
		require_once(VIEW_PATH.'admin/citybreaks/citybreaksEdit.php');
		break;	
		
		case 'citybreaksinsert';				
		require_once(VIEW_PATH.'admin/citybreaks/citybreaksInsert.php');
		break;	
		
		case 'citybreaksdel';	
		$id = $params['id'];
		$foundCitybreaks = $citybreaks->DeleteCitybreaks($id);			
		require_once(CONTROLLER_PATH.'citybreaks/redirectCitybreaks.php');
		break;	
		
		case 'citybreaksimages';	
		$id = $params['id'];
		$citybreaksImages = $citybreaks->GetImages($id);			
		require_once(VIEW_PATH.'citybreaks/imagesCitubreaks.php');
		break;
		
		case 'citybreaksimagesadmin';	
		$id = $params['id'];		
		$citybreaksImages = $citybreaks->GetImages($id);			
		require_once(VIEW_PATH.'admin/citybreaks/imagesadminCitybreaks.php');
		break;		
		
		case 'adminImg';
		$id = $params['id'];
		$slika = $citybreaks->getSlika($id);	
		$tip = 'citybreaks';		
		include(VIEW_PATH.'admin/izmjenisliku.php');		
		break;	
		
		case 'deleteImg';
		$id = $params['id'];					
		$citybreaks->deleteSlika($id);				
		$perPage = 20;	
		$numberOfCitybreaks = $citybreaks->GetCitybreaksNumber();		
		$foundCitybreaks = $citybreaks->GetAllCitybreaks($re, $perPage);		
		require_once(VIEW_PATH.'admin/citybreaks/citybreaksAdmin.php');
		break;	
		
		case 'novaImg';
		$id = $params['id'];	
		$tip = 'citybreaks';
		include(VIEW_PATH.'admin/novaImg.php');	
		break;	
		
		case 'citybreaksimagesadmin';	
		$id = $params['id'];		
		$citybreaksImages = $citybreaks->GetImages($id);			
		require_once(VIEW_PATH.'admin/citybreaks/imagesadminCitybreaks.php');
		break;		
		
		case 'adminImg';
		$id = $params['id'];
		$slika = $citybreaks->getSlika($id);	
		$tip = 'citybreaks';		
		include(VIEW_PATH.'admin/izmjenisliku.php');		
		break;	
		
		case 'deleteImg';
		$id = $params['id'];					
		$citybreaks->deleteSlika($id);				
		$perPage = 20;	
		$numberOfCitybreaks = $citybreaks->GetCitybreaksNumber();		
		$foundCitybreaks = $citybreaks->GetAllCitybreaks($re, $perPage);		
		require_once(VIEW_PATH.'admin/citybreaks/citybreaksAdmin.php');
		break;	
		
		case 'novaImg';
		$id = $params['id'];	
		$tip = 'citybreaks';
		include(VIEW_PATH.'admin/novaImg.php');	
		break;					
		
		case 'getUslugecitybreaks';		
		$tip = 'city';
		include(MODEL_PATH.'getUsluge.php');	
		break;
}
		
?>