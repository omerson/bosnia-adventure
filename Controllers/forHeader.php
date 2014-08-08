<?php
	
	require_once(MODEL_PATH.'lokacije.php');	

	$lokacije = new Lokacije();	
	
	$row5 = $lokacije->GetAllLokacije(1, 5);
	echo $row5['Naziv'];
?>