<?php

	require_once(MODEL_PATH.'avantura.php');
	
	$avantura = new Avantura(); 
	
	switch($route['view']){			
		case 'avanturaall';		
		$id = $params['id'];
		$numberOfAvantura = $avantura->GetAvanturaNumber();	
		$perPage = 5;		
		$foundAvantura = $avantura->GetAllAvantura($id, $perPage);		
		require_once(VIEW_PATH.'avantura/avanturaAll.php');
		break;	
		
		case 'avantura';		
		$id = $params['id'];	
		$row = $avantura->GetAvantura($id);
		require_once(VIEW_PATH.'avantura/avantura.php');
		break;	
		
		case 'avanturaalladmin';
		$id = $params['id'];
		$perPage = 20;	
		$numberOfAvantura = $avantura->GetAvanturaNumber();		
		$foundAvantura = $avantura->GetAllAvantura($id, $perPage);		
		require_once(VIEW_PATH.'admin/avantura/avanturaAdmin.php');
		break;	
		
		case 'avanturaadmin';		
		$id = $params['id'];	
		$row = $avantura->GetAvantura($id);
		require_once(VIEW_PATH.'admin/avantura/avanturaEdit.php');
		break;	
		
		case 'avanturainsert';				
		require_once(VIEW_PATH.'admin/avantura/avanturaInsert.php');
		break;	
		
		case 'avanturadel';	
		$id = $params['id'];
		$foundAvantura = $avantura->DeleteAvantura($id);			
		require_once(CONTROLLER_PATH.'avantura/redirectAvantura.php');
		break;	
		
		case 'avanturaimages';	
		$id = $params['id'];
		$avanturaImages = $avantura->GetImages($id);			
		require_once(VIEW_PATH.'avantura/imagesAvantura.php');
		break;	
		
		case 'avanturaimagesadmin';	
		$id = $params['id'];		
		$avanturaImages = $avantura->GetImages($id);			
		require_once(VIEW_PATH.'admin/avantura/imagesadminAvantura.php');
		break;		
		
		case 'adminImg';
		$id = $params['id'];
		$slika = $avantura->getSlika($id);	
		$tip = 'avantura';		
		include(VIEW_PATH.'admin/izmjenisliku.php');		
		break;	
		
		case 'deleteImg';
		$id = $params['id'];					
		$avantura->deleteSlika($id);				
		$perPage = 20;	
		$numberOfAvantura = $avantura->GetAvanturaNumber();		
		$foundAvantura = $avantura->GetAllAvantura($re, $perPage);		
		require_once(VIEW_PATH.'admin/avantura/avanturaAdmin.php');
		break;	
		
		case 'novaImg';
		$id = $params['id'];	
		$tip = 'avantura';
		include(VIEW_PATH.'admin/novaImg.php');	
		break;					
		
		case 'getUslugeavantura';		
		$tip = 'avantura';
		include(MODEL_PATH.'getUsluge.php');	
		break;
		
		
		
	}
		
?>