<?php

	require_once(MODEL_PATH.'citybreaks.php');
	
	$citybreaks = new Citybreaks(); 
	$id = $_POST['citybreaksId'];
	$naslov = $_POST['naslov'];
	$sadrzaj = $_POST['sadrzaj'];	
	$polazak = $_POST['polazak'];
	$povratak = $_POST['povratak'];	
	
	
	require_once(CONTROLLER_PATH.'upload3Image.php');
	
	if($newname1 && $newname2 && $newname3){		
		$citybreaks->UpdateCitybreaks1($naslov, $sadrzaj, $newname1, $newname2, $newname3, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'citybreaks/redirectCitybreaks.php');		
		return;
	}
	
	if($newname1 && $newname2 && !$newname3){		
		$citybreaks->UpdateCitybreaks2($naslov, $sadrzaj, $newname1, $newname2, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'citybreaks/redirectCitybreaks.php');	
		return;
	}
	
	if($newname1 && !$newname2 && $newname3){	  
		$citybreaks->UpdateCitybreaks3($naslov, $sadrzaj, $newname1, $newname3, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'citybreaks/redirectCitybreaks.php');	
		return;
	}
	
	if($newname1 && !$newname2 && !$newname3){
		$citybreaks->UpdateCitybreaks4($naslov, $sadrzaj, $newname1, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'citybreaks/redirectCitybreaks.php');	
		return;
	}
	
	if(!$newname1 && $newname2 && $newname3){		
		$citybreaks->UpdateCitybreaks5($naslov, $sadrzaj, $newname2, $newname3, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'citybreaks/redirectCitybreaks.php');	
		return;
	}
	
	if(!$newname1 && $newname2 && !$newname3){
		$citybreaks->UpdateCitybreaks6($naslov, $sadrzaj, $newname2, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'citybreaks/redirectCitybreaks.php');	
		return;
	}
	
	if(!$newname1 && !$newname2 && $newname3){
		$citybreaks->UpdateCitybreaks7($naslov, $sadrzaj, $newname3, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'citybreaks/redirectCitybreaks.php');	
		return;
	}
	
	if(!$newname1 && !$newname2 && !$newname3){
		$citybreaks->UpdateCitybreaks8($naslov, $sadrzaj, $polazak, $povratak, $id);   
   		require_once(CONTROLLER_PATH.'citybreaks/redirectCitybreaks.php');	
		return;
	}
	
?>