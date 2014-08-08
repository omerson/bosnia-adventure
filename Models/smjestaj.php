<?php

require_once(SHARED_PATH.'database.php');

class Smjestaj
{
	public function UnesiSmjestaj($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24,$tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe, $krevetZaDjecu,
$kucniLjubimci,	$kreditneKartice, $newname1, $newname2, $newname3, $newname4){
		
		$connection = db_connect();			
		$query = 'INSERT INTO smjestaj (Restoran, Recepcija24, Naslov, Vrijeme, KratakOpis, DodatniKomentar, TipSmjestaja, ImgPath1, ImgPath2, ImgPath3, ImgPath4, Bar, ZvucnaIzolacija, Tv, Grijanje, SobeNepusaci, ObiteljskeSobe, Sef, SkladistePrtljaga, Klima, Sauna, Fitnes, Solarij, Wellnes, Jacuzzi, TurskoKupatilo, Hammam, ZatvoreniBazen, BrojSoba, Jednokrevetne, CijenaJednokrevetnih, Dvokrevetne, CijenaDvokrevetnih,  DvokrevetneOdvojeno, Trokrevetne, 	CijenaTrokrevetnih, Cetverokrevetne, CijenaCetverokrevetnih, Apartmani, CijenaApartmana, PoslugaUSobu, Veseraj, UslugaPeglanja, RentACar, FaxKopiranje, KonferencijskeSobe, PrevozOdDoZracneLuke, HemijskaCistiona, DorucakUSobi, Mjenjacnica, Internet, InternetPlacanje, ParkingUnutar, ParkingUblizini, CheckIn, CheckOut, OtkazivanjeSobe, KrevetZaDjecu, KucniLjubimci, KreditneKartice )
				  VALUES (
							'.mysql_real_escape_string($restoran).', 
							'.mysql_real_escape_string($recepcija24).', 
							"'.mysql_real_escape_string($naziv).'", 
							NOW(), 
							"'.mysql_real_escape_string($kratakopis).'", 
							"'.mysql_real_escape_string($dodatniKomentar).'", 
							"'.mysql_real_escape_string($tipSmjestaja).'", 	
							"'.mysql_real_escape_string($newname1).'",  						
							"'.mysql_real_escape_string($newname2).'",  
							"'.mysql_real_escape_string($newname3).'",
							"'.mysql_real_escape_string($newname4).'",							
							'.mysql_real_escape_string($bar).',  
							'.mysql_real_escape_string($zvucnaIzolacija).',  
							'.mysql_real_escape_string($tv).',  
							'.mysql_real_escape_string($grijanje).',  
							'.mysql_real_escape_string($sobeNepusaci).',  
							'.mysql_real_escape_string($obiteljskeSobe).',  
							'.mysql_real_escape_string($sef).',   
							'.mysql_real_escape_string($skladistePrtljaga).',   
							'.mysql_real_escape_string($klima).',  
							'.mysql_real_escape_string($sauna).',  
							'.mysql_real_escape_string($fitnes).',  
							'.mysql_real_escape_string($solarij).',  
							'.mysql_real_escape_string($wellnes).',  
							'.mysql_real_escape_string($jacuzzi).',  
							'.mysql_real_escape_string($turskoKupatilo).',  
							'.mysql_real_escape_string($hammam).',  
							'.mysql_real_escape_string($zatvoreniBazen).',  
							"'.mysql_real_escape_string($brojSoba).'", 
							'.mysql_real_escape_string($jednokrevetne).',  
							"'.mysql_real_escape_string($cijenaJednokrevetnih).'",  
							'.mysql_real_escape_string($dvokrevetne).',  
							"'.mysql_real_escape_string($cijenaDvokrevetnih).'",  
							'.mysql_real_escape_string($dvokrevetneOdvojeno).',  
							'.mysql_real_escape_string($trokrevetne).', 
							"'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
							'.mysql_real_escape_string($cetverokrevetne).',  
							"'.mysql_real_escape_string($cijenaCetverokrevetnih).'",
							'.mysql_real_escape_string($apartmani).',  
							"'.mysql_real_escape_string($cijenaApartmana).'",
							'.mysql_real_escape_string($poslugaUSobu).',  
							'.mysql_real_escape_string($veseraj).',  
							'.mysql_real_escape_string($uslugaPeglanja).',  
							'.mysql_real_escape_string($rentACar).',  
							'.mysql_real_escape_string($faxKopiranje).',  
							'.mysql_real_escape_string($konferencijskeSobe).',   
							'.mysql_real_escape_string($prevozOdDoZracneLuke).',   
							'.mysql_real_escape_string($hemijskaCistiona).',  
							'.mysql_real_escape_string($dorucakUSobi).',  
							'.mysql_real_escape_string($mjenjacnica).',  
							'.mysql_real_escape_string($internet).',  
							'.mysql_real_escape_string($internetPlacanje).',  
							'.mysql_real_escape_string($parkingUnutar).',  
							'.mysql_real_escape_string($parkingUblizini).',  
							"'.mysql_real_escape_string($checkIn).'",  
							"'.mysql_real_escape_string($checkOut).'",  
							'.mysql_real_escape_string($otkazivanjeSobe).',  
							'.mysql_real_escape_string($krevetZaDjecu).',  
							'.mysql_real_escape_string($kucniLjubimci).',  
							'.mysql_real_escape_string($kreditneKartice).')';	
		executeQuery('SET NAMES UTF8');		
		executeQuery($query);			
	}
	
	public function GetAllSmjestaj($page = 1, $perPage){
	
		$connection = db_connect();	
		if($page != 0)
			$page--;
		
		$skip = (int)($page * $perPage);		
		
		$query = 'SELECT * FROM smjestaj Order by Id DESC LIMIT '.mysql_real_escape_string($skip).', '.mysql_real_escape_string($perPage).'';							 
		executeQuery('SET NAMES UTF8');	
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $result;	
	}
	
	public function GetImages($id){
		
		$connection = db_connect();	
		
		$query = 'SELECT * FROM slike WHERE TipId = '.mysql_real_escape_string($id).' AND Tip = "smjestaj"';							 
		executeQuery('SET NAMES UTF8');	
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $result;	
		
	}
	
	public function GetSmjestajImagesNumber(){
	
		$connection = db_connect();	
		
		$query = 'Select COUNT(Id) from slike where Tip = "smjestaj"';							 
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		$row = mysql_fetch_array($result);		
		if(isEmpty($result))
		{
			return false;
		}		
			
		return $row [0];	
	}
	
	public function getSlika($id){
	
		$connection = db_connect();	
		
		$query = 'SELECT * FROM slike WHERE Id = "'.mysql_real_escape_string($id).'"';	
		executeQuery('SET NAMES UTF8');	   
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;	
	}
	
