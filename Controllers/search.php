<?php

	require_once(MODEL_PATH.'index.php');
	
	$index = new Index(); 
	
		
		switch($route['view']){			
		case 'searchAvantura';			
		$id = $params['id'];
		$row = $index->GetAvanturaById($id);		  
		if($row){
			include(VIEW_PATH.'avantura/avantura.php');
			return;
		}
		break;		
		
		case 'searchKultura';			
		$id = $params['id'];
		$row = $index->GetKulturaById($id);		  
		if($row){
			include(VIEW_PATH.'kultura/kultura.php');
			return;
		}
		break;	
		
		case 'searchCity';			
		$id = $params['id'];
		$row = $index->GetCitybreaksById($id);		  
		if($row){
			include(VIEW_PATH.'citybreaks/citybreaks.php');
			return;
		}
		break;	
		
		case 'searchSmjestaj';			
		$id = $params['id'];
		$row = $index->GetSmjestajById($id);		  
		if($row){
			include(VIEW_PATH.'smjestaj/smjestaj.php');
			return;
		}
		break;	
		
		case 'searchRentacar';			
		$id = $params['id'];
		$row = $index->GetRentacarById($id);		  
		if($row){
			include(VIEW_PATH.'rentacar/rentacar.php');
			return;
		}
		break;	
		
		case 'searchKombinacija';			
		$id = $params['id'];
		$row = $index->GetKombinacijaById($id);		  
		if($row){
			include(VIEW_PATH.'kombinacija/kombinacija.php');
			return;
		}
		break;	
		
		case 'searchRezervacije';			
		$id = $params['id'];
		$row = $index->GetRezervacijeById($id);		  
		if($row){
			include(VIEW_PATH.'rezervacije/rezervacije.php');
			return;
		}
		break;	
		
		
	}
		
?>