<?php

	require_once(MODEL_PATH.'citybreaks.php');
	
	$citybreaks = new Citybreaks(); 
	
	$naslov = $_POST['naslov'];
	$sadrzaj = $_POST['sadrzaj'];	
	$polazak = $_POST['polazak'];
	$povratak = $_POST['povratak'];		
	
	$polazak = date('d-m-y');
	$povratak = date('d-m-y');	
	
	
	require_once(CONTROLLER_PATH.'upload3Image.php');	
	$citybreaks->UnesiCitybreaks($naslov, $sadrzaj, $newname1, $newname2, $newname3, $polazak, $povratak);   
	require_once(CONTROLLER_PATH.'citybreaks/redirectCitybreaks.php');	
?>
	
	
