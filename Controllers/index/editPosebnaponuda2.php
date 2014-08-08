<?php 

	require_once(MODEL_PATH.'index.php');
	
	$index = new Index(); 
	$id = $_POST['posebnaPonuda2'];
	
	$index->SetPosebnaponuda(2, $id);
	require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');		
	return;
	
	
?>