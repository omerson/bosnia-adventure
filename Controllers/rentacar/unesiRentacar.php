<?php

	require_once(MODEL_PATH.'rentacar.php');
	
	$rentacar = new Rentacar(); 
	
	$naslov = $_POST['naslov'];
	$sadrzaj = $_POST['sadrzaj'];	
	$polazak = $_POST['polazak'];
	$povratak = $_POST['povratak'];			
	
	require_once(CONTROLLER_PATH.'upload3Image.php');	
	$rentacar->UnesiRentacar($naslov, $sadrzaj, $newname1, $newname2, $newname3);   
	require_once(CONTROLLER_PATH.'rentacar/redirectRentacar.php');	
?>
	
	
