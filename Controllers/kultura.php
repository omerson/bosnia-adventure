<?php

	require_once(MODEL_PATH.'kultura.php');
	
	$kultura = new Kultura(); 
	
	switch($route['view']){			
		case 'kulturaall';	
		$id = $params['id'];
		$numberOfKultura = $kultura->GetKulturaNumber();	
		$perPage = 5;		
		$foundKultura = $kultura->GetAllKultura($id, $perPage);		
		require_once(VIEW_PATH.'kultura/kulturaAll.php');
		break;	
		
		case 'kultura';		
		$id = $params['id'];	
		$row = $kultura->GetKultura($id);
		require_once(VIEW_PATH.'kultura/kultura.php');
		break;	
		
		case 'kulturaalladmin';	
		$id = $params['id'];
		$perPage = 20;	
		$numberOfKultura = $kultura->GetKulturaNumber();		
		$foundKultura = $kultura->GetAllKultura($id, $perPage);		
		require_once(VIEW_PATH.'admin/kultura/kulturaAdmin.php');
		break;	
		
		case 'kulturaadmin';		
		$id = $params['id'];	
		$row = $kultura->GetKultura($id);	
		require_once(VIEW_PATH.'admin/kultura/kulturaEdit.php');
		break;	
		
		case 'kulturainsert';				
		require_once(VIEW_PATH.'admin/kultura/kulturaInsert.php');
		break;	
		
		case 'kulturadel';	
		$id = $params['id'];
		$foundKultura = $kultura->DeleteKultura($id);			
		require_once(CONTROLLER_PATH.'kultura/redirectKultura.php');
		break;	
		
		case 'kulturaimages';	
		$id = $params['id'];
		$kulturaImages = $kultura->GetImages($id);			
		require_once(VIEW_PATH.'kultura/imagesKultura.php');
		break;	
		
		case 'kulturaimagesadmin';	
		$id = $params['id'];		
		$kulturaImages = $kultura->GetImages($id);			
		require_once(VIEW_PATH.'admin/kultura/imagesadminKultura.php');
		break;		
		
		case 'adminImg';
		$id = $params['id'];
		$slika = $kultura->getSlika($id);	
		$tip = 'kultura';		
		include(VIEW_PATH.'admin/izmjenisliku.php');		
		break;	
		
		case 'deleteImg';
		$id = $params['id'];					
		$kultura->deleteSlika($id);				
		$perPage = 20;	
		$numberOfKultura = $kultura->GetKulturaNumber();		
		$foundKultura = $kultura->GetAllKultura($re, $perPage);		
		require_once(VIEW_PATH.'admin/kultura/kulturaAdmin.php');
		break;	
		
		case 'novaImg';
		$id = $params['id'];	
		$tip = 'kultura';
		include(VIEW_PATH.'admin/novaImg.php');	
		break;			
		
		case 'getUslugekultura';		
		$tip = 'kultura';
		include(MODEL_PATH.'getUsluge.php');	
		break;
		
}
		
?>