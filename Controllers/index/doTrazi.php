<?php

	require_once(MODEL_PATH.'index.php');
	
	$index = new Index(); 
	
	$polazak = $_GET['polazak'];
	$povratak = $_GET['povratak'];		
	$tipUsluge = $_GET['tipUsluge'];
	$nepusac = $_GET['nepusac'];		
	$ishrana = $_GET['ishrana'];
	$alergija = $_GET['alergija'];		
	$posebnePotrebe = $_GET['posebnePotrebe'];	
	
	require_once(VIEW_PATH.'index/prijavise.php');						
	return;					
	
			
		
		
?>