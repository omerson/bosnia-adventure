<?php 

	require_once(MODEL_PATH.'index.php');
	
	$index = new Index(); 
	$sadrzaj = $_POST['sadrzaj'];
	
	require_once(CONTROLLER_PATH.'upload3Image.php');
	
	if($newname1 && $newname2 && $newname3){		
		$index->UpdateZahvalnica1($sadrzaj, $newname1, $newname2, $newname3, 1);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	if($newname1 && $newname2 && !$newname3){		
		$index->UpdateZahvalnica2($sadrzaj, $newname1, $newname2, 1);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');		
		return;
	}
	
	if($newname1 && !$newname2 && $newname3){	  
		$index->UpdateZahvalnica3($sadrzaj, $newname1, $newname3, 1);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	if($newname1 && !$newname2 && !$newname3){
		$index->UpdateZahvalnica4($sadrzaj, $newname1, 1);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	if(!$newname1 && $newname2 && $newname3){		
		$index->UpdateZahvalnica5($sadrzaj, $newname2, $newname3, 1);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	if(!$newname1 && $newname2 && !$newname3){
		$index->UpdateZahvalnica6($sadrzaj, $newname2, 1);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	if(!$newname1 && !$newname2 && $newname3){
		$index->UpdateZahvalnica7($sadrzaj, $newname3, 1);   
   		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	if(!$newname1 && !$newname2 && !$newname3){
		$index->UpdateZahvalnica8($sadrzaj, 1);   
		require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');	
		return;
	}
	
	
?>