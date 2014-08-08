<?php

	require_once(MODEL_PATH.'index.php');
	
	$index = new Index(); 
	$id = 1;
	$sadrzaj = $_POST['brzaPoruka'];	
	$email = $_POST['email'];
	
	
	$index->SendPoruka($sadrzaj, $email);
	echo "<div class='porukaKontakt'>Vaša poruka je uspiješno poslana.</div>";
	
	
?>