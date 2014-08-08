<?php

	require_once(MODEL_PATH.'index.php');
	
	$index = new Index(); 
	$id = 1;
	$sadrzaj = $_POST['sadrzaj'];		
	
	
	require_once(CONTROLLER_PATH.'upload3Image.php');
	
	if($newname1 && $newname2 && $newname3){	
		echo $newname1.'</br>';	
		echo $newname2.'</br>';	
		echo $newname3.'</br>';		
		$index->UpdateOnama1($sadrzaj, $newname1, $newname2, $newname3, $id);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');
		return;
	}
	
	if($newname1 && $newname2 && !$newname3){	
		echo $newname1.'</br>';	
		echo $newname2.'</br>';		
		$index->UpdateOnama2($sadrzaj, $newname1, $newname2, $id);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');
		return;
	}
	
	if($newname1 && !$newname2 && $newname3){	
		echo $newname1.'</br>';	
		echo $newname3.'</br>';	  
		$index->UpdateOnama3($sadrzaj, $newname1, $newname3, $id);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	if($newname1 && !$newname2 && !$newname3){
		echo $newname1.'</br>';		
		$index->UpdateOnama4($sadrzaj, $newname1, $id);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	if(!$newname1 && $newname2 && $newname3){	
		echo $newname2.'</br>';	
		echo $newname3.'</br>';		
		$index->UpdateOnama5($sadrzaj, $newname2, $newname3, $id);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');
		return;
	}
	
	if(!$newname1 && $newname2 && !$newname3){
		echo $newname2.'</br>';	
		$index->UpdateOnama6($sadrzaj, $newname2, $id);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');
		return;
	}
	
	if(!$newname1 && !$newname2 && $newname3){	
		echo $newname3.'</br>';	
		$index->UpdateOnama7($sadrzaj, $newname3, $id);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');
		return;
	}
	
	if(!$newname1 && !$newname2 && !$newname3){
		$index->UpdateOnama8($sadrzaj, $id);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');
		return;
	}
	
?>