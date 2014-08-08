<?php

	require_once(MODEL_PATH.'kultura.php');
	
	$kultura = new Kultura(); 
	$id = $_POST['kulturaId'];
	$naslov = $_POST['naslov'];
	$sadrzaj = $_POST['sadrzaj'];	
	$polazak = $_POST['polazak'];
	$povratak = $_POST['povratak'];	
	
	
	require_once(CONTROLLER_PATH.'upload3Image.php');
	
	if($newname1 && $newname2 && $newname3){		
		$kultura->UpdateKultura1($naslov, $sadrzaj, $newname1, $newname2, $newname3, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'kultura/redirectKultura.php');		
		return;
	}
	
	if($newname1 && $newname2 && !$newname3){		
		$kultura->UpdateKultura2($naslov, $sadrzaj, $newname1, $newname2, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'kultura/redirectKultura.php');	
		return;
	}
	
	if($newname1 && !$newname2 && $newname3){	  
		$kultura->UpdateKultura3($naslov, $sadrzaj, $newname1, $newname3, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'kultura/redirectKultura.php');	
		return;
	}
	
	if($newname1 && !$newname2 && !$newname3){
		$kultura->UpdateKultura4($naslov, $sadrzaj, $newname1, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'kultura/redirectKultura.php');	
		return;
	}
	
	if(!$newname1 && $newname2 && $newname3){		
		$kultura->UpdateKultura5($naslov, $sadrzaj, $newname2, $newname3, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'kultura/redirectKultura.php');	
		return;
	}
	
	if(!$newname1 && $newname2 && !$newname3){
		$kultura->UpdateKultura6($naslov, $sadrzaj, $newname2, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'kultura/redirectKultura.php');	
		return;
	}
	
	if(!$newname1 && !$newname2 && $newname3){
		$kultura->UpdateKultura7($naslov, $sadrzaj, $newname3, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'kultura/redirectKultura.php');	
		return;
	}
	
	if(!$newname1 && !$newname2 && !$newname3){
		$kultura->UpdateKultura8($naslov, $sadrzaj, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'kultura/redirectKultura.php');	
		return;
	}
	
?>