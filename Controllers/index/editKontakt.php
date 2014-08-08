<?php

	require_once(MODEL_PATH.'index.php');
	
	$index = new Index(); 
	$id = 1;	
	$adresa = $_POST['adresa'];	
	$telefon = $_POST['telefon'];	
	$email = $_POST['email'];	
	$facebook = $_POST['facebook'];	
	$twitter = $_POST['twitter'];	
	
	require_once(CONTROLLER_PATH.'upload3Image.php');
	
	if($newname1 && $newname2 && $newname3){		
		$index->UpdateKontakt1($adresa, $telefon, $email, $facebook, $twitter, $newname1, $newname2, $newname3, $id);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');
		return;
	}
	
	if($newname1 && $newname2 && !$newname3){		
		$index->UpdateKontakt2($adresa, $telefon, $email, $facebook, $twitter, $newname1, $newname2, $id);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');
		return;
	}
	
	if($newname1 && !$newname2 && $newname3){	  
		$index->UpdateKontakt3($adresa, $telefon, $email, $facebook, $twitter, $newname1, $newname3, $id);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	if($newname1 && !$newname2 && !$newname3){
		$index->UpdateKontakt4($adresa, $telefon, $email, $facebook, $twitter, $newname1, $id);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	if(!$newname1 && $newname2 && $newname3){		
		$index->UpdateKontakt5($adresa, $telefon, $email, $facebook, $twitter, $newname2, $newname3, $id);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');
		return;
	}
	
	if(!$newname1 && $newname2 && !$newname3){
		$index->UpdateKontakt6($adresa, $telefon, $email, $facebook, $twitter, $newname2, $id);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');
		return;
	}
	
	if(!$newname1 && !$newname2 && $newname3){
		$index->UpdateKontakt7($adresa, $telefon, $email, $facebook, $twitter, $newname3, $id);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');
		return;
	}
	
	if(!$newname1 && !$newname2 && !$newname3){
		$index->UpdateKontakt8($adresa, $telefon, $email, $facebook, $twitter, $id);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');
		return;
	}
	
?>