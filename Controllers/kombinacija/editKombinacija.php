<?php

	require_once(MODEL_PATH.'kombinacija.php');
	
	$kombinacija = new Kombinacija(); 
	$id = $_POST['kombinacijaId'];
	$naslov = $_POST['naslov'];
	$sadrzaj = $_POST['sadrzaj'];	
	$polazak = $_POST['polazak'];
	$povratak = $_POST['povratak'];	
	
	
	require_once(CONTROLLER_PATH.'upload3Image.php');
	
	if($newname1 && $newname2 && $newname3){		
		$kombinacija->UpdateKombinacija1($naslov, $sadrzaj, $newname1, $newname2, $newname3, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'kombinacija/redirectKombinacija.php');		
		return;
	}
	
	if($newname1 && $newname2 && !$newname3){		
		$kombinacija->UpdateKombinacija2($naslov, $sadrzaj, $newname1, $newname2, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'kombinacija/redirectKombinacija.php');	
		return;
	}
	
	if($newname1 && !$newname2 && $newname3){	  
		$kombinacija->UpdateKombinacija3($naslov, $sadrzaj, $newname1, $newname3, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'kombinacija/redirectKombinacija.php');	
		return;
	}
	
	if($newname1 && !$newname2 && !$newname3){
		$kombinacija->UpdateKombinacija4($naslov, $sadrzaj, $newname1, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'kombinacija/redirectKombinacija.php');	
		return;
	}
	
	if(!$newname1 && $newname2 && $newname3){		
		$kombinacija->UpdateKombinacija5($naslov, $sadrzaj, $newname2, $newname3, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'kombinacija/redirectKombinacija.php');	
		return;
	}
	
	if(!$newname1 && $newname2 && !$newname3){
		$kombinacija->UpdateKombinacija6($naslov, $sadrzaj, $newname2, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'kombinacija/redirectKombinacija.php');	
		return;
	}
	
	if(!$newname1 && !$newname2 && $newname3){
		$kombinacija->UpdateKombinacija7($naslov, $sadrzaj, $newname3, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'kombinacija/redirectKombinacija.php');	
		return;
	}
	
	if(!$newname1 && !$newname2 && !$newname3){
		$kombinacija->UpdateKombinacija8($naslov, $sadrzaj, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'kombinacija/redirectKombinacija.php');	
		return;
	}
	
?>