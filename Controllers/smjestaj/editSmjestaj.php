<?php

	require_once(MODEL_PATH.'smjestaj.php');
	
	$smjestaj = new Smjestaj(); 
	
	$naziv = $_POST['naziv'];
	$kratakopis = $_POST['kratakopis'];	
	$dodatniKomentar = $_POST['komentar'];	
	$id = $_POST['smjestajId'];
	
	if ($_POST['restoran'] == "")
		$restoran = 0;
	else 
		$restoran = 1;
	
	if ($_POST['recepcija24'] == "")
		$recepcija24 = 0;
	else 
		$recepcija24 = 1;
		
	$tipSmjestaja = $_POST['vrstaobjekta'];
		
	if ($_POST['bar'] == "")
		$bar = 0;
	else 
		$bar = 1;
		
	if ($_POST['zvucnaizolacija'] == "")
		$zvucnaIzolacija = 0;
	else 
		$zvucnaIzolacija = 1;	
	
	if ($_POST['tv'] == "")
		$tv = 0;
	else 
		$tv = 1;
	
	if ($_POST['grijanje'] == "")
		$grijanje = 0;
	else 
		$grijanje = 1;
	
	if ($_POST['nepusaci'] == "")
		$sobeNepusaci = 0;
	else 
		$sobeNepusaci = 1;		
	
	if ($_POST['obiteljskesobe'] == "")
		$obiteljskeSobe = 0;
	else 
		$obiteljskeSobe = 1;

	if ($_POST['sef'] == "")
		$sef = 0;
	else 
		$sef = 1;
		
	if ($_POST['skladisteprtljaga'] == "")
		$skladistePrtljaga = 0;
	else 
		$skladistePrtljaga = 1;

	if ($_POST['klimatizacija'] == "")
		$klima = 0;
	else 
		$klima = 1;
		
	if ($_POST['sauna'] == "")
		$sauna = 0;
	else 
		$sauna = 1;	
		
	if ($_POST['fitness'] == "")
		$fitnes = 0;
	else 
		$fitnes = 1;		
	
	if ($_POST['solarij'] == "")
		$solarij = 0;
	else 
		$solarij = 1;	

	if ($_POST['wellness'] == "")
		$wellnes = 0;
	else 
		$wellnes = 1;	

	if ($_POST['jacuzzi'] == "")
		$jacuzzi = 0;
	else 
		$jacuzzi = 1;			
		
	if ($_POST['turskokupatilo'] == "")
		$turskoKupatilo = 0;
	else 
		$turskoKupatilo = 1;	
		
	if ($_POST['hammam'] == "")
		$hammam = 0;
	else 
		$hammam = 1;	
	
	if ($_POST['zatvorenibazen'] == "")
		$zatvoreniBazen = 0;
	else 
		$zatvoreniBazen = 1;

	$brojSoba = $_POST['brojsoba'];	
	
	if ($_POST['jednokrevetne'] == "")
		$jednokrevetne = 0;
	else 
		$jednokrevetne = 1;
	
	$cijenaJednokrevetnih = $_POST['jednokrevetnecijena'];		
	
	if ($_POST['dvokrevetne'] == "")
		$dvokrevetne = 0;
	else 
		$dvokrevetne = 1;
	
	$cijenaDvokrevetnih = $_POST['dvokrevetnecijena'];
	
	if ($_POST['trokrevetne'] == "")
		$trokrevetne = 0;
	else 
		$trokrevetne = 1;
	
	$cijenaTrokrevetnih = $_POST['trokrevetnecijena'];
	
	if ($_POST['cetverokrevetne'] == "")
		$cetverokrevetne = 0;
	else 
		$cetverokrevetne = 1;
	
	$cijenaCetverokrevetnih = $_POST['cetverokrevetnecijena'];
	
	if ($_POST['apartmani'] == "")
		$apartmani = 0;
	else 
		$apartmani = 1;
	
	$cijenaApartmana = $_POST['apartmanicijena'];	
	
	if ($_POST['sobeodvojeno'] == "")
		$dvokrevetneOdvojeno = 0;
	else 
		$dvokrevetneOdvojeno = 1;
		
	if ($_POST['trokrevetne'] == "")
		$trokrevetne = 0;
	else 
		$trokrevetne = 1;
		
	if ($_POST['cetverokrevetne'] == "")
		$cetverokrevetne = 0;
	else 
		$cetverokrevetne = 1;		
		
	if ($_POST['poslugausobu'] == "")
		$poslugaUSobu = 0;
	else 
		$poslugaUSobu = 1;
	
	if ($_POST['veseraj'] == "")
		$veseraj = 0;
	else 
		$veseraj = 1;
		
	if ($_POST['peglanje'] == "")
		$uslugaPeglanja = 0;
	else 
		$uslugaPeglanja = 1;
	
	if ($_POST['rentacar'] == "")
		$rentACar = 0;
	else 
		$rentACar = 1;
		
	if ($_POST['fax'] == "")
		$faxKopiranje = 0;
	else 
		$faxKopiranje = 1;
		
	if ($_POST['konferencija'] == "")
		$konferencijskeSobe = 0;
	else 
		$konferencijskeSobe = 1;	
	
	if ($_POST['prevoz'] == "")
		$prevozOdDoZracneLuke = 0;
	else 
		$prevozOdDoZracneLuke = 1;	
		
	if ($_POST['henijska'] == "")
		$hemijskaCistiona = 0;
	else 
		$hemijskaCistiona = 1;	
		
	if ($_POST['dorucakusobi'] == "")
		$dorucakUSobi = 0;
	else 
		$dorucakUSobi = 1;	
		
	if ($_POST['dorucakusobi'] == "")
		$dorucakUSobi = 0;
	else 
		$dorucakUSobi = 1;	
		
	if ($_POST['mjenjacnica'] == "")
		$mjenjacnica = 0;
	else 
		$mjenjacnica = 1;
		
	if ($_POST['internet'] == "")
		$internet = 0;
	else 
		$internet = 1;
		
	if ($_POST['internetplacanje'] == "")
		$internetPlacanje = 0;
	else 
		$internetPlacanje = 1;	
		
	if ($_POST['parkingobjekat'] == "")
		$parkingUnutar = 0;
	else 
		$parkingUnutar = 1;	
	
	if ($_POST['parkingblizina'] == "")
		$parkingUblizini = 0;
	else 
		$parkingUblizini = 1;	
		
	$checkIn = $_POST['checkin'];		
	$checkOut = $_POST['checkout'];	
		
	if ($_POST['otkazivanje'] == "")
		$otkazivanjeSobe = 0;
	else 
		$otkazivanjeSobe = 1;	
		
	if ($_POST['kravetzadjecu'] == "")
		$krevetZaDjecu = 0;
	else 
		$krevetZaDjecu = 1;	

	if ($_POST['kucniljubimci'] == "")
		$kucniLjubimci = 0;
	else 
		$kucniLjubimci = 1;	
		
	if ($_POST['kreditnekartice'] == "")
		$kreditneKartice = 0;
	else 
		$kreditneKartice = 1;		
		
	if ($_POST['komentar'] == "")
		$komentar = 0;
	else 
		$komentar = 1;	
	
	
	require_once(CONTROLLER_PATH.'upload3Image.php');
	
	//0
	if($newname1 && $newname2 && $newname3 && $newname4){			
		$smjestaj->UpdateSmjestaj1($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,
	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut, $otkazivanjeSobe, $krevetZaDjecu,
$kucniLjubimci,	$kreditneKartice, $newname1, $newname2, $newname3, $newname4, $id);   
   		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');		
		return;
	}
	
	//1
	if($newname1 && $newname2 && $newname3 && !$newname4){		
$smjestaj->UpdateSmjestaj2($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,
$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja, $rentACar, $faxKopiranje, $konferencijskeSobe, $prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica, $internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu, $kucniLjubimci,	$kreditneKartice, $newname1, $newname2, $newname3, $id);   
   		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');	
		return;
	}
	
	//2
	if($newname1 && $newname2 && !$newname3 && $newname4){	  
		$smjestaj->UpdateSmjestaj3($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,
	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname1, $newname2, $newname4, $id);   
   		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');	
		return;
	}
	
	//3
	if($newname1 && $newname2 && !$newname3 && !$newname4){
		$smjestaj->UpdateSmjestaj4($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,
	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname1, $newname2, $id);   
   		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');	
		return;
	}
	
	//4
	if($newname1 && !$newname2 && $newname3 && $newname4){		
		$smjestaj->UpdateSmjestaj5($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,
	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname1, $newname3, $newname4, $id);   
   		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');	
		return;
	}
	
	//5
	if($newname1 && !$newname2 && $newname3 && !$newname4){
		$smjestaj->UpdateSmjestaj6($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,
	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
$kucniLjubimci,	$kreditneKartice, $newname1, $newname3, $id);   
   		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');	
		return;
	}
	
	//6
	if($newname1 && !$newname2 && !$newname3 && $newname4){
		$smjestaj->UpdateSmjestaj7($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,
	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname1, $newname4, $id);   
   		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');	
		return;
	}
	
	//7
	if($newname1 && !$newname2 && !$newname3 && !$newname4){
		$smjestaj->UpdateSmjestaj8($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,
	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname1, $id);   
   		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');	
		return;
	}
	
	//8
	if(!$newname1 && $newname2 && $newname3 && $newname4){		
		$smjestaj->UpdateSmjestaj9($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,
$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
$kucniLjubimci,	$kreditneKartice, $newname2, $newname3, $newname4, $id);   
   		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');		
		return;
	}
	
	//9
	if(!$newname1 && $newname2 && $newname3 && !$newname4){		
		$smjestaj->UpdateSmjestaj10($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,
	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname2, $newname3, $id);   
   		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');	
		return;
	}
	
	//10
	if(!$newname1 && $newname2 && !$newname3 && $newname4){	  
		$smjestaj->UpdateSmjestaj11($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,
	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname2, $newname4, $id);   
   		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');	
		return;
	}
	
	//11
	if(!$newname1 && $newname2 && !$newname3 && !$newname4){
		$smjestaj->UpdateSmjestaj12($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,
	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname2, $id);   
   		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');	
		return;
	}
	
	//12
	if(!$newname1 && !$newname2 && $newname3 && $newname4){		
		$smjestaj->UpdateSmjestaj13($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,
	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname3, $newname4, $id);   
   		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');	
		return;
	}
	
	//13
	if(!$newname1 && !$newname2 && $newname3 && !$newname4){
		$smjestaj->UpdateSmjestaj14($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,
	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname3, $id);   
   		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');	
		return;
	}
	
	//14
	if(!$newname1 && !$newname2 && !$newname3 && $newname4){
		$smjestaj->UpdateSmjestaj15($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,
	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname4, $id);   
   		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');	
		return;
	}
	
	//15
	if(!$newname1 && !$newname2 && !$newname3 && !$newname4){
		$smjestaj->UpdateSmjestaj16($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,
	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $id);   
   		require_once(CONTROLLER_PATH.'smjestaj/redirectSmjestaj.php');	
		return;
	}
	
?>