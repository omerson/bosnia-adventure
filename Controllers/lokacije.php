<?php

	require_once(MODEL_PATH.'lokacije.php');
	
	$lokacije = new Lokacije(); 
	
	switch($route['view']){					
		
		case 'lokacijeall';		
		$id = $params['id'];
		$numberOfLokacije = $lokacije->GetLokacijeNumber();	
		$perPage = 5;		
		$foundLokacije = $lokacije->GetAllLokacije($id, $perPage);		
		require_once(VIEW_PATH.'lokacije/lokacijeAll.php');
		break;	
		
		case 'lokacije';		
		$id = $params['id'];	
		$row = $lokacije->GetLokacije($id);
		require_once(VIEW_PATH.'lokacije/lokacije.php');
		break;	
		
		case 'lokacijealladmin';
		$id = $params['id'];
		$perPage = 20;	
		$numberOfLokacije = $lokacije->GetLokacijeNumber();		
		$foundLokacije = $lokacije->GetAllLokacije($id, $perPage);		
		require_once(VIEW_PATH.'admin/lokacije/lokacijeAdmin.php');
		break;	
		
		case 'lokacijeadmin';		
		$id = $params['id'];	
		$row = $lokacije->GetLokacije($id);
		require_once(VIEW_PATH.'admin/lokacije/lokacijeEdit.php');
		break;	
		
		case 'lokacijeinsert';				
		require_once(VIEW_PATH.'admin/lokacije/lokacijeInsert.php');
		break;	
		
		case 'lokacijedel';	
		$id = $params['id'];
		$foundLokacije = $lokacije->DeleteLokacije($id);			
		require_once(CONTROLLER_PATH.'lokacije/redirectLokacije.php');
		break;	
		
		}
		
?>