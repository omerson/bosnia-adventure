<?php 

	require_once(MODEL_PATH.'index.php');
	
	$index = new Index(); 
	$id = $_POST['izdvojenaponuda'];	
	
	$index->SetIzdvojenaponuda($id);
	require_once(CONTROLLER_PATH.'index/redirectPosebnaponuda.php');		
	return;	
	
?>