	public function deleteSlika($id){
	
		$connection = db_connect();			
		
		$query = 'delete FROM slike where slike.Id = "'.mysql_real_escape_string($id).'"';	
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);	
	}
	
	
	public function updateSlika($id, $adresa){
	
		$connection = db_connect();				
		$query = 'UPDATE slike 
				SET ImgPath = "'.mysql_real_escape_string($adresa).'"
				WHERE Id = "'.mysql_real_escape_string($id).'"';
					  
		executeQuery('SET NAMES UTF8');
		executeQuery($query);
	
	}
	
	public function insertSlika($tip, $newname, $id){
	
		$connection = db_connect();	
		
		$query = 'INSERT INTO slike (TipId, Tip, ImgPath)
					VALUES('.mysql_real_escape_string($id).', "'.mysql_real_escape_string($tip).'", "'.mysql_real_escape_string($newname).'")';		
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);
	
	}
	
	public function GetSmjestajNumber(){
	
		$connection = db_connect();			
		
		$query = 'Select COUNT(Id) from smjestaj';							 
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		$row = mysql_fetch_array($result);		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $row [0];	
	}
	
	public function GetSmjestaj($selector)
	{
		$connection = db_connect();			
		
		$query = 'SELECT *FROM smjestaj WHERE smjestaj.Id = "'.mysql_real_escape_string($selector).'"';
		
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
	}
	
	public function DeleteSmjestaj($selector)
	{
		$connection = db_connect();			
		
		$query = 'delete FROM smjestaj where smjestaj.Id = "'.mysql_real_escape_string($selector).'"';	
		executeQuery('SET NAMES UTF8');		
		executeQuery($query);			
	}	
	
	
	public function UpdateSmjestaj1($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi, $mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe, $krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname1, $newname2, $newname3, $newname4, $id)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE smjestaj SET 		
		smjestaj.Restoran ="'.mysql_real_escape_string($restoran).'", 
		smjestaj.Recepcija24 ="'.mysql_real_escape_string($recepcija24).'", 
		smjestaj.Naslov ="'.mysql_real_escape_string($naziv).'", 
		smjestaj.Vrijeme = "NOW()",  
		smjestaj.KratakOpis ="'.mysql_real_escape_string($kratakopis).'", 
		smjestaj.DodatniKomentar ="'.mysql_real_escape_string($dodatniKomentar).'", 
		smjestaj.TipSmjestaja  ="'.mysql_real_escape_string($tipSmjestaja).'", 
		smjestaj.Bar ="'.mysql_real_escape_string($bar).'", 
		smjestaj.ZvucnaIzolacija ="'.mysql_real_escape_string($zvucnaIzolacija).'", 
		smjestaj.Tv ="'.mysql_real_escape_string($tv).'", 
		smjestaj.Grijanje ="'.mysql_real_escape_string($grijanje).'", 
		smjestaj.SobeNepusaci ="'.mysql_real_escape_string($sobeNepusaci).'", 
		smjestaj.ObiteljskeSobe ="'.mysql_real_escape_string($obiteljskeSobe).'", 
		smjestaj.Sef  ="'.mysql_real_escape_string($sef).'", 
		smjestaj.SkladistePrtljaga ="'.mysql_real_escape_string($skladistePrtljaga).'", 
		smjestaj.Klima ="'.mysql_real_escape_string($klima).'", 
		smjestaj.Sauna ="'.mysql_real_escape_string($sauna).'", 
		smjestaj.Fitnes ="'.mysql_real_escape_string($fitnes).'", 
		smjestaj.Solarij ="'.mysql_real_escape_string($solarij).'", 
		smjestaj.Wellnes ="'.mysql_real_escape_string($wellnes).'",
		smjestaj.Jacuzzi ="'.mysql_real_escape_string($jacuzzi).'", 
		smjestaj.TurskoKupatilo ="'.mysql_real_escape_string($turskoKupatilo).'", 
		smjestaj.Hammam ="'.mysql_real_escape_string($hammam).'", 
		smjestaj.ZatvoreniBazen ="'.mysql_real_escape_string($zatvoreniBazen).'", 
		smjestaj.BrojSoba  ="'.mysql_real_escape_string($brojSoba).'", 
		smjestaj.Jednokrevetne  ="'.mysql_real_escape_string($jednokrevetne).'", 
		smjestaj.CijenaJednokrevetnih  ="'.mysql_real_escape_string($cijenaJednokrevetnih).'", 
		smjestaj.Dvokrevetne  ="'.mysql_real_escape_string($dvokrevetne).'", 
		smjestaj.CijenaDvokrevetnih  ="'.mysql_real_escape_string($cijenaDvokrevetnih).'",
		smjestaj.DvokrevetneOdvojeno  ="'.mysql_real_escape_string($dvokrevetneOdvojeno).'", 
		smjestaj.Trokrevetne  ="'.mysql_real_escape_string($trokrevetne).'", 
		smjestaj.CijenaTrokrevetnih  ="'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
		smjestaj.Cetverokrevetne  ="'.mysql_real_escape_string($cetverokrevetne).'", 
		smjestaj.CijenaCetverokrevetnih  ="'.mysql_real_escape_string($cijenaCetverokrevetnih).'", 
		smjestaj.Apartmani  ="'.mysql_real_escape_string($apartmani).'", 
		smjestaj.CijenaApartmana  ="'.mysql_real_escape_string($cijenaApartmana).'", 
		smjestaj.PoslugaUSobu  ="'.mysql_real_escape_string($poslugaUSobu).'", 
		smjestaj.Veseraj  ="'.mysql_real_escape_string($veseraj).'", 
		smjestaj.UslugaPeglanja  ="'.mysql_real_escape_string($uslugaPeglanja).'", 
		smjestaj.RentACar  ="'.mysql_real_escape_string($rentACar).'", 
		smjestaj.FaxKopiranje  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.KonferencijskeSobe  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.PrevozOdDoZracneLuke  ="'.mysql_real_escape_string($prevozOdDoZracneLuke).'", 
		smjestaj.HemijskaCistiona  ="'.mysql_real_escape_string($hemijskaCistiona).'", 
		smjestaj.DorucakUSobi  ="'.mysql_real_escape_string($dorucakUSobi).'", 
		smjestaj.Mjenjacnica  ="'.mysql_real_escape_string($mjenjacnica).'", 
		smjestaj.Internet  ="'.mysql_real_escape_string($internet).'", 
		smjestaj.InternetPlacanje  ="'.mysql_real_escape_string($internetPlacanje).'", 
		smjestaj.ParkingUnutar  ="'.mysql_real_escape_string($parkingUnutar).'", 
		smjestaj.ParkingUblizini  ="'.mysql_real_escape_string($parkingUblizini).'", 
		smjestaj.CheckIn  ="'.mysql_real_escape_string($checkIn).'", 
		smjestaj.CheckOut  ="'.mysql_real_escape_string($checkOut).'", 
		smjestaj.OtkazivanjeSobe  ="'.mysql_real_escape_string($otkazivanjeSobe).'", 
		smjestaj.KrevetZaDjecu  ="'.mysql_real_escape_string($krevetZaDjecu).'", 
		smjestaj.KucniLjubimci  ="'.mysql_real_escape_string($kucniLjubimci).'", 
		smjestaj.KreditneKartice ="'.mysql_real_escape_string($kreditneKartice).'", 
		
		smjestaj.ImgPath1 = "'.mysql_real_escape_string($newname1).'",
		smjestaj.ImgPath2 = "'.mysql_real_escape_string($newname2).'",
		smjestaj.ImgPath3 = "'.mysql_real_escape_string($newname3).'",
		smjestaj.ImgPath4 = "'.mysql_real_escape_string($newname4).'"
		
		where smjestaj.Id = '.mysql_real_escape_string($id);	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	
	public function UpdateSmjestaj2($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24,$tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe, $krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname1, $newname2, $newname3, $id)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE smjestaj SET 
		smjestaj.Restoran ="'.mysql_real_escape_string($restoran).'", 
		smjestaj.Recepcija24 ="'.mysql_real_escape_string($recepcija24).'", 
		smjestaj.Naslov ="'.mysql_real_escape_string($naziv).'", 
		smjestaj.Vrijeme = "NOW()",  
		smjestaj.KratakOpis ="'.mysql_real_escape_string($kratakopis).'", 
		smjestaj.DodatniKomentar ="'.mysql_real_escape_string($dodatniKomentar).'", 
		smjestaj.TipSmjestaja  ="'.mysql_real_escape_string($tipSmjestaja).'", 
		smjestaj.Bar ="'.mysql_real_escape_string($bar).'", 
		smjestaj.ZvucnaIzolacija ="'.mysql_real_escape_string($zvucnaIzolacija).'", 
		smjestaj.Tv ="'.mysql_real_escape_string($tv).'", 
		smjestaj.Grijanje ="'.mysql_real_escape_string($grijanje).'", 
		smjestaj.SobeNepusaci ="'.mysql_real_escape_string($sobeNepusaci).'", 
		smjestaj.ObiteljskeSobe ="'.mysql_real_escape_string($obiteljskeSobe).'", 
		smjestaj.Sef  ="'.mysql_real_escape_string($sef).'", 
		smjestaj.SkladistePrtljaga ="'.mysql_real_escape_string($skladistePrtljaga).'", 
		smjestaj.Klima ="'.mysql_real_escape_string($klima).'", 
		smjestaj.Sauna ="'.mysql_real_escape_string($sauna).'", 
		smjestaj.Fitnes ="'.mysql_real_escape_string($fitnes).'", 
		smjestaj.Solarij ="'.mysql_real_escape_string($solarij).'", 
		smjestaj.Wellnes ="'.mysql_real_escape_string($wellnes).'",
		smjestaj.Jacuzzi ="'.mysql_real_escape_string($jacuzzi).'", 
		smjestaj.TurskoKupatilo ="'.mysql_real_escape_string($turskoKupatilo).'", 
		smjestaj.Hammam ="'.mysql_real_escape_string($hammam).'", 
		smjestaj.ZatvoreniBazen ="'.mysql_real_escape_string($zatvoreniBazen).'", 
		smjestaj.BrojSoba  ="'.mysql_real_escape_string($brojSoba).'", 
		smjestaj.Jednokrevetne  ="'.mysql_real_escape_string($jednokrevetne).'", 
		smjestaj.CijenaJednokrevetnih  ="'.mysql_real_escape_string($cijenaJednokrevetnih).'", 
		smjestaj.Dvokrevetne  ="'.mysql_real_escape_string($dvokrevetne).'", 
		smjestaj.CijenaDvokrevetnih  ="'.mysql_real_escape_string($cijenaDvokrevetnih).'",
		smjestaj.DvokrevetneOdvojeno  ="'.mysql_real_escape_string($dvokrevetneOdvojeno).'", 
		smjestaj.Trokrevetne  ="'.mysql_real_escape_string($trokrevetne).'", 
		smjestaj.CijenaTrokrevetnih  ="'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
		smjestaj.Cetverokrevetne  ="'.mysql_real_escape_string($cetverokrevetne).'", 
		smjestaj.CijenaCetverokrevetnih  ="'.mysql_real_escape_string($cijenaCetverokrevetnih).'", 
		smjestaj.Apartmani  ="'.mysql_real_escape_string($apartmani).'", 
		smjestaj.CijenaApartmana  ="'.mysql_real_escape_string($cijenaApartmana).'",
		smjestaj.PoslugaUSobu  ="'.mysql_real_escape_string($poslugaUSobu).'", 
		smjestaj.Veseraj  ="'.mysql_real_escape_string($veseraj).'", 
		smjestaj.UslugaPeglanja  ="'.mysql_real_escape_string($uslugaPeglanja).'", 
		smjestaj.RentACar  ="'.mysql_real_escape_string($rentACar).'", 
		smjestaj.FaxKopiranje  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.KonferencijskeSobe  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.PrevozOdDoZracneLuke  ="'.mysql_real_escape_string($prevozOdDoZracneLuke).'", 
		smjestaj.HemijskaCistiona  ="'.mysql_real_escape_string($hemijskaCistiona).'", 
		smjestaj.DorucakUSobi  ="'.mysql_real_escape_string($dorucakUSobi).'", 
		smjestaj.Mjenjacnica  ="'.mysql_real_escape_string($mjenjacnica).'", 
		smjestaj.Internet  ="'.mysql_real_escape_string($internet).'", 
		smjestaj.InternetPlacanje  ="'.mysql_real_escape_string($internetPlacanje).'", 
		smjestaj.ParkingUnutar  ="'.mysql_real_escape_string($parkingUnutar).'", 
		smjestaj.ParkingUblizini  ="'.mysql_real_escape_string($parkingUblizini).'", 
		smjestaj.CheckIn  ="'.mysql_real_escape_string($checkIn).'", 
		smjestaj.CheckOut  ="'.mysql_real_escape_string($checkOut).'", 
		smjestaj.OtkazivanjeSobe  ="'.mysql_real_escape_string($otkazivanjeSobe).'", 
		smjestaj.KrevetZaDjecu  ="'.mysql_real_escape_string($krevetZaDjecu).'", 
		smjestaj.KucniLjubimci  ="'.mysql_real_escape_string($kucniLjubimci).'", 
		smjestaj.KreditneKartice ="'.mysql_real_escape_string($kreditneKartice).'", 
		smjestaj.ImgPath1 = "'.mysql_real_escape_string($newname1).'",
		smjestaj.ImgPath2 = "'.mysql_real_escape_string($newname2).'",
		smjestaj.ImgPath3 = "'.mysql_real_escape_string($newname3).'"
		
		where smjestaj.Id = '.mysql_real_escape_string($id);	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateSmjestaj3($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24,$tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname1, $newname2, $newname4, $id)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE smjestaj SET 
		smjestaj.Restoran ="'.mysql_real_escape_string($restoran).'", 
		smjestaj.Recepcija24 ="'.mysql_real_escape_string($recepcija24).'", 
		smjestaj.Naslov ="'.mysql_real_escape_string($naziv).'", 
		smjestaj.Vrijeme = "NOW()",  
		smjestaj.KratakOpis ="'.mysql_real_escape_string($kratakopis).'", 
		smjestaj.DodatniKomentar ="'.mysql_real_escape_string($dodatniKomentar).'", 
		smjestaj.TipSmjestaja  ="'.mysql_real_escape_string($tipSmjestaja).'", 
		smjestaj.Bar ="'.mysql_real_escape_string($bar).'", 
		smjestaj.ZvucnaIzolacija ="'.mysql_real_escape_string($zvucnaIzolacija).'", 
		smjestaj.Tv ="'.mysql_real_escape_string($tv).'", 
		smjestaj.Grijanje ="'.mysql_real_escape_string($grijanje).'", 
		smjestaj.SobeNepusaci ="'.mysql_real_escape_string($sobeNepusaci).'", 
		smjestaj.ObiteljskeSobe ="'.mysql_real_escape_string($obiteljskeSobe).'", 
		smjestaj.Sef  ="'.mysql_real_escape_string($sef).'", 
		smjestaj.SkladistePrtljaga ="'.mysql_real_escape_string($skladistePrtljaga).'", 
		smjestaj.Klima ="'.mysql_real_escape_string($klima).'", 
		smjestaj.Sauna ="'.mysql_real_escape_string($sauna).'", 
		smjestaj.Fitnes ="'.mysql_real_escape_string($fitnes).'", 
		smjestaj.Solarij ="'.mysql_real_escape_string($solarij).'", 
		smjestaj.Wellnes ="'.mysql_real_escape_string($wellnes).'",
		smjestaj.Jacuzzi ="'.mysql_real_escape_string($jacuzzi).'", 
		smjestaj.TurskoKupatilo ="'.mysql_real_escape_string($turskoKupatilo).'", 
		smjestaj.Hammam ="'.mysql_real_escape_string($hammam).'", 
		smjestaj.ZatvoreniBazen ="'.mysql_real_escape_string($zatvoreniBazen).'", 
		smjestaj.BrojSoba  ="'.mysql_real_escape_string($brojSoba).'", 
		smjestaj.Jednokrevetne  ="'.mysql_real_escape_string($jednokrevetne).'", 
		smjestaj.CijenaJednokrevetnih  ="'.mysql_real_escape_string($cijenaJednokrevetnih).'", 
		smjestaj.Dvokrevetne  ="'.mysql_real_escape_string($dvokrevetne).'", 
		smjestaj.CijenaDvokrevetnih  ="'.mysql_real_escape_string($cijenaDvokrevetnih).'",
		smjestaj.DvokrevetneOdvojeno  ="'.mysql_real_escape_string($dvokrevetneOdvojeno).'", 
		smjestaj.Trokrevetne  ="'.mysql_real_escape_string($trokrevetne).'", 
		smjestaj.CijenaTrokrevetnih  ="'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
		smjestaj.Cetverokrevetne  ="'.mysql_real_escape_string($cetverokrevetne).'", 
		smjestaj.CijenaCetverokrevetnih  ="'.mysql_real_escape_string($cijenaCetverokrevetnih).'", 
		smjestaj.Apartmani  ="'.mysql_real_escape_string($apartmani).'", 
		smjestaj.CijenaApartmana  ="'.mysql_real_escape_string($cijenaApartmana).'",
		smjestaj.PoslugaUSobu  ="'.mysql_real_escape_string($poslugaUSobu).'", 
		smjestaj.Veseraj  ="'.mysql_real_escape_string($veseraj).'", 
		smjestaj.UslugaPeglanja  ="'.mysql_real_escape_string($uslugaPeglanja).'", 
		smjestaj.RentACar  ="'.mysql_real_escape_string($rentACar).'", 
		smjestaj.FaxKopiranje  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.KonferencijskeSobe  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.PrevozOdDoZracneLuke  ="'.mysql_real_escape_string($prevozOdDoZracneLuke).'", 
		smjestaj.HemijskaCistiona  ="'.mysql_real_escape_string($hemijskaCistiona).'", 
		smjestaj.DorucakUSobi  ="'.mysql_real_escape_string($dorucakUSobi).'", 
		smjestaj.Mjenjacnica  ="'.mysql_real_escape_string($mjenjacnica).'", 
		smjestaj.Internet  ="'.mysql_real_escape_string($internet).'", 
		smjestaj.InternetPlacanje  ="'.mysql_real_escape_string($internetPlacanje).'", 
		smjestaj.ParkingUnutar  ="'.mysql_real_escape_string($parkingUnutar).'", 
		smjestaj.ParkingUblizini  ="'.mysql_real_escape_string($parkingUblizini).'", 
		smjestaj.CheckIn  ="'.mysql_real_escape_string($checkIn).'", 
		smjestaj.CheckOut  ="'.mysql_real_escape_string($checkOut).'", 
		smjestaj.OtkazivanjeSobe  ="'.mysql_real_escape_string($otkazivanjeSobe).'", 
		smjestaj.KrevetZaDjecu  ="'.mysql_real_escape_string($krevetZaDjecu).'", 
		smjestaj.KucniLjubimci  ="'.mysql_real_escape_string($kucniLjubimci).'", 
		smjestaj.KreditneKartice ="'.mysql_real_escape_string($kreditneKartice).'", 
		smjestaj.ImgPath1 = "'.mysql_real_escape_string($newname1).'",
		smjestaj.ImgPath2 = "'.mysql_real_escape_string($newname2).'",
		smjestaj.ImgPath4 = "'.mysql_real_escape_string($newname4).'"
		
		where smjestaj.Id = '.mysql_real_escape_string($id);	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateSmjestaj4($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24,$tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname1, $newname2, $id)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE smjestaj SET 
		smjestaj.Restoran ="'.mysql_real_escape_string($restoran).'", 
		smjestaj.Recepcija24 ="'.mysql_real_escape_string($recepcija24).'", 
		smjestaj.Naslov ="'.mysql_real_escape_string($naziv).'", 
		smjestaj.Vrijeme = "NOW()",  
		smjestaj.KratakOpis ="'.mysql_real_escape_string($kratakopis).'", 
		smjestaj.DodatniKomentar ="'.mysql_real_escape_string($dodatniKomentar).'", 
		smjestaj.TipSmjestaja  ="'.mysql_real_escape_string($tipSmjestaja).'", 
		smjestaj.Bar ="'.mysql_real_escape_string($bar).'", 
		smjestaj.ZvucnaIzolacija ="'.mysql_real_escape_string($zvucnaIzolacija).'", 
		smjestaj.Tv ="'.mysql_real_escape_string($tv).'", 
		smjestaj.Grijanje ="'.mysql_real_escape_string($grijanje).'", 
		smjestaj.SobeNepusaci ="'.mysql_real_escape_string($sobeNepusaci).'", 
		smjestaj.ObiteljskeSobe ="'.mysql_real_escape_string($obiteljskeSobe).'", 
		smjestaj.Sef  ="'.mysql_real_escape_string($sef).'", 
		smjestaj.SkladistePrtljaga ="'.mysql_real_escape_string($skladistePrtljaga).'", 
		smjestaj.Klima ="'.mysql_real_escape_string($klima).'", 
		smjestaj.Sauna ="'.mysql_real_escape_string($sauna).'", 
		smjestaj.Fitnes ="'.mysql_real_escape_string($fitnes).'", 
		smjestaj.Solarij ="'.mysql_real_escape_string($solarij).'", 
		smjestaj.Wellnes ="'.mysql_real_escape_string($wellnes).'",
		smjestaj.Jacuzzi ="'.mysql_real_escape_string($jacuzzi).'", 
		smjestaj.TurskoKupatilo ="'.mysql_real_escape_string($turskoKupatilo).'", 
		smjestaj.Hammam ="'.mysql_real_escape_string($hammam).'", 
		smjestaj.ZatvoreniBazen ="'.mysql_real_escape_string($zatvoreniBazen).'", 
		smjestaj.BrojSoba  ="'.mysql_real_escape_string($brojSoba).'", 
		smjestaj.Jednokrevetne  ="'.mysql_real_escape_string($jednokrevetne).'", 
		smjestaj.CijenaJednokrevetnih  ="'.mysql_real_escape_string($cijenaJednokrevetnih).'", 
		smjestaj.Dvokrevetne  ="'.mysql_real_escape_string($dvokrevetne).'", 
		smjestaj.CijenaDvokrevetnih  ="'.mysql_real_escape_string($cijenaDvokrevetnih).'",
		smjestaj.DvokrevetneOdvojeno  ="'.mysql_real_escape_string($dvokrevetneOdvojeno).'", 
		smjestaj.Trokrevetne  ="'.mysql_real_escape_string($trokrevetne).'", 
		smjestaj.CijenaTrokrevetnih  ="'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
		smjestaj.Cetverokrevetne  ="'.mysql_real_escape_string($cetverokrevetne).'", 
		smjestaj.CijenaCetverokrevetnih  ="'.mysql_real_escape_string($cijenaCetverokrevetnih).'", 
		smjestaj.Apartmani  ="'.mysql_real_escape_string($apartmani).'", 
		smjestaj.CijenaApartmana  ="'.mysql_real_escape_string($cijenaApartmana).'",
		smjestaj.PoslugaUSobu  ="'.mysql_real_escape_string($poslugaUSobu).'", 
		smjestaj.Veseraj  ="'.mysql_real_escape_string($veseraj).'", 
		smjestaj.UslugaPeglanja  ="'.mysql_real_escape_string($uslugaPeglanja).'", 
		smjestaj.RentACar  ="'.mysql_real_escape_string($rentACar).'", 
		smjestaj.FaxKopiranje  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.KonferencijskeSobe  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.PrevozOdDoZracneLuke  ="'.mysql_real_escape_string($prevozOdDoZracneLuke).'", 
		smjestaj.HemijskaCistiona  ="'.mysql_real_escape_string($hemijskaCistiona).'", 
		smjestaj.DorucakUSobi  ="'.mysql_real_escape_string($dorucakUSobi).'", 
		smjestaj.Mjenjacnica  ="'.mysql_real_escape_string($mjenjacnica).'", 
		smjestaj.Internet  ="'.mysql_real_escape_string($internet).'", 
		smjestaj.InternetPlacanje  ="'.mysql_real_escape_string($internetPlacanje).'", 
		smjestaj.ParkingUnutar  ="'.mysql_real_escape_string($parkingUnutar).'", 
		smjestaj.ParkingUblizini  ="'.mysql_real_escape_string($parkingUblizini).'", 
		smjestaj.CheckIn  ="'.mysql_real_escape_string($checkIn).'", 
		smjestaj.CheckOut  ="'.mysql_real_escape_string($checkOut).'", 
		smjestaj.OtkazivanjeSobe  ="'.mysql_real_escape_string($otkazivanjeSobe).'", 
		smjestaj.KrevetZaDjecu  ="'.mysql_real_escape_string($krevetZaDjecu).'", 
		smjestaj.KucniLjubimci  ="'.mysql_real_escape_string($kucniLjubimci).'", 
		smjestaj.KreditneKartice ="'.mysql_real_escape_string($kreditneKartice).'", 	
		smjestaj.ImgPath1 = "'.mysql_real_escape_string($newname1).'",
		smjestaj.ImgPath2 = "'.mysql_real_escape_string($newname2).'"
		
		where smjestaj.Id = '.mysql_real_escape_string($id);	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateSmjestaj5($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24,$tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname1, $newname3, $newname4, $id)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE smjestaj SET 
		smjestaj.Restoran ="'.mysql_real_escape_string($restoran).'", 
		smjestaj.Recepcija24 ="'.mysql_real_escape_string($recepcija24).'", 
		smjestaj.Naslov ="'.mysql_real_escape_string($naziv).'", 
		smjestaj.Vrijeme = "NOW()",  
		smjestaj.KratakOpis ="'.mysql_real_escape_string($kratakopis).'", 
		smjestaj.DodatniKomentar ="'.mysql_real_escape_string($dodatniKomentar).'", 
		smjestaj.TipSmjestaja  ="'.mysql_real_escape_string($tipSmjestaja).'", 
		smjestaj.Bar ="'.mysql_real_escape_string($bar).'", 
		smjestaj.ZvucnaIzolacija ="'.mysql_real_escape_string($zvucnaIzolacija).'", 
		smjestaj.Tv ="'.mysql_real_escape_string($tv).'", 
		smjestaj.Grijanje ="'.mysql_real_escape_string($grijanje).'", 
		smjestaj.SobeNepusaci ="'.mysql_real_escape_string($sobeNepusaci).'", 
		smjestaj.ObiteljskeSobe ="'.mysql_real_escape_string($obiteljskeSobe).'", 
		smjestaj.Sef  ="'.mysql_real_escape_string($sef).'", 
		smjestaj.SkladistePrtljaga ="'.mysql_real_escape_string($skladistePrtljaga).'", 
		smjestaj.Klima ="'.mysql_real_escape_string($klima).'", 
		smjestaj.Sauna ="'.mysql_real_escape_string($sauna).'", 
		smjestaj.Fitnes ="'.mysql_real_escape_string($fitnes).'", 
		smjestaj.Solarij ="'.mysql_real_escape_string($solarij).'", 
		smjestaj.Wellnes ="'.mysql_real_escape_string($wellnes).'",
		smjestaj.Jacuzzi ="'.mysql_real_escape_string($jacuzzi).'", 
		smjestaj.TurskoKupatilo ="'.mysql_real_escape_string($turskoKupatilo).'", 
		smjestaj.Hammam ="'.mysql_real_escape_string($hammam).'", 
		smjestaj.ZatvoreniBazen ="'.mysql_real_escape_string($zatvoreniBazen).'", 
		smjestaj.BrojSoba  ="'.mysql_real_escape_string($brojSoba).'", 
		smjestaj.Jednokrevetne  ="'.mysql_real_escape_string($jednokrevetne).'", 
		smjestaj.CijenaJednokrevetnih  ="'.mysql_real_escape_string($cijenaJednokrevetnih).'", 
		smjestaj.Dvokrevetne  ="'.mysql_real_escape_string($dvokrevetne).'", 
		smjestaj.CijenaDvokrevetnih  ="'.mysql_real_escape_string($cijenaDvokrevetnih).'",
		smjestaj.DvokrevetneOdvojeno  ="'.mysql_real_escape_string($dvokrevetneOdvojeno).'", 
		smjestaj.Trokrevetne  ="'.mysql_real_escape_string($trokrevetne).'", 
		smjestaj.CijenaTrokrevetnih  ="'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
		smjestaj.Cetverokrevetne  ="'.mysql_real_escape_string($cetverokrevetne).'", 
		smjestaj.CijenaCetverokrevetnih  ="'.mysql_real_escape_string($cijenaCetverokrevetnih).'", 
		smjestaj.Apartmani  ="'.mysql_real_escape_string($apartmani).'", 
		smjestaj.CijenaApartmana  ="'.mysql_real_escape_string($cijenaApartmana).'",
		smjestaj.PoslugaUSobu  ="'.mysql_real_escape_string($poslugaUSobu).'", 
		smjestaj.Veseraj  ="'.mysql_real_escape_string($veseraj).'", 
		smjestaj.UslugaPeglanja  ="'.mysql_real_escape_string($uslugaPeglanja).'", 
		smjestaj.RentACar  ="'.mysql_real_escape_string($rentACar).'", 
		smjestaj.FaxKopiranje  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.KonferencijskeSobe  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.PrevozOdDoZracneLuke  ="'.mysql_real_escape_string($prevozOdDoZracneLuke).'", 
		smjestaj.HemijskaCistiona  ="'.mysql_real_escape_string($hemijskaCistiona).'", 
		smjestaj.DorucakUSobi  ="'.mysql_real_escape_string($dorucakUSobi).'", 
		smjestaj.Mjenjacnica  ="'.mysql_real_escape_string($mjenjacnica).'", 
		smjestaj.Internet  ="'.mysql_real_escape_string($internet).'", 
		smjestaj.InternetPlacanje  ="'.mysql_real_escape_string($internetPlacanje).'", 
		smjestaj.ParkingUnutar  ="'.mysql_real_escape_string($parkingUnutar).'", 
		smjestaj.ParkingUblizini  ="'.mysql_real_escape_string($parkingUblizini).'", 
		smjestaj.CheckIn  ="'.mysql_real_escape_string($checkIn).'", 
		smjestaj.CheckOut  ="'.mysql_real_escape_string($checkOut).'", 
		smjestaj.OtkazivanjeSobe  ="'.mysql_real_escape_string($otkazivanjeSobe).'", 
		smjestaj.KrevetZaDjecu  ="'.mysql_real_escape_string($krevetZaDjecu).'", 
		smjestaj.KucniLjubimci  ="'.mysql_real_escape_string($kucniLjubimci).'", 
		smjestaj.KreditneKartice ="'.mysql_real_escape_string($kreditneKartice).'", 		
		smjestaj.ImgPath2 = "'.mysql_real_escape_string($newname1).'",
		smjestaj.ImgPath3 = "'.mysql_real_escape_string($newname3).'",
		smjestaj.ImgPath4 = "'.mysql_real_escape_string($newname4).'"
		
		where smjestaj.Id = '.mysql_real_escape_string($id);	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateSmjestaj6($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24, $tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname1, $newname3, $id)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE smjestaj SET 
		smjestaj.Restoran ="'.mysql_real_escape_string($restoran).'", 
		smjestaj.Recepcija24 ="'.mysql_real_escape_string($recepcija24).'", 
		smjestaj.Naslov ="'.mysql_real_escape_string($naziv).'", 
		smjestaj.Vrijeme = "NOW()",  
		smjestaj.KratakOpis ="'.mysql_real_escape_string($kratakopis).'", 
		smjestaj.DodatniKomentar ="'.mysql_real_escape_string($dodatniKomentar).'", 
		smjestaj.TipSmjestaja  ="'.mysql_real_escape_string($tipSmjestaja).'", 
		smjestaj.Bar ="'.mysql_real_escape_string($bar).'", 
		smjestaj.ZvucnaIzolacija ="'.mysql_real_escape_string($zvucnaIzolacija).'", 
		smjestaj.Tv ="'.mysql_real_escape_string($tv).'", 
		smjestaj.Grijanje ="'.mysql_real_escape_string($grijanje).'", 
		smjestaj.SobeNepusaci ="'.mysql_real_escape_string($sobeNepusaci).'", 
		smjestaj.ObiteljskeSobe ="'.mysql_real_escape_string($obiteljskeSobe).'", 
		smjestaj.Sef  ="'.mysql_real_escape_string($sef).'", 
		smjestaj.SkladistePrtljaga ="'.mysql_real_escape_string($skladistePrtljaga).'", 
		smjestaj.Klima ="'.mysql_real_escape_string($klima).'", 
		smjestaj.Sauna ="'.mysql_real_escape_string($sauna).'", 
		smjestaj.Fitnes ="'.mysql_real_escape_string($fitnes).'", 
		smjestaj.Solarij ="'.mysql_real_escape_string($solarij).'", 
		smjestaj.Wellnes ="'.mysql_real_escape_string($wellnes).'",
		smjestaj.Jacuzzi ="'.mysql_real_escape_string($jacuzzi).'", 
		smjestaj.TurskoKupatilo ="'.mysql_real_escape_string($turskoKupatilo).'", 
		smjestaj.Hammam ="'.mysql_real_escape_string($hammam).'", 
		smjestaj.ZatvoreniBazen ="'.mysql_real_escape_string($zatvoreniBazen).'", 
		smjestaj.BrojSoba  ="'.mysql_real_escape_string($brojSoba).'", 
		smjestaj.Jednokrevetne  ="'.mysql_real_escape_string($jednokrevetne).'", 
		smjestaj.CijenaJednokrevetnih  ="'.mysql_real_escape_string($cijenaJednokrevetnih).'", 
		smjestaj.Dvokrevetne  ="'.mysql_real_escape_string($dvokrevetne).'", 
		smjestaj.CijenaDvokrevetnih  ="'.mysql_real_escape_string($cijenaDvokrevetnih).'",
		smjestaj.DvokrevetneOdvojeno  ="'.mysql_real_escape_string($dvokrevetneOdvojeno).'", 
		smjestaj.Trokrevetne  ="'.mysql_real_escape_string($trokrevetne).'", 
		smjestaj.CijenaTrokrevetnih  ="'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
		smjestaj.Cetverokrevetne  ="'.mysql_real_escape_string($cetverokrevetne).'", 
		smjestaj.CijenaCetverokrevetnih  ="'.mysql_real_escape_string($cijenaCetverokrevetnih).'", 
		smjestaj.Apartmani  ="'.mysql_real_escape_string($apartmani).'", 
		smjestaj.CijenaApartmana  ="'.mysql_real_escape_string($cijenaApartmana).'",
		smjestaj.PoslugaUSobu  ="'.mysql_real_escape_string($poslugaUSobu).'", 
		smjestaj.Veseraj  ="'.mysql_real_escape_string($veseraj).'", 
		smjestaj.UslugaPeglanja  ="'.mysql_real_escape_string($uslugaPeglanja).'", 
		smjestaj.RentACar  ="'.mysql_real_escape_string($rentACar).'", 
		smjestaj.FaxKopiranje  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.KonferencijskeSobe  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.PrevozOdDoZracneLuke  ="'.mysql_real_escape_string($prevozOdDoZracneLuke).'", 
		smjestaj.HemijskaCistiona  ="'.mysql_real_escape_string($hemijskaCistiona).'", 
		smjestaj.DorucakUSobi  ="'.mysql_real_escape_string($dorucakUSobi).'", 
		smjestaj.Mjenjacnica  ="'.mysql_real_escape_string($mjenjacnica).'", 
		smjestaj.Internet  ="'.mysql_real_escape_string($internet).'", 
		smjestaj.InternetPlacanje  ="'.mysql_real_escape_string($internetPlacanje).'", 
		smjestaj.ParkingUnutar  ="'.mysql_real_escape_string($parkingUnutar).'", 
		smjestaj.ParkingUblizini  ="'.mysql_real_escape_string($parkingUblizini).'", 
		smjestaj.CheckIn  ="'.mysql_real_escape_string($checkIn).'", 
		smjestaj.CheckOut  ="'.mysql_real_escape_string($checkOut).'", 
		smjestaj.OtkazivanjeSobe  ="'.mysql_real_escape_string($otkazivanjeSobe).'", 
		smjestaj.KrevetZaDjecu  ="'.mysql_real_escape_string($krevetZaDjecu).'", 
		smjestaj.KucniLjubimci  ="'.mysql_real_escape_string($kucniLjubimci).'", 
		smjestaj.KreditneKartice ="'.mysql_real_escape_string($kreditneKartice).'", 	
		smjestaj.ImgPath1 = "'.mysql_real_escape_string($newname1).'",			
		smjestaj.ImgPath3 = "'.mysql_real_escape_string($newname3).'"
		
		where smjestaj.Id = '.mysql_real_escape_string($id);		
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateSmjestaj7($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24,$tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname1, $newname4, $id)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE smjestaj SET 
		smjestaj.Restoran ="'.mysql_real_escape_string($restoran).'", 
		smjestaj.Recepcija24 ="'.mysql_real_escape_string($recepcija24).'", 
		smjestaj.Naslov ="'.mysql_real_escape_string($naziv).'", 
		smjestaj.Vrijeme = "NOW()",  
		smjestaj.KratakOpis ="'.mysql_real_escape_string($kratakopis).'", 
		smjestaj.DodatniKomentar ="'.mysql_real_escape_string($dodatniKomentar).'", 
		smjestaj.TipSmjestaja  ="'.mysql_real_escape_string($tipSmjestaja).'", 
		smjestaj.Bar ="'.mysql_real_escape_string($bar).'", 
		smjestaj.ZvucnaIzolacija ="'.mysql_real_escape_string($zvucnaIzolacija).'", 
		smjestaj.Tv ="'.mysql_real_escape_string($tv).'", 
		smjestaj.Grijanje ="'.mysql_real_escape_string($grijanje).'", 
		smjestaj.SobeNepusaci ="'.mysql_real_escape_string($sobeNepusaci).'", 
		smjestaj.ObiteljskeSobe ="'.mysql_real_escape_string($obiteljskeSobe).'", 
		smjestaj.Sef  ="'.mysql_real_escape_string($sef).'", 
		smjestaj.SkladistePrtljaga ="'.mysql_real_escape_string($skladistePrtljaga).'", 
		smjestaj.Klima ="'.mysql_real_escape_string($klima).'", 
		smjestaj.Sauna ="'.mysql_real_escape_string($sauna).'", 
		smjestaj.Fitnes ="'.mysql_real_escape_string($fitnes).'", 
		smjestaj.Solarij ="'.mysql_real_escape_string($solarij).'", 
		smjestaj.Wellnes ="'.mysql_real_escape_string($wellnes).'",
		smjestaj.Jacuzzi ="'.mysql_real_escape_string($jacuzzi).'", 
		smjestaj.TurskoKupatilo ="'.mysql_real_escape_string($turskoKupatilo).'", 
		smjestaj.Hammam ="'.mysql_real_escape_string($hammam).'", 
		smjestaj.ZatvoreniBazen ="'.mysql_real_escape_string($zatvoreniBazen).'", 
		smjestaj.BrojSoba  ="'.mysql_real_escape_string($brojSoba).'", 
		smjestaj.Jednokrevetne  ="'.mysql_real_escape_string($jednokrevetne).'", 
		smjestaj.CijenaJednokrevetnih  ="'.mysql_real_escape_string($cijenaJednokrevetnih).'", 
		smjestaj.Dvokrevetne  ="'.mysql_real_escape_string($dvokrevetne).'", 
		smjestaj.CijenaDvokrevetnih  ="'.mysql_real_escape_string($cijenaDvokrevetnih).'",
		smjestaj.DvokrevetneOdvojeno  ="'.mysql_real_escape_string($dvokrevetneOdvojeno).'", 
		smjestaj.Trokrevetne  ="'.mysql_real_escape_string($trokrevetne).'", 
		smjestaj.CijenaTrokrevetnih  ="'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
		smjestaj.Cetverokrevetne  ="'.mysql_real_escape_string($cetverokrevetne).'", 
		smjestaj.CijenaCetverokrevetnih  ="'.mysql_real_escape_string($cijenaCetverokrevetnih).'", 
		smjestaj.Apartmani  ="'.mysql_real_escape_string($apartmani).'", 
		smjestaj.CijenaApartmana  ="'.mysql_real_escape_string($cijenaApartmana).'",
		smjestaj.PoslugaUSobu  ="'.mysql_real_escape_string($poslugaUSobu).'", 
		smjestaj.Veseraj  ="'.mysql_real_escape_string($veseraj).'", 
		smjestaj.UslugaPeglanja  ="'.mysql_real_escape_string($uslugaPeglanja).'", 
		smjestaj.RentACar  ="'.mysql_real_escape_string($rentACar).'", 
		smjestaj.FaxKopiranje  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.KonferencijskeSobe  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.PrevozOdDoZracneLuke  ="'.mysql_real_escape_string($prevozOdDoZracneLuke).'", 
		smjestaj.HemijskaCistiona  ="'.mysql_real_escape_string($hemijskaCistiona).'", 
		smjestaj.DorucakUSobi  ="'.mysql_real_escape_string($dorucakUSobi).'", 
		smjestaj.Mjenjacnica  ="'.mysql_real_escape_string($mjenjacnica).'", 
		smjestaj.Internet  ="'.mysql_real_escape_string($internet).'", 
		smjestaj.InternetPlacanje  ="'.mysql_real_escape_string($internetPlacanje).'", 
		smjestaj.ParkingUnutar  ="'.mysql_real_escape_string($parkingUnutar).'", 
		smjestaj.ParkingUblizini  ="'.mysql_real_escape_string($parkingUblizini).'", 
		smjestaj.CheckIn  ="'.mysql_real_escape_string($checkIn).'", 
		smjestaj.CheckOut  ="'.mysql_real_escape_string($checkOut).'", 
		smjestaj.OtkazivanjeSobe  ="'.mysql_real_escape_string($otkazivanjeSobe).'", 
		smjestaj.KrevetZaDjecu  ="'.mysql_real_escape_string($krevetZaDjecu).'", 
		smjestaj.KucniLjubimci  ="'.mysql_real_escape_string($kucniLjubimci).'", 
		smjestaj.KreditneKartice ="'.mysql_real_escape_string($kreditneKartice).'", 
		smjestaj.ImgPath1 = "'.mysql_real_escape_string($newname1).'",
		smjestaj.ImgPath4 = "'.mysql_real_escape_string($newname4).'"
		
		where smjestaj.Id = '.mysql_real_escape_string($id);	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateSmjestaj8($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24,$tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname1, $id)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE smjestaj SET 
		smjestaj.Restoran ="'.mysql_real_escape_string($restoran).'", 
		smjestaj.Recepcija24 ="'.mysql_real_escape_string($recepcija24).'", 
		smjestaj.Naslov ="'.mysql_real_escape_string($naziv).'", 
		smjestaj.Vrijeme = "NOW()",  
		smjestaj.KratakOpis ="'.mysql_real_escape_string($kratakopis).'", 
		smjestaj.DodatniKomentar ="'.mysql_real_escape_string($dodatniKomentar).'", 
		smjestaj.TipSmjestaja  ="'.mysql_real_escape_string($tipSmjestaja).'", 
		smjestaj.Bar ="'.mysql_real_escape_string($bar).'", 
		smjestaj.ZvucnaIzolacija ="'.mysql_real_escape_string($zvucnaIzolacija).'", 
		smjestaj.Tv ="'.mysql_real_escape_string($tv).'", 
		smjestaj.Grijanje ="'.mysql_real_escape_string($grijanje).'", 
		smjestaj.SobeNepusaci ="'.mysql_real_escape_string($sobeNepusaci).'", 
		smjestaj.ObiteljskeSobe ="'.mysql_real_escape_string($obiteljskeSobe).'", 
		smjestaj.Sef  ="'.mysql_real_escape_string($sef).'", 
		smjestaj.SkladistePrtljaga ="'.mysql_real_escape_string($skladistePrtljaga).'", 
		smjestaj.Klima ="'.mysql_real_escape_string($klima).'", 
		smjestaj.Sauna ="'.mysql_real_escape_string($sauna).'", 
		smjestaj.Fitnes ="'.mysql_real_escape_string($fitnes).'", 
		smjestaj.Solarij ="'.mysql_real_escape_string($solarij).'", 
		smjestaj.Wellnes ="'.mysql_real_escape_string($wellnes).'",
		smjestaj.Jacuzzi ="'.mysql_real_escape_string($jacuzzi).'", 
		smjestaj.TurskoKupatilo ="'.mysql_real_escape_string($turskoKupatilo).'", 
		smjestaj.Hammam ="'.mysql_real_escape_string($hammam).'", 
		smjestaj.ZatvoreniBazen ="'.mysql_real_escape_string($zatvoreniBazen).'", 
		smjestaj.BrojSoba  ="'.mysql_real_escape_string($brojSoba).'", 
		smjestaj.Jednokrevetne  ="'.mysql_real_escape_string($jednokrevetne).'", 
		smjestaj.CijenaJednokrevetnih  ="'.mysql_real_escape_string($cijenaJednokrevetnih).'", 
		smjestaj.Dvokrevetne  ="'.mysql_real_escape_string($dvokrevetne).'", 
		smjestaj.CijenaDvokrevetnih  ="'.mysql_real_escape_string($cijenaDvokrevetnih).'",
		smjestaj.DvokrevetneOdvojeno  ="'.mysql_real_escape_string($dvokrevetneOdvojeno).'", 
		smjestaj.Trokrevetne  ="'.mysql_real_escape_string($trokrevetne).'", 
		smjestaj.CijenaTrokrevetnih  ="'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
		smjestaj.Cetverokrevetne  ="'.mysql_real_escape_string($cetverokrevetne).'", 
		smjestaj.CijenaCetverokrevetnih  ="'.mysql_real_escape_string($cijenaCetverokrevetnih).'", 
		smjestaj.Apartmani  ="'.mysql_real_escape_string($apartmani).'", 
		smjestaj.CijenaApartmana  ="'.mysql_real_escape_string($cijenaApartmana).'",
		smjestaj.PoslugaUSobu  ="'.mysql_real_escape_string($poslugaUSobu).'", 
		smjestaj.Veseraj  ="'.mysql_real_escape_string($veseraj).'", 
		smjestaj.UslugaPeglanja  ="'.mysql_real_escape_string($uslugaPeglanja).'", 
		smjestaj.RentACar  ="'.mysql_real_escape_string($rentACar).'", 
		smjestaj.FaxKopiranje  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.KonferencijskeSobe  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.PrevozOdDoZracneLuke  ="'.mysql_real_escape_string($prevozOdDoZracneLuke).'", 
		smjestaj.HemijskaCistiona  ="'.mysql_real_escape_string($hemijskaCistiona).'", 
		smjestaj.DorucakUSobi  ="'.mysql_real_escape_string($dorucakUSobi).'", 
		smjestaj.Mjenjacnica  ="'.mysql_real_escape_string($mjenjacnica).'", 
		smjestaj.Internet  ="'.mysql_real_escape_string($internet).'", 
		smjestaj.InternetPlacanje  ="'.mysql_real_escape_string($internetPlacanje).'", 
		smjestaj.ParkingUnutar  ="'.mysql_real_escape_string($parkingUnutar).'", 
		smjestaj.ParkingUblizini  ="'.mysql_real_escape_string($parkingUblizini).'", 
		smjestaj.CheckIn  ="'.mysql_real_escape_string($checkIn).'", 
		smjestaj.CheckOut  ="'.mysql_real_escape_string($checkOut).'", 
		smjestaj.OtkazivanjeSobe  ="'.mysql_real_escape_string($otkazivanjeSobe).'", 
		smjestaj.KrevetZaDjecu  ="'.mysql_real_escape_string($krevetZaDjecu).'", 
		smjestaj.KucniLjubimci  ="'.mysql_real_escape_string($kucniLjubimci).'", 
		smjestaj.KreditneKartice ="'.mysql_real_escape_string($kreditneKartice).'", 	
		smjestaj.ImgPath1 = "'.mysql_real_escape_string($newname1).'"
		
		where smjestaj.Id = '.mysql_real_escape_string($id);	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	
	
	public function UpdateSmjestaj9($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24,$tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi, $mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe, $krevetZaDjecu,	$kucniLjubimci,	$kreditneKartice, $newname2, $newname3, $newname4, $id)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE smjestaj SET 
		smjestaj.Restoran ="'.mysql_real_escape_string($restoran).'", 
		smjestaj.Recepcija24 ="'.mysql_real_escape_string($recepcija24).'", 
		smjestaj.Naslov ="'.mysql_real_escape_string($naziv).'", 
		smjestaj.Vrijeme = "NOW()",  
		smjestaj.KratakOpis ="'.mysql_real_escape_string($kratakopis).'", 
		smjestaj.DodatniKomentar ="'.mysql_real_escape_string($dodatniKomentar).'", 
		smjestaj.TipSmjestaja  ="'.mysql_real_escape_string($tipSmjestaja).'", 
		smjestaj.Bar ="'.mysql_real_escape_string($bar).'", 
		smjestaj.ZvucnaIzolacija ="'.mysql_real_escape_string($zvucnaIzolacija).'", 
		smjestaj.Tv ="'.mysql_real_escape_string($tv).'", 
		smjestaj.Grijanje ="'.mysql_real_escape_string($grijanje).'", 
		smjestaj.SobeNepusaci ="'.mysql_real_escape_string($sobeNepusaci).'", 
		smjestaj.ObiteljskeSobe ="'.mysql_real_escape_string($obiteljskeSobe).'", 
		smjestaj.Sef  ="'.mysql_real_escape_string($sef).'", 
		smjestaj.SkladistePrtljaga ="'.mysql_real_escape_string($skladistePrtljaga).'", 
		smjestaj.Klima ="'.mysql_real_escape_string($klima).'", 
		smjestaj.Sauna ="'.mysql_real_escape_string($sauna).'", 
		smjestaj.Fitnes ="'.mysql_real_escape_string($fitnes).'", 
		smjestaj.Solarij ="'.mysql_real_escape_string($solarij).'", 
		smjestaj.Wellnes ="'.mysql_real_escape_string($wellnes).'",
		smjestaj.Jacuzzi ="'.mysql_real_escape_string($jacuzzi).'", 
		smjestaj.TurskoKupatilo ="'.mysql_real_escape_string($turskoKupatilo).'", 
		smjestaj.Hammam ="'.mysql_real_escape_string($hammam).'", 
		smjestaj.ZatvoreniBazen ="'.mysql_real_escape_string($zatvoreniBazen).'", 
		smjestaj.BrojSoba  ="'.mysql_real_escape_string($brojSoba).'", 
		smjestaj.Jednokrevetne  ="'.mysql_real_escape_string($jednokrevetne).'", 
		smjestaj.CijenaJednokrevetnih  ="'.mysql_real_escape_string($cijenaJednokrevetnih).'", 
		smjestaj.Dvokrevetne  ="'.mysql_real_escape_string($dvokrevetne).'", 
		smjestaj.CijenaDvokrevetnih  ="'.mysql_real_escape_string($cijenaDvokrevetnih).'",
		smjestaj.DvokrevetneOdvojeno  ="'.mysql_real_escape_string($dvokrevetneOdvojeno).'", 
		smjestaj.Trokrevetne  ="'.mysql_real_escape_string($trokrevetne).'", 
		smjestaj.CijenaTrokrevetnih  ="'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
		smjestaj.Cetverokrevetne  ="'.mysql_real_escape_string($cetverokrevetne).'", 
		smjestaj.CijenaCetverokrevetnih  ="'.mysql_real_escape_string($cijenaCetverokrevetnih).'", 
		smjestaj.Apartmani  ="'.mysql_real_escape_string($apartmani).'", 
		smjestaj.CijenaApartmana  ="'.mysql_real_escape_string($cijenaApartmana).'",
		smjestaj.PoslugaUSobu  ="'.mysql_real_escape_string($poslugaUSobu).'", 
		smjestaj.Veseraj  ="'.mysql_real_escape_string($veseraj).'", 
		smjestaj.UslugaPeglanja  ="'.mysql_real_escape_string($uslugaPeglanja).'", 
		smjestaj.RentACar  ="'.mysql_real_escape_string($rentACar).'", 
		smjestaj.FaxKopiranje  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.KonferencijskeSobe  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.PrevozOdDoZracneLuke  ="'.mysql_real_escape_string($prevozOdDoZracneLuke).'", 
		smjestaj.HemijskaCistiona  ="'.mysql_real_escape_string($hemijskaCistiona).'", 
		smjestaj.DorucakUSobi  ="'.mysql_real_escape_string($dorucakUSobi).'", 
		smjestaj.Mjenjacnica  ="'.mysql_real_escape_string($mjenjacnica).'", 
		smjestaj.Internet  ="'.mysql_real_escape_string($internet).'", 
		smjestaj.InternetPlacanje  ="'.mysql_real_escape_string($internetPlacanje).'", 
		smjestaj.ParkingUnutar  ="'.mysql_real_escape_string($parkingUnutar).'", 
		smjestaj.ParkingUblizini  ="'.mysql_real_escape_string($parkingUblizini).'", 
		smjestaj.CheckIn  ="'.mysql_real_escape_string($checkIn).'", 
		smjestaj.CheckOut  ="'.mysql_real_escape_string($checkOut).'", 
		smjestaj.OtkazivanjeSobe  ="'.mysql_real_escape_string($otkazivanjeSobe).'", 
		smjestaj.KrevetZaDjecu  ="'.mysql_real_escape_string($krevetZaDjecu).'", 
		smjestaj.KucniLjubimci  ="'.mysql_real_escape_string($kucniLjubimci).'", 
		smjestaj.KreditneKartice ="'.mysql_real_escape_string($kreditneKartice).'", 
		smjestaj.ImgPath2 = "'.mysql_real_escape_string($newname2).'",
		smjestaj.ImgPath3 = "'.mysql_real_escape_string($newname3).'",
		smjestaj.ImgPath4 = "'.mysql_real_escape_string($newname4).'"
		
		where smjestaj.Id = '.mysql_real_escape_string($id);	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	
	
	public function UpdateSmjestaj10($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24,$tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname2, $newname3, $id)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE smjestaj SET 
	smjestaj.Restoran ="'.mysql_real_escape_string($restoran).'", 
		smjestaj.Recepcija24 ="'.mysql_real_escape_string($recepcija24).'", 
		smjestaj.Naslov ="'.mysql_real_escape_string($naziv).'", 
		smjestaj.Vrijeme = "NOW()",  
		smjestaj.KratakOpis ="'.mysql_real_escape_string($kratakopis).'", 
		smjestaj.DodatniKomentar ="'.mysql_real_escape_string($dodatniKomentar).'", 
		smjestaj.TipSmjestaja  ="'.mysql_real_escape_string($tipSmjestaja).'", 
		smjestaj.Bar ="'.mysql_real_escape_string($bar).'", 
		smjestaj.ZvucnaIzolacija ="'.mysql_real_escape_string($zvucnaIzolacija).'", 
		smjestaj.Tv ="'.mysql_real_escape_string($tv).'", 
		smjestaj.Grijanje ="'.mysql_real_escape_string($grijanje).'", 
		smjestaj.SobeNepusaci ="'.mysql_real_escape_string($sobeNepusaci).'", 
		smjestaj.ObiteljskeSobe ="'.mysql_real_escape_string($obiteljskeSobe).'", 
		smjestaj.Sef  ="'.mysql_real_escape_string($sef).'", 
		smjestaj.SkladistePrtljaga ="'.mysql_real_escape_string($skladistePrtljaga).'", 
		smjestaj.Klima ="'.mysql_real_escape_string($klima).'", 
		smjestaj.Sauna ="'.mysql_real_escape_string($sauna).'", 
		smjestaj.Fitnes ="'.mysql_real_escape_string($fitnes).'", 
		smjestaj.Solarij ="'.mysql_real_escape_string($solarij).'", 
		smjestaj.Wellnes ="'.mysql_real_escape_string($wellnes).'",
		smjestaj.Jacuzzi ="'.mysql_real_escape_string($jacuzzi).'", 
		smjestaj.TurskoKupatilo ="'.mysql_real_escape_string($turskoKupatilo).'", 
		smjestaj.Hammam ="'.mysql_real_escape_string($hammam).'", 
		smjestaj.ZatvoreniBazen ="'.mysql_real_escape_string($zatvoreniBazen).'", 
		smjestaj.BrojSoba  ="'.mysql_real_escape_string($brojSoba).'", 
		smjestaj.Jednokrevetne  ="'.mysql_real_escape_string($jednokrevetne).'", 
		smjestaj.CijenaJednokrevetnih  ="'.mysql_real_escape_string($cijenaJednokrevetnih).'", 
		smjestaj.Dvokrevetne  ="'.mysql_real_escape_string($dvokrevetne).'", 
		smjestaj.CijenaDvokrevetnih  ="'.mysql_real_escape_string($cijenaDvokrevetnih).'",
		smjestaj.DvokrevetneOdvojeno  ="'.mysql_real_escape_string($dvokrevetneOdvojeno).'", 
		smjestaj.Trokrevetne  ="'.mysql_real_escape_string($trokrevetne).'", 
		smjestaj.CijenaTrokrevetnih  ="'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
		smjestaj.Cetverokrevetne  ="'.mysql_real_escape_string($cetverokrevetne).'", 
		smjestaj.CijenaCetverokrevetnih  ="'.mysql_real_escape_string($cijenaCetverokrevetnih).'", 
		smjestaj.Apartmani  ="'.mysql_real_escape_string($apartmani).'", 
		smjestaj.CijenaApartmana  ="'.mysql_real_escape_string($cijenaApartmana).'",
		smjestaj.Veseraj  ="'.mysql_real_escape_string($veseraj).'", 
		smjestaj.UslugaPeglanja  ="'.mysql_real_escape_string($uslugaPeglanja).'", 
		smjestaj.RentACar  ="'.mysql_real_escape_string($rentACar).'", 
		smjestaj.FaxKopiranje  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.KonferencijskeSobe  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.PrevozOdDoZracneLuke  ="'.mysql_real_escape_string($prevozOdDoZracneLuke).'", 
		smjestaj.HemijskaCistiona  ="'.mysql_real_escape_string($hemijskaCistiona).'", 
		smjestaj.DorucakUSobi  ="'.mysql_real_escape_string($dorucakUSobi).'", 
		smjestaj.Mjenjacnica  ="'.mysql_real_escape_string($mjenjacnica).'", 
		smjestaj.Internet  ="'.mysql_real_escape_string($internet).'", 
		smjestaj.InternetPlacanje  ="'.mysql_real_escape_string($internetPlacanje).'", 
		smjestaj.ParkingUnutar  ="'.mysql_real_escape_string($parkingUnutar).'", 
		smjestaj.ParkingUblizini  ="'.mysql_real_escape_string($parkingUblizini).'", 
		smjestaj.CheckIn  ="'.mysql_real_escape_string($checkIn).'", 
		smjestaj.CheckOut  ="'.mysql_real_escape_string($checkOut).'", 
		smjestaj.OtkazivanjeSobe  ="'.mysql_real_escape_string($otkazivanjeSobe).'", 
		smjestaj.KrevetZaDjecu  ="'.mysql_real_escape_string($krevetZaDjecu).'", 
		smjestaj.KucniLjubimci  ="'.mysql_real_escape_string($kucniLjubimci).'", 
		smjestaj.KreditneKartice ="'.mysql_real_escape_string($kreditneKartice).'",
		smjestaj.ImgPath2 = "'.mysql_real_escape_string($newname2).'",
		smjestaj.ImgPath3 = "'.mysql_real_escape_string($newname3).'"
		
		where smjestaj.Id = '.mysql_real_escape_string($id);	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	
	
	public function UpdateSmjestaj11($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24,$tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,	$kucniLjubimci,	$kreditneKartice, $newname2, $newname4, $id)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE smjestaj SET 
	smjestaj.Restoran ="'.mysql_real_escape_string($restoran).'", 
		smjestaj.Recepcija24 ="'.mysql_real_escape_string($recepcija24).'", 
		smjestaj.Naslov ="'.mysql_real_escape_string($naziv).'", 
		smjestaj.Vrijeme = "NOW()",  
		smjestaj.KratakOpis ="'.mysql_real_escape_string($kratakopis).'", 
		smjestaj.DodatniKomentar ="'.mysql_real_escape_string($dodatniKomentar).'", 
		smjestaj.TipSmjestaja  ="'.mysql_real_escape_string($tipSmjestaja).'", 
		smjestaj.Bar ="'.mysql_real_escape_string($bar).'", 
		smjestaj.ZvucnaIzolacija ="'.mysql_real_escape_string($zvucnaIzolacija).'", 
		smjestaj.Tv ="'.mysql_real_escape_string($tv).'", 
		smjestaj.Grijanje ="'.mysql_real_escape_string($grijanje).'", 
		smjestaj.SobeNepusaci ="'.mysql_real_escape_string($sobeNepusaci).'", 
		smjestaj.ObiteljskeSobe ="'.mysql_real_escape_string($obiteljskeSobe).'", 
		smjestaj.Sef  ="'.mysql_real_escape_string($sef).'", 
		smjestaj.SkladistePrtljaga ="'.mysql_real_escape_string($skladistePrtljaga).'", 
		smjestaj.Klima ="'.mysql_real_escape_string($klima).'", 
		smjestaj.Sauna ="'.mysql_real_escape_string($sauna).'", 
		smjestaj.Fitnes ="'.mysql_real_escape_string($fitnes).'", 
		smjestaj.Solarij ="'.mysql_real_escape_string($solarij).'", 
		smjestaj.Wellnes ="'.mysql_real_escape_string($wellnes).'",
		smjestaj.Jacuzzi ="'.mysql_real_escape_string($jacuzzi).'", 
		smjestaj.TurskoKupatilo ="'.mysql_real_escape_string($turskoKupatilo).'", 
		smjestaj.Hammam ="'.mysql_real_escape_string($hammam).'", 
		smjestaj.ZatvoreniBazen ="'.mysql_real_escape_string($zatvoreniBazen).'", 
		smjestaj.BrojSoba  ="'.mysql_real_escape_string($brojSoba).'", 
		smjestaj.Jednokrevetne  ="'.mysql_real_escape_string($jednokrevetne).'", 
		smjestaj.CijenaJednokrevetnih  ="'.mysql_real_escape_string($cijenaJednokrevetnih).'", 
		smjestaj.Dvokrevetne  ="'.mysql_real_escape_string($dvokrevetne).'", 
		smjestaj.CijenaDvokrevetnih  ="'.mysql_real_escape_string($cijenaDvokrevetnih).'",
		smjestaj.DvokrevetneOdvojeno  ="'.mysql_real_escape_string($dvokrevetneOdvojeno).'", 
		smjestaj.Trokrevetne  ="'.mysql_real_escape_string($trokrevetne).'", 
		smjestaj.CijenaTrokrevetnih  ="'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
		smjestaj.Cetverokrevetne  ="'.mysql_real_escape_string($cetverokrevetne).'", 
		smjestaj.CijenaCetverokrevetnih  ="'.mysql_real_escape_string($cijenaCetverokrevetnih).'", 
		smjestaj.Apartmani  ="'.mysql_real_escape_string($apartmani).'", 
		smjestaj.CijenaApartmana  ="'.mysql_real_escape_string($cijenaApartmana).'", 
		smjestaj.PoslugaUSobu  ="'.mysql_real_escape_string($poslugaUSobu).'", 
		smjestaj.Veseraj  ="'.mysql_real_escape_string($veseraj).'", 
		smjestaj.UslugaPeglanja  ="'.mysql_real_escape_string($uslugaPeglanja).'", 
		smjestaj.RentACar  ="'.mysql_real_escape_string($rentACar).'", 
		smjestaj.FaxKopiranje  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.KonferencijskeSobe  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.PrevozOdDoZracneLuke  ="'.mysql_real_escape_string($prevozOdDoZracneLuke).'", 
		smjestaj.HemijskaCistiona  ="'.mysql_real_escape_string($hemijskaCistiona).'", 
		smjestaj.DorucakUSobi  ="'.mysql_real_escape_string($dorucakUSobi).'", 
		smjestaj.Mjenjacnica  ="'.mysql_real_escape_string($mjenjacnica).'", 
		smjestaj.Internet  ="'.mysql_real_escape_string($internet).'", 
		smjestaj.InternetPlacanje  ="'.mysql_real_escape_string($internetPlacanje).'", 
		smjestaj.ParkingUnutar  ="'.mysql_real_escape_string($parkingUnutar).'", 
		smjestaj.ParkingUblizini  ="'.mysql_real_escape_string($parkingUblizini).'", 
		smjestaj.CheckIn  ="'.mysql_real_escape_string($checkIn).'", 
		smjestaj.CheckOut  ="'.mysql_real_escape_string($checkOut).'", 
		smjestaj.OtkazivanjeSobe  ="'.mysql_real_escape_string($otkazivanjeSobe).'", 
		smjestaj.KrevetZaDjecu  ="'.mysql_real_escape_string($krevetZaDjecu).'", 
		smjestaj.KucniLjubimci  ="'.mysql_real_escape_string($kucniLjubimci).'", 
		smjestaj.KreditneKartice ="'.mysql_real_escape_string($kreditneKartice).'",
		smjestaj.ImgPath2 = "'.mysql_real_escape_string($newname2).'",
		smjestaj.ImgPath4 = "'.mysql_real_escape_string($newname4).'"
		
		where smjestaj.Id = '.mysql_real_escape_string($id);	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	
	
	public function UpdateSmjestaj12($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24,$tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname2, $id)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE smjestaj SET 
		smjestaj.Restoran ="'.mysql_real_escape_string($restoran).'", 
		smjestaj.Recepcija24 ="'.mysql_real_escape_string($recepcija24).'", 
		smjestaj.Naslov ="'.mysql_real_escape_string($naziv).'", 
		smjestaj.Vrijeme = "NOW()",  
		smjestaj.KratakOpis ="'.mysql_real_escape_string($kratakopis).'", 
		smjestaj.DodatniKomentar ="'.mysql_real_escape_string($dodatniKomentar).'", 
		smjestaj.TipSmjestaja  ="'.mysql_real_escape_string($tipSmjestaja).'", 
		smjestaj.Bar ="'.mysql_real_escape_string($bar).'", 
		smjestaj.ZvucnaIzolacija ="'.mysql_real_escape_string($zvucnaIzolacija).'", 
		smjestaj.Tv ="'.mysql_real_escape_string($tv).'", 
		smjestaj.Grijanje ="'.mysql_real_escape_string($grijanje).'", 
		smjestaj.SobeNepusaci ="'.mysql_real_escape_string($sobeNepusaci).'", 
		smjestaj.ObiteljskeSobe ="'.mysql_real_escape_string($obiteljskeSobe).'", 
		smjestaj.Sef  ="'.mysql_real_escape_string($sef).'", 
		smjestaj.SkladistePrtljaga ="'.mysql_real_escape_string($skladistePrtljaga).'", 
		smjestaj.Klima ="'.mysql_real_escape_string($klima).'", 
		smjestaj.Sauna ="'.mysql_real_escape_string($sauna).'", 
		smjestaj.Fitnes ="'.mysql_real_escape_string($fitnes).'", 
		smjestaj.Solarij ="'.mysql_real_escape_string($solarij).'", 
		smjestaj.Wellnes ="'.mysql_real_escape_string($wellnes).'",
		smjestaj.Jacuzzi ="'.mysql_real_escape_string($jacuzzi).'", 
		smjestaj.TurskoKupatilo ="'.mysql_real_escape_string($turskoKupatilo).'", 
		smjestaj.Hammam ="'.mysql_real_escape_string($hammam).'", 
		smjestaj.ZatvoreniBazen ="'.mysql_real_escape_string($zatvoreniBazen).'", 
		smjestaj.BrojSoba  ="'.mysql_real_escape_string($brojSoba).'", 
		smjestaj.Jednokrevetne  ="'.mysql_real_escape_string($jednokrevetne).'", 
		smjestaj.CijenaJednokrevetnih  ="'.mysql_real_escape_string($cijenaJednokrevetnih).'", 
		smjestaj.Dvokrevetne  ="'.mysql_real_escape_string($dvokrevetne).'", 
		smjestaj.CijenaDvokrevetnih  ="'.mysql_real_escape_string($cijenaDvokrevetnih).'",
		smjestaj.DvokrevetneOdvojeno  ="'.mysql_real_escape_string($dvokrevetneOdvojeno).'", 
		smjestaj.Trokrevetne  ="'.mysql_real_escape_string($trokrevetne).'", 
		smjestaj.CijenaTrokrevetnih  ="'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
		smjestaj.Cetverokrevetne  ="'.mysql_real_escape_string($cetverokrevetne).'", 
		smjestaj.CijenaCetverokrevetnih  ="'.mysql_real_escape_string($cijenaCetverokrevetnih).'", 
		smjestaj.Apartmani  ="'.mysql_real_escape_string($apartmani).'", 
		smjestaj.CijenaApartmana  ="'.mysql_real_escape_string($cijenaApartmana).'", 
		smjestaj.PoslugaUSobu  ="'.mysql_real_escape_string($poslugaUSobu).'", 
		smjestaj.Veseraj  ="'.mysql_real_escape_string($veseraj).'", 
		smjestaj.UslugaPeglanja  ="'.mysql_real_escape_string($uslugaPeglanja).'", 
		smjestaj.RentACar  ="'.mysql_real_escape_string($rentACar).'", 
		smjestaj.FaxKopiranje  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.KonferencijskeSobe  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.PrevozOdDoZracneLuke  ="'.mysql_real_escape_string($prevozOdDoZracneLuke).'", 
		smjestaj.HemijskaCistiona  ="'.mysql_real_escape_string($hemijskaCistiona).'", 
		smjestaj.DorucakUSobi  ="'.mysql_real_escape_string($dorucakUSobi).'", 
		smjestaj.Mjenjacnica  ="'.mysql_real_escape_string($mjenjacnica).'", 
		smjestaj.Internet  ="'.mysql_real_escape_string($internet).'", 
		smjestaj.InternetPlacanje  ="'.mysql_real_escape_string($internetPlacanje).'", 
		smjestaj.ParkingUnutar  ="'.mysql_real_escape_string($parkingUnutar).'", 
		smjestaj.ParkingUblizini  ="'.mysql_real_escape_string($parkingUblizini).'", 
		smjestaj.CheckIn  ="'.mysql_real_escape_string($checkIn).'", 
		smjestaj.CheckOut  ="'.mysql_real_escape_string($checkOut).'", 
		smjestaj.OtkazivanjeSobe  ="'.mysql_real_escape_string($otkazivanjeSobe).'", 
		smjestaj.KrevetZaDjecu  ="'.mysql_real_escape_string($krevetZaDjecu).'", 
		smjestaj.KucniLjubimci  ="'.mysql_real_escape_string($kucniLjubimci).'", 
		smjestaj.KreditneKartice ="'.mysql_real_escape_string($kreditneKartice).'",
		smjestaj.ImgPath2 = "'.mysql_real_escape_string($newname2).'"
		
		where smjestaj.Id = '.mysql_real_escape_string($id);	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	
	
	public function UpdateSmjestaj13($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24,$tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname3, $newname4, $id)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE smjestaj SET 
		smjestaj.Restoran ="'.mysql_real_escape_string($restoran).'", 
		smjestaj.Recepcija24 ="'.mysql_real_escape_string($recepcija24).'", 
		smjestaj.Naslov ="'.mysql_real_escape_string($naziv).'", 
		smjestaj.Vrijeme = "NOW()",  
		smjestaj.KratakOpis ="'.mysql_real_escape_string($kratakopis).'", 
		smjestaj.DodatniKomentar ="'.mysql_real_escape_string($dodatniKomentar).'", 
		smjestaj.TipSmjestaja  ="'.mysql_real_escape_string($tipSmjestaja).'", 
		smjestaj.Bar ="'.mysql_real_escape_string($bar).'", 
		smjestaj.ZvucnaIzolacija ="'.mysql_real_escape_string($zvucnaIzolacija).'", 
		smjestaj.Tv ="'.mysql_real_escape_string($tv).'", 
		smjestaj.Grijanje ="'.mysql_real_escape_string($grijanje).'", 
		smjestaj.SobeNepusaci ="'.mysql_real_escape_string($sobeNepusaci).'", 
		smjestaj.ObiteljskeSobe ="'.mysql_real_escape_string($obiteljskeSobe).'", 
		smjestaj.Sef  ="'.mysql_real_escape_string($sef).'", 
		smjestaj.SkladistePrtljaga ="'.mysql_real_escape_string($skladistePrtljaga).'", 
		smjestaj.Klima ="'.mysql_real_escape_string($klima).'", 
		smjestaj.Sauna ="'.mysql_real_escape_string($sauna).'", 
		smjestaj.Fitnes ="'.mysql_real_escape_string($fitnes).'", 
		smjestaj.Solarij ="'.mysql_real_escape_string($solarij).'", 
		smjestaj.Wellnes ="'.mysql_real_escape_string($wellnes).'",
		smjestaj.Jacuzzi ="'.mysql_real_escape_string($jacuzzi).'", 
		smjestaj.TurskoKupatilo ="'.mysql_real_escape_string($turskoKupatilo).'", 
		smjestaj.Hammam ="'.mysql_real_escape_string($hammam).'", 
		smjestaj.ZatvoreniBazen ="'.mysql_real_escape_string($zatvoreniBazen).'", 
		smjestaj.BrojSoba  ="'.mysql_real_escape_string($brojSoba).'", 
		smjestaj.Jednokrevetne  ="'.mysql_real_escape_string($jednokrevetne).'", 
		smjestaj.CijenaJednokrevetnih  ="'.mysql_real_escape_string($cijenaJednokrevetnih).'", 
		smjestaj.Dvokrevetne  ="'.mysql_real_escape_string($dvokrevetne).'", 
		smjestaj.CijenaDvokrevetnih  ="'.mysql_real_escape_string($cijenaDvokrevetnih).'",
		smjestaj.DvokrevetneOdvojeno  ="'.mysql_real_escape_string($dvokrevetneOdvojeno).'", 
		smjestaj.Trokrevetne  ="'.mysql_real_escape_string($trokrevetne).'", 
		smjestaj.CijenaTrokrevetnih  ="'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
		smjestaj.Cetverokrevetne  ="'.mysql_real_escape_string($cetverokrevetne).'", 
		smjestaj.CijenaCetverokrevetnih  ="'.mysql_real_escape_string($cijenaCetverokrevetnih).'", 
		smjestaj.Apartmani  ="'.mysql_real_escape_string($apartmani).'", 
		smjestaj.CijenaApartmana  ="'.mysql_real_escape_string($cijenaApartmana).'", 
		smjestaj.PoslugaUSobu  ="'.mysql_real_escape_string($poslugaUSobu).'", 
		smjestaj.Veseraj  ="'.mysql_real_escape_string($veseraj).'", 
		smjestaj.UslugaPeglanja  ="'.mysql_real_escape_string($uslugaPeglanja).'", 
		smjestaj.RentACar  ="'.mysql_real_escape_string($rentACar).'", 
		smjestaj.FaxKopiranje  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.KonferencijskeSobe  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.PrevozOdDoZracneLuke  ="'.mysql_real_escape_string($prevozOdDoZracneLuke).'", 
		smjestaj.HemijskaCistiona  ="'.mysql_real_escape_string($hemijskaCistiona).'", 
		smjestaj.DorucakUSobi  ="'.mysql_real_escape_string($dorucakUSobi).'", 
		smjestaj.Mjenjacnica  ="'.mysql_real_escape_string($mjenjacnica).'", 
		smjestaj.Internet  ="'.mysql_real_escape_string($internet).'", 
		smjestaj.InternetPlacanje  ="'.mysql_real_escape_string($internetPlacanje).'", 
		smjestaj.ParkingUnutar  ="'.mysql_real_escape_string($parkingUnutar).'", 
		smjestaj.ParkingUblizini  ="'.mysql_real_escape_string($parkingUblizini).'", 
		smjestaj.CheckIn  ="'.mysql_real_escape_string($checkIn).'", 
		smjestaj.CheckOut  ="'.mysql_real_escape_string($checkOut).'", 
		smjestaj.OtkazivanjeSobe  ="'.mysql_real_escape_string($otkazivanjeSobe).'", 
		smjestaj.KrevetZaDjecu  ="'.mysql_real_escape_string($krevetZaDjecu).'", 
		smjestaj.KucniLjubimci  ="'.mysql_real_escape_string($kucniLjubimci).'", 
		smjestaj.KreditneKartice ="'.mysql_real_escape_string($kreditneKartice).'", 				
		smjestaj.ImgPath3 = "'.mysql_real_escape_string($newname3).'",
		smjestaj.ImgPath4 = "'.mysql_real_escape_string($newname4).'"
		
		where smjestaj.Id = '.mysql_real_escape_string($id);	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	
	
	public function UpdateSmjestaj14($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24,$tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname3, $id)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE smjestaj SET 
	smjestaj.Restoran ="'.mysql_real_escape_string($restoran).'", 
		smjestaj.Recepcija24 ="'.mysql_real_escape_string($recepcija24).'", 
		smjestaj.Naslov ="'.mysql_real_escape_string($naziv).'", 
		smjestaj.Vrijeme = "NOW()",  
		smjestaj.KratakOpis ="'.mysql_real_escape_string($kratakopis).'", 
		smjestaj.DodatniKomentar ="'.mysql_real_escape_string($dodatniKomentar).'", 
		smjestaj.TipSmjestaja  ="'.mysql_real_escape_string($tipSmjestaja).'", 
		smjestaj.Bar ="'.mysql_real_escape_string($bar).'", 
		smjestaj.ZvucnaIzolacija ="'.mysql_real_escape_string($zvucnaIzolacija).'", 
		smjestaj.Tv ="'.mysql_real_escape_string($tv).'", 
		smjestaj.Grijanje ="'.mysql_real_escape_string($grijanje).'", 
		smjestaj.SobeNepusaci ="'.mysql_real_escape_string($sobeNepusaci).'", 
		smjestaj.ObiteljskeSobe ="'.mysql_real_escape_string($obiteljskeSobe).'", 
		smjestaj.Sef  ="'.mysql_real_escape_string($sef).'", 
		smjestaj.SkladistePrtljaga ="'.mysql_real_escape_string($skladistePrtljaga).'", 
		smjestaj.Klima ="'.mysql_real_escape_string($klima).'", 
		smjestaj.Sauna ="'.mysql_real_escape_string($sauna).'", 
		smjestaj.Fitnes ="'.mysql_real_escape_string($fitnes).'", 
		smjestaj.Solarij ="'.mysql_real_escape_string($solarij).'", 
		smjestaj.Wellnes ="'.mysql_real_escape_string($wellnes).'",
		smjestaj.Jacuzzi ="'.mysql_real_escape_string($jacuzzi).'", 
		smjestaj.TurskoKupatilo ="'.mysql_real_escape_string($turskoKupatilo).'", 
		smjestaj.Hammam ="'.mysql_real_escape_string($hammam).'", 
		smjestaj.ZatvoreniBazen ="'.mysql_real_escape_string($zatvoreniBazen).'", 
		smjestaj.BrojSoba  ="'.mysql_real_escape_string($brojSoba).'", 
		smjestaj.Jednokrevetne  ="'.mysql_real_escape_string($jednokrevetne).'", 
		smjestaj.CijenaJednokrevetnih  ="'.mysql_real_escape_string($cijenaJednokrevetnih).'", 
		smjestaj.Dvokrevetne  ="'.mysql_real_escape_string($dvokrevetne).'", 
		smjestaj.CijenaDvokrevetnih  ="'.mysql_real_escape_string($cijenaDvokrevetnih).'",
		smjestaj.DvokrevetneOdvojeno  ="'.mysql_real_escape_string($dvokrevetneOdvojeno).'", 
		smjestaj.Trokrevetne  ="'.mysql_real_escape_string($trokrevetne).'", 
		smjestaj.CijenaTrokrevetnih  ="'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
		smjestaj.Cetverokrevetne  ="'.mysql_real_escape_string($cetverokrevetne).'", 
		smjestaj.CijenaCetverokrevetnih  ="'.mysql_real_escape_string($cijenaCetverokrevetnih).'", 
		smjestaj.Apartmani  ="'.mysql_real_escape_string($apartmani).'", 
		smjestaj.CijenaApartmana  ="'.mysql_real_escape_string($cijenaApartmana).'", 
		smjestaj.PoslugaUSobu  ="'.mysql_real_escape_string($poslugaUSobu).'", 
		smjestaj.Veseraj  ="'.mysql_real_escape_string($veseraj).'", 
		smjestaj.UslugaPeglanja  ="'.mysql_real_escape_string($uslugaPeglanja).'", 
		smjestaj.RentACar  ="'.mysql_real_escape_string($rentACar).'", 
		smjestaj.FaxKopiranje  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.KonferencijskeSobe  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.PrevozOdDoZracneLuke  ="'.mysql_real_escape_string($prevozOdDoZracneLuke).'", 
		smjestaj.HemijskaCistiona  ="'.mysql_real_escape_string($hemijskaCistiona).'", 
		smjestaj.DorucakUSobi  ="'.mysql_real_escape_string($dorucakUSobi).'", 
		smjestaj.Mjenjacnica  ="'.mysql_real_escape_string($mjenjacnica).'", 
		smjestaj.Internet  ="'.mysql_real_escape_string($internet).'", 
		smjestaj.InternetPlacanje  ="'.mysql_real_escape_string($internetPlacanje).'", 
		smjestaj.ParkingUnutar  ="'.mysql_real_escape_string($parkingUnutar).'", 
		smjestaj.ParkingUblizini  ="'.mysql_real_escape_string($parkingUblizini).'", 
		smjestaj.CheckIn  ="'.mysql_real_escape_string($checkIn).'", 
		smjestaj.CheckOut  ="'.mysql_real_escape_string($checkOut).'", 
		smjestaj.OtkazivanjeSobe  ="'.mysql_real_escape_string($otkazivanjeSobe).'", 
		smjestaj.KrevetZaDjecu  ="'.mysql_real_escape_string($krevetZaDjecu).'", 
		smjestaj.KucniLjubimci  ="'.mysql_real_escape_string($kucniLjubimci).'", 
		smjestaj.KreditneKartice ="'.mysql_real_escape_string($kreditneKartice).'", 
		smjestaj.ImgPath3 = "'.mysql_real_escape_string($newname3).'"
		
		where smjestaj.Id = '.mysql_real_escape_string($id);	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	
	
	public function UpdateSmjestaj15($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24,$tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $newname4, $id)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE smjestaj SET 
	smjestaj.Restoran ="'.mysql_real_escape_string($restoran).'", 
		smjestaj.Recepcija24 ="'.mysql_real_escape_string($recepcija24).'", 
		smjestaj.Naslov ="'.mysql_real_escape_string($naziv).'", 
		smjestaj.Vrijeme = "NOW()",  
		smjestaj.KratakOpis ="'.mysql_real_escape_string($kratakopis).'", 
		smjestaj.DodatniKomentar ="'.mysql_real_escape_string($dodatniKomentar).'", 
		smjestaj.TipSmjestaja  ="'.mysql_real_escape_string($tipSmjestaja).'", 
		smjestaj.Bar ="'.mysql_real_escape_string($bar).'", 
		smjestaj.ZvucnaIzolacija ="'.mysql_real_escape_string($zvucnaIzolacija).'", 
		smjestaj.Tv ="'.mysql_real_escape_string($tv).'", 
		smjestaj.Grijanje ="'.mysql_real_escape_string($grijanje).'", 
		smjestaj.SobeNepusaci ="'.mysql_real_escape_string($sobeNepusaci).'", 
		smjestaj.ObiteljskeSobe ="'.mysql_real_escape_string($obiteljskeSobe).'", 
		smjestaj.Sef  ="'.mysql_real_escape_string($sef).'", 
		smjestaj.SkladistePrtljaga ="'.mysql_real_escape_string($skladistePrtljaga).'", 
		smjestaj.Klima ="'.mysql_real_escape_string($klima).'", 
		smjestaj.Sauna ="'.mysql_real_escape_string($sauna).'", 
		smjestaj.Fitnes ="'.mysql_real_escape_string($fitnes).'", 
		smjestaj.Solarij ="'.mysql_real_escape_string($solarij).'", 
		smjestaj.Wellnes ="'.mysql_real_escape_string($wellnes).'",
		smjestaj.Jacuzzi ="'.mysql_real_escape_string($jacuzzi).'", 
		smjestaj.TurskoKupatilo ="'.mysql_real_escape_string($turskoKupatilo).'", 
		smjestaj.Hammam ="'.mysql_real_escape_string($hammam).'", 
		smjestaj.ZatvoreniBazen ="'.mysql_real_escape_string($zatvoreniBazen).'", 
		smjestaj.BrojSoba  ="'.mysql_real_escape_string($brojSoba).'", 
		smjestaj.Jednokrevetne  ="'.mysql_real_escape_string($jednokrevetne).'", 
		smjestaj.CijenaJednokrevetnih  ="'.mysql_real_escape_string($cijenaJednokrevetnih).'", 
		smjestaj.Dvokrevetne  ="'.mysql_real_escape_string($dvokrevetne).'", 
		smjestaj.CijenaDvokrevetnih  ="'.mysql_real_escape_string($cijenaDvokrevetnih).'",
		smjestaj.DvokrevetneOdvojeno  ="'.mysql_real_escape_string($dvokrevetneOdvojeno).'", 
		smjestaj.Trokrevetne  ="'.mysql_real_escape_string($trokrevetne).'", 
		smjestaj.CijenaTrokrevetnih  ="'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
		smjestaj.Cetverokrevetne  ="'.mysql_real_escape_string($cetverokrevetne).'", 
		smjestaj.CijenaCetverokrevetnih  ="'.mysql_real_escape_string($cijenaCetverokrevetnih).'", 
		smjestaj.Apartmani  ="'.mysql_real_escape_string($apartmani).'", 
		smjestaj.CijenaApartmana  ="'.mysql_real_escape_string($cijenaApartmana).'", 
		smjestaj.PoslugaUSobu  = "'.mysql_real_escape_string($poslugaUSobu).'", 
		smjestaj.Veseraj  ="'.mysql_real_escape_string($veseraj).'", 
		smjestaj.UslugaPeglanja  ="'.mysql_real_escape_string($uslugaPeglanja).'", 
		smjestaj.RentACar  ="'.mysql_real_escape_string($rentACar).'", 
		smjestaj.FaxKopiranje  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.KonferencijskeSobe  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.PrevozOdDoZracneLuke  ="'.mysql_real_escape_string($prevozOdDoZracneLuke).'", 
		smjestaj.HemijskaCistiona  ="'.mysql_real_escape_string($hemijskaCistiona).'", 
		smjestaj.DorucakUSobi  ="'.mysql_real_escape_string($dorucakUSobi).'", 
		smjestaj.Mjenjacnica  ="'.mysql_real_escape_string($mjenjacnica).'", 
		smjestaj.Internet  ="'.mysql_real_escape_string($internet).'", 
		smjestaj.InternetPlacanje  ="'.mysql_real_escape_string($internetPlacanje).'", 
		smjestaj.ParkingUnutar  ="'.mysql_real_escape_string($parkingUnutar).'", 
		smjestaj.ParkingUblizini  ="'.mysql_real_escape_string($parkingUblizini).'", 
		smjestaj.CheckIn  ="'.mysql_real_escape_string($checkIn).'", 
		smjestaj.CheckOut  ="'.mysql_real_escape_string($checkOut).'", 
		smjestaj.OtkazivanjeSobe  ="'.mysql_real_escape_string($otkazivanjeSobe).'", 
		smjestaj.KrevetZaDjecu  ="'.mysql_real_escape_string($krevetZaDjecu).'", 
		smjestaj.KucniLjubimci  ="'.mysql_real_escape_string($kucniLjubimci).'", 
		smjestaj.KreditneKartice ="'.mysql_real_escape_string($kreditneKartice).'", 		
		smjestaj.ImgPath4 = "'.mysql_real_escape_string($newname4).'"
		
		where smjestaj.Id = '.mysql_real_escape_string($id);	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	
	
	public function UpdateSmjestaj16($naziv, $kratakopis, $dodatniKomentar, $restoran, $recepcija24,$tipSmjestaja, $bar,	$zvucnaIzolacija, $tv, $grijanje, $sobeNepusaci, $obiteljskeSobe, $sef,	$skladistePrtljaga,	$klima,	$sauna,	$fitnes,
	$solarij, $wellnes,	$jacuzzi, $turskoKupatilo, $hammam,	$zatvoreniBazen, $brojSoba,	$jednokrevetne,	$cijenaJednokrevetnih, $dvokrevetne, $cijenaDvokrevetnih, $dvokrevetneOdvojeno, $trokrevetne, $cijenaTrokrevetnih, $cetverokrevetne, $cijenaCetverokrevetnih, $apartmani, $cijenaApartmana, $poslugaUSobu, $veseraj,	$uslugaPeglanja,
	$rentACar, $faxKopiranje, $konferencijskeSobe,	$prevozOdDoZracneLuke,	$hemijskaCistiona,	$dorucakUSobi,$mjenjacnica,
	$internet,	$internetPlacanje,	$parkingUnutar,	$parkingUblizini, $checkIn,	$checkOut,	$otkazivanjeSobe,$krevetZaDjecu,
	$kucniLjubimci,	$kreditneKartice, $id)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE smjestaj SET 
	smjestaj.Restoran ="'.mysql_real_escape_string($restoran).'", 
		smjestaj.Recepcija24 ="'.mysql_real_escape_string($recepcija24).'", 
		smjestaj.Naslov ="'.mysql_real_escape_string($naziv).'", 
		smjestaj.Vrijeme = "NOW()",  
		smjestaj.KratakOpis ="'.mysql_real_escape_string($kratakopis).'", 
		smjestaj.DodatniKomentar ="'.mysql_real_escape_string($dodatniKomentar).'", 
		smjestaj.TipSmjestaja  ="'.mysql_real_escape_string($tipSmjestaja).'", 
		smjestaj.Bar ="'.mysql_real_escape_string($bar).'", 
		smjestaj.ZvucnaIzolacija ="'.mysql_real_escape_string($zvucnaIzolacija).'", 
		smjestaj.Tv ="'.mysql_real_escape_string($tv).'", 
		smjestaj.Grijanje ="'.mysql_real_escape_string($grijanje).'", 
		smjestaj.SobeNepusaci ="'.mysql_real_escape_string($sobeNepusaci).'", 
		smjestaj.ObiteljskeSobe ="'.mysql_real_escape_string($obiteljskeSobe).'", 
		smjestaj.Sef  ="'.mysql_real_escape_string($sef).'", 
		smjestaj.SkladistePrtljaga ="'.mysql_real_escape_string($skladistePrtljaga).'", 
		smjestaj.Klima ="'.mysql_real_escape_string($klima).'", 
		smjestaj.Sauna ="'.mysql_real_escape_string($sauna).'", 
		smjestaj.Fitnes ="'.mysql_real_escape_string($fitnes).'", 
		smjestaj.Solarij ="'.mysql_real_escape_string($solarij).'", 
		smjestaj.Wellnes ="'.mysql_real_escape_string($wellnes).'",
		smjestaj.Jacuzzi ="'.mysql_real_escape_string($jacuzzi).'", 
		smjestaj.TurskoKupatilo ="'.mysql_real_escape_string($turskoKupatilo).'", 
		smjestaj.Hammam ="'.mysql_real_escape_string($hammam).'", 
		smjestaj.ZatvoreniBazen ="'.mysql_real_escape_string($zatvoreniBazen).'", 
		smjestaj.BrojSoba  ="'.mysql_real_escape_string($brojSoba).'", 
		smjestaj.Jednokrevetne  ="'.mysql_real_escape_string($jednokrevetne).'", 
		smjestaj.CijenaJednokrevetnih  ="'.mysql_real_escape_string($cijenaJednokrevetnih).'", 
		smjestaj.Dvokrevetne  ="'.mysql_real_escape_string($dvokrevetne).'", 
		smjestaj.CijenaDvokrevetnih  ="'.mysql_real_escape_string($cijenaDvokrevetnih).'",
		smjestaj.DvokrevetneOdvojeno  ="'.mysql_real_escape_string($dvokrevetneOdvojeno).'", 
		smjestaj.Trokrevetne  ="'.mysql_real_escape_string($trokrevetne).'", 
		smjestaj.CijenaTrokrevetnih  ="'.mysql_real_escape_string($cijenaTrokrevetnih).'", 
		smjestaj.Cetverokrevetne  ="'.mysql_real_escape_string($cetverokrevetne).'", 
		smjestaj.CijenaCetverokrevetnih  ="'.mysql_real_escape_string($cijenaCetverokrevetnih).'", 
		smjestaj.Apartmani  ="'.mysql_real_escape_string($apartmani).'", 
		smjestaj.CijenaApartmana  ="'.mysql_real_escape_string($cijenaApartmana).'", 
		smjestaj.PoslugaUSobu  ="'.mysql_real_escape_string($poslugaUSobu).'", 
		smjestaj.Veseraj  ="'.mysql_real_escape_string($veseraj).'", 
		smjestaj.UslugaPeglanja  ="'.mysql_real_escape_string($uslugaPeglanja).'", 
		smjestaj.RentACar  ="'.mysql_real_escape_string($rentACar).'", 
		smjestaj.FaxKopiranje  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.KonferencijskeSobe  ="'.mysql_real_escape_string($faxKopiranje).'", 
		smjestaj.PrevozOdDoZracneLuke  ="'.mysql_real_escape_string($prevozOdDoZracneLuke).'", 
		smjestaj.HemijskaCistiona  ="'.mysql_real_escape_string($hemijskaCistiona).'", 
		smjestaj.DorucakUSobi  ="'.mysql_real_escape_string($dorucakUSobi).'", 
		smjestaj.Mjenjacnica  ="'.mysql_real_escape_string($mjenjacnica).'", 
		smjestaj.Internet  ="'.mysql_real_escape_string($internet).'", 
		smjestaj.InternetPlacanje  ="'.mysql_real_escape_string($internetPlacanje).'", 
		smjestaj.ParkingUnutar  ="'.mysql_real_escape_string($parkingUnutar).'", 
		smjestaj.ParkingUblizini  ="'.mysql_real_escape_string($parkingUblizini).'", 
		smjestaj.CheckIn  ="'.mysql_real_escape_string($checkIn).'", 
		smjestaj.CheckOut  ="'.mysql_real_escape_string($checkOut).'", 
		smjestaj.OtkazivanjeSobe  ="'.mysql_real_escape_string($otkazivanjeSobe).'", 
		smjestaj.KrevetZaDjecu  ="'.mysql_real_escape_string($krevetZaDjecu).'", 
		smjestaj.KucniLjubimci  ="'.mysql_real_escape_string($kucniLjubimci).'", 
		smjestaj.KreditneKartice ="'.mysql_real_escape_string($kreditneKartice).'"
		
		where smjestaj.Id = '.mysql_real_escape_string($id);	
		
		executeQuery('SET NAMES UTF8');	
		
		executeQuery($query);		
	}	
}

?>