<?php 

	require_once(MODEL_PATH.'index.php');
	
	$index = new Index(); 
	$sadrzaj = $_POST['sadrzaj'];
	
	require_once(CONTROLLER_PATH.'upload3Image.php');
	
	if($newname1 && $newname2 && $newname3){		
		$index->UpdateSigurnost1($sadrzaj, $newname1, $newname2, $newname3, 1);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	if($newname1 && $newname2 && !$newname3){		
		$index->UpdateSigurnost2($sadrzaj, $newname1, $newname2, 1);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');		
		return;
	}
	
	if($newname1 && !$newname2 && $newname3){	  
		$index->UpdateSigurnost3($sadrzaj, $newname1, $newname3, 1);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	if($newname1 && !$newname2 && !$newname3){
		$index->UpdateSigurnost4($sadrzaj, $newname1, 1);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	if(!$newname1 && $newname2 && $newname3){		
		$index->UpdateSigurnost5($sadrzaj, $newname2, $newname3, 1);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	if(!$newname1 && $newname2 && !$newname3){
		$index->UpdateSigurnost6($sadrzaj, $newname2, 1);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	if(!$newname1 && !$newname2 && $newname3){
		$index->UpdateSigurnost7($sadrzaj, $newname3, 1);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	if(!$newname1 && !$newname2 && !$newname3){
		$index->UpdateSigurnost8($sadrzaj, 1);   
		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	
?>