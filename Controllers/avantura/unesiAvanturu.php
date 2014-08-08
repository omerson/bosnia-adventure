<?php

	require_once(MODEL_PATH.'avantura.php');
	
	$avantura = new Avantura(); 
	
	$naslov = $_POST['naslov'];
	$sadrzaj = $_POST['sadrzaj'];	
	$polazak = $_POST['polazak'];
	$povratak = $_POST['povratak'];		
	
	$polazak = date('d-m-y');
	$povratak = date('d-m-y');	
	
	
	require_once(CONTROLLER_PATH.'upload3Image.php');	
	$avantura->UnesiAvanturu($naslov, $sadrzaj, $newname1, $newname2, $newname3, $polazak, $povratak);   
	require_once(CONTROLLER_PATH.'avantura/redirectAvantura.php');	
?>
	
	
