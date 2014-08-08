<?php

	require_once(MODEL_PATH.'avantura.php');
	
	$avantura = new Avantura(); 
	$id = $_POST['avanturaId'];
	$naslov = $_POST['naslov'];
	$sadrzaj = $_POST['sadrzaj'];	
	$polazak = $_POST['polazak'];
	$povratak = $_POST['povratak'];	
	
	
	require_once(CONTROLLER_PATH.'upload3Image.php');
	
	if($newname1 && $newname2 && $newname3){		
		$avantura->UpdateAvantura1($naslov, $sadrzaj, $newname1, $newname2, $newname3, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'avantura/redirectAvantura.php');		
		return;
	}
	
	if($newname1 && $newname2 && !$newname3){		
		$avantura->UpdateAvantura2($naslov, $sadrzaj, $newname1, $newname2, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'avantura/redirectAvantura.php');	
		return;
	}
	
	if($newname1 && !$newname2 && $newname3){	  
		$avantura->UpdateAvantura3($naslov, $sadrzaj, $newname1, $newname3, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'avantura/redirectAvantura.php');	
		return;
	}
	
	if($newname1 && !$newname2 && !$newname3){
		$avantura->UpdateAvantura4($naslov, $sadrzaj, $newname1, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'avantura/redirectAvantura.php');	
		return;
	}
	
	if(!$newname1 && $newname2 && $newname3){		
		$avantura->UpdateAvantura5($naslov, $sadrzaj, $newname2, $newname3, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'avantura/redirectAvantura.php');	
		return;
	}
	
	if(!$newname1 && $newname2 && !$newname3){
		$avantura->UpdateAvantura6($naslov, $sadrzaj, $newname2, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'avantura/redirectAvantura.php');	
		return;
	}
	
	if(!$newname1 && !$newname2 && $newname3){
		$avantura->UpdateAvantura7($naslov, $sadrzaj, $newname3, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'avantura/redirectAvantura.php');	
		return;
	}
	
	if(!$newname1 && !$newname2 && !$newname3){
		$avantura->UpdateAvantura8($naslov, $sadrzaj, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'avantura/redirectAvantura.php');	
		return;
	}
	
?>