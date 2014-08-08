<?php

	require_once(MODEL_PATH.'rentacar.php');
	
	$rentacar = new Rentacar(); 
	$id = $_POST['rentacarId'];
	$naslov = $_POST['naslov'];
	$sadrzaj = $_POST['sadrzaj'];		
	
	
	require_once(CONTROLLER_PATH.'upload3Image.php');
	
	if($newname1 && $newname2 && $newname3){		
		$rentacar->UpdateRentacar1($naslov, $sadrzaj, $newname1, $newname2, $newname3, $id);   
   		require_once(CONTROLLER_PATH.'rentacar/redirectRentacar.php');		
		return;
	}
	
	if($newname1 && $newname2 && !$newname3){		
		$rentacar->UpdateRentacar2($naslov, $sadrzaj, $newname1, $newname2, $id);   
   		require_once(CONTROLLER_PATH.'rentacar/redirectRentacar.php');	
		return;
	}
	
	if($newname1 && !$newname2 && $newname3){	  
		$rentacar->UpdateRentacar3($naslov, $sadrzaj, $newname1, $newname3, $id);   
   		require_once(CONTROLLER_PATH.'rentacar/redirectRentacar.php');	
		return;
	}
	
	if($newname1 && !$newname2 && !$newname3){
		$rentacar->UpdateRentacar4($naslov, $sadrzaj, $newname1, $id);   
   		require_once(CONTROLLER_PATH.'rentacar/redirectRentacar.php');	
		return;
	}
	
	if(!$newname1 && $newname2 && $newname3){		
		$rentacar->UpdateRentacar5($naslov, $sadrzaj, $newname2, $newname3, $id);   
   		require_once(CONTROLLER_PATH.'rentacar/redirectRentacar.php');	
		return;
	}
	
	if(!$newname1 && $newname2 && !$newname3){
		$rentacar->UpdateRentacar6($naslov, $sadrzaj, $newname2, $id);   
   		require_once(CONTROLLER_PATH.'rentacar/redirectRentacar.php');	
		return;
	}
	
	if(!$newname1 && !$newname2 && $newname3){
		$rentacar->UpdateRentacar7($naslov, $sadrzaj, $newname3, $id);   
   		require_once(CONTROLLER_PATH.'rentacar/redirectRentacar.php');	
		return;
	}
	
	if(!$newname1 && !$newname2 && !$newname3){
		$rentacar->UpdateRentacar8($naslov, $sadrzaj, $id);   
   		require_once(CONTROLLER_PATH.'rentacar/redirectRentacar.php');	
		return;
	}
	
?>