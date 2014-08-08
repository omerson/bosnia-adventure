<?php

	require_once(MODEL_PATH.'index.php');	
	$index = new Index(); 

	$ime = $_POST['ime'];
	$prezime = $_POST['prezime'];
	$email = $_POST['email'];
	$tipUsluge = $_POST['tipUsluge'];
	$usluga = $_POST['usluga'];
	
	$periodod = $_POST['periodod'];
	$perioddo = $_POST['perioddo'];
	$brojPrijatelja = $_POST['brojPrijatelja'];
	if( $_POST['nepusaci'] == 'on')
		$nepusaci = 1;	
			
	if( $_POST['ishrana'] == 'on'){
		$ishrana = 1;	
		$opisIshrana = $_POST['opisIshrana'];	
	}
	else{
		$ishrana = 0;	
		$opisIshrana = '';	
	}
	
	if( $_POST['alergicar'] == 'on'){
		$alergicar = 1;
		$opisAlergije = $_POST['opisAlergije'];	
	}
	else{
		$alergicar = 0;
		$opisAlergije = '';	
	}
	
	if( $_POST['zelje'] == 'on'){
		$zelje = 1;	
		$opisZelje = $_POST['opisZelje'];
	}
	else{
		$zelje = 0;	
		$opisZelje ='';
	}
	
	$zeljeneDestinacije = $_POST['zeljeneDestinacije'];	
	
	if($tipUsluge || $tipUsluge != "")
		$uslugaId = $index->GetUslugaId($tipUsluge, $usluga);
	else 
		$tipUsluge = "";			

		//define the receiver of the email
		$to = 'samir@bosnia-adventure.ba';
		//define the subject of the email
		$subject = 'Obavještenje o prijavi'; 
		//define the message to be sent. Each line should be separated with \n		 
		$message = 'Pozdrav Samire,\n\nObavještavam vas da se '.mysql_real_escape_string($ime).' '.mysql_real_escape_string($prezime).' prijavio/la za uslugu na nasoj stranici .'; 
		//define the headers we want passed. Note that they are separated with \r\n
		$headers = "From: info@bosnia-adventure.ba\r\nReply-To: samir@bosnia-adventure.ba";
		//send the email
		$mail_sent = @mail( $to, $subject, $message, $headers );
	
	$index->UnesiPrijavu($ime, $prezime, $email, $tipUsluge, $usluga, $uslugaId, $periodod, $perioddo, $brojPrijatelja, $nepusaci, $ishrana, $opisIshrana, $alergicar, $opisAlergije, $zelje, $opisZelje, $zeljeneDestinacije);
	echo "<div class='porukaKontakt'>Vaša rezervacija je uspiješno poslana.</div>";
	
	
?>
