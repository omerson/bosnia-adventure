<?php

	require_once(MODEL_PATH.'kultura.php');
	
	$kultura = new Kultura(); 
	
	$naslov = $_POST['naslov'];
	$sadrzaj = $_POST['sadrzaj'];	
	$polazak = $_POST['polazak'];
	$povratak = $_POST['povratak'];		
	
	$polazak = date('d-m-y');
	$povratak = date('d-m-y');	
	
	
	require_once(CONTROLLER_PATH.'upload3Image.php');	
	$kultura->UnesiKulturu($naslov, $sadrzaj, $newname1, $newname2, $newname3, $polazak, $povratak);   
	require_once(CONTROLLER_PATH.'kultura/redirectKultura.php');	
?>
	
	
