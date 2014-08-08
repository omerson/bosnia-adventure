<?php 

	require_once(MODEL_PATH.'index.php');
	
	$index = new Index(); 
	$id = $_POST['posebnaPonuda1'];
	
	$index->InsertPosebnaponuda(1, $id);
	require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');		
	return;
	
	
?>