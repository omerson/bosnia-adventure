<?php

	require_once(MODEL_PATH.'index.php');
	
	$index = new Index(); 
	
		$id = $_GET['page'];
		$perPage = 5;
		
		$searchText = $_GET['search']; 			

		if($searchText == ''){		
			include(VIEW_PATH.'index/unesiteParametre.php');
			return;
		}
		
		$foundSearchResult = $index->Search($id, $perPage, $searchText);	
	  
		if($foundSearchResult){
			include(VIEW_PATH.'index/search.php');
			return;
		}
		else{
			include(VIEW_PATH.'index/nemaRezultata.php');	
			return;	
		}
							
		//require_once(VIEW_PATH.'index/search.php');
		//break;	
		
?>