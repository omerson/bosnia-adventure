<?php

require_once(SHARED_PATH.'database.php');

class Index
{
	public function GetOnama()
	{		
		$connection = db_connect();	
		
		$query = 'SELECT * FROM onama';	
		executeQuery('SET NAMES UTF8');	   
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
	}
	
	public function UnesiPrijavu($ime, $prezime, $email, $tipUsluge, $usluga, $uslugaId, $periodod, $perioddo, $brojPrijatelja, $nepusaci, $ishrana, $opisIshrana, $alergicar, $opisAlergije, $zelje, $opisZelje, $zeljeneDestinacije)
	{
		$connection = db_connect();				
		$query = 'INSERT INTO  Prijave (Vrijeme, Tip, TipId, Usluga, Email, Ime, Prezime, Polazak, Povratak, Nepusac, Alergicar, AlergijaOpis, Ishrana, IshranaOpis, Zelje, ZeljeOpis, DestinacijeOpis, BrojPrijatelja)
				  VALUES (NOW(), "'.mysql_real_escape_string($tipUsluge).'", "'.mysql_real_escape_string($uslugaId).'", "'.mysql_real_escape_string($usluga).'", "'.mysql_real_escape_string($email).'", "'.mysql_real_escape_string($ime).'", "'.mysql_real_escape_string($prezime).'", "'.mysql_real_escape_string($periodod).'", "'.mysql_real_escape_string($perioddo).'", "'.mysql_real_escape_string($nepusaci).'", "'.mysql_real_escape_string($alergicar).'", "'.mysql_real_escape_string($opisAlergije).'", "'.mysql_real_escape_string($ishrana).'", "'.mysql_real_escape_string($opisIshrana).'", "'.mysql_real_escape_string($zelje).'", "'.mysql_real_escape_string($opisZelje).'", "'.mysql_real_escape_string($zeljeneDestinacije).'", "'.mysql_real_escape_string($brojPrijatelja).'")';
					  
		executeQuery('SET NAMES UTF8');
		executeQuery($query);
	}
	
	public function SendPoruka($sadrzaj, $email)
	{
		$connection = db_connect();				
		$query = 'INSERT INTO  poruka (Vrijeme, Sadrzaj, Email)
				  VALUES (NOW(), "'.mysql_real_escape_string($sadrzaj).'", "'.mysql_real_escape_string($email).'")';
					  
		executeQuery('SET NAMES UTF8');
		executeQuery($query);
	}
	
	public function GetAllPoruke($page = 1, $perPage){
	
		$connection = db_connect();	
		if($page != 0)
			$page--;
		
		$skip = (int)($page * $perPage);		
		
		$query = 'SELECT * FROM poruka Order by Id DESC LIMIT '.mysql_real_escape_string($skip).', '.mysql_real_escape_string($perPage).'';							 
		executeQuery('SET NAMES UTF8');		
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $result;	
	}
	
	
	public function GetAllPrijave($page = 1, $perPage){
	
		$connection = db_connect();	
		if($page != 0)
			$page--;
		
		$skip = (int)($page * $perPage);		
		
		$query = 'SELECT * FROM Prijave Order by Id DESC LIMIT '.mysql_real_escape_string($skip).', '.mysql_real_escape_string($perPage).'';							 
		executeQuery('SET NAMES UTF8');		
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $result;	
	}
	
	
	public function GetUslugaId($tip, $name){
	
		$connection = db_connect();	
		
		$query = 'Select Id from  '.mysql_real_escape_string($tip).' where Naslov = "'.mysql_real_escape_string($name).'" ';	
									 
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		$row = mysql_fetch_array($result);	
		if(isEmpty($result))
		{
			return false;
		}		
		//return $result;
		return $row [0];	
	}
	
	
	public function GetPorukeBroj(){
	
		$connection = db_connect();	
		
		$query = 'Select COUNT(Id) from poruka';							 
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		$row = mysql_fetch_array($result);	
		if(isEmpty($result))
		{
			return false;
		}		
			
		return $row [0];	
	}
	
	
	public function GetPrijaveBroj(){
	
		$connection = db_connect();	
		
		$query = 'Select COUNT(Id) from Prijave';							 
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		$row = mysql_fetch_array($result);	
		if(isEmpty($result))
		{
			return false;
		}		
			
		return $row [0];	
	}
	
	public function GetPoruka($selector)
	{	
		$connection = db_connect();			
		
		$query = 'SELECT *FROM poruka WHERE poruka.Id = "'.mysql_real_escape_string($selector).'"';
		
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
	}
	
	
	public function GetPrijava($selector)
	{	
		$connection = db_connect();			
		
		$query = 'SELECT *FROM Prijave WHERE Prijave.Id = "'.mysql_real_escape_string($selector).'"';
		
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
	}
	
	
	public function SetOnama($naslov, $onamaContent, $imgPath)
	{
		
		$connection = db_connect();				
		$query = 'UPDATE onama 
				SET Naslov = "'.mysql_real_escape_string($naslov).'",
			    Vrijeme = NOW(), 
				Sadrzaj = "'.mysql_real_escape_string($onamaContent).'", 
				ImgPath = "'.mysql_real_escape_string($imgPath).'"';
					  
		executeQuery('SET NAMES UTF8');
		executeQuery($query);
	}

	
	public function GetPravilnik()
	{		
		$connection = db_connect();	
		
		$query = 'SELECT * FROM pravilnik';	
		
		executeQuery('SET NAMES UTF8');	   
		$result = executeQuery($query);
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
	}

	
	public function SetPravilnik($naslov, $onamaContent, $imgPath)
	{		
		$connection = db_connect();				
		$query = 'UPDATE pravilnik 
				SET Naslov = "'.mysql_real_escape_string($naslov).'",
			    Vrijeme = NOW(), 
				Sadrzaj = "'.mysql_real_escape_string($onamaContent).'", 
				ImgPath = "'.mysql_real_escape_string($imgPath).'"';
					  
		executeQuery('SET NAMES UTF8');
		executeQuery($query);
	}
	
	
	public function GetSigurnost()
	{		
		$connection = db_connect();	
		
		$query = 'SELECT * FROM sigurnost';	
		executeQuery('SET NAMES UTF8');	   
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
	}
	
	public function GetZahvalnica()
	{		
		$connection = db_connect();	
		
		$query = 'SELECT * FROM zahvalnica';	
		executeQuery('SET NAMES UTF8');	   
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
	}
	
	
	public function GetKontakt(){
		
		$connection = db_connect();	
		
		$query = 'SELECT * FROM kontakt';	
		executeQuery('SET NAMES UTF8');	   
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;					
	}
	
	public function GetForUsluge(){
		
		$connection = db_connect();	
		
		$query = 'SELECT * FROM naseuslugeImg';	
		executeQuery('SET NAMES UTF8');	   
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;					
	}
	
	public function GetAvanturaNumber(){
	
		$connection = db_connect();			
		
		$query = 'Select COUNT(Id) from avantura';							 
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		$row = mysql_fetch_array($result);		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $row [0];	
	}
	
	public function GetKulturaNumber(){
	
		$connection = db_connect();			
		
		$query = 'Select COUNT(Id) from kultura';							 
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		$row = mysql_fetch_array($result);		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $row [0];	
	}
	
	public function GetCityNumber(){
	
		$connection = db_connect();			
		
		$query = 'Select COUNT(Id) from city';							 
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		$row = mysql_fetch_array($result);		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $row [0];	
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
	
	public function GetRentNumber(){
	
		$connection = db_connect();			
		
		$query = 'Select COUNT(Id) from rentacar';							 
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		$row = mysql_fetch_array($result);		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $row [0];	
	}
	
	public function GetKombinacijaNumber(){
	
		$connection = db_connect();			
		
		$query = 'Select COUNT(Id) from kombinacija';							 
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		$row = mysql_fetch_array($result);		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $row [0];	
	}

	
	public function GetRezervacijeNumber(){
	
		$connection = db_connect();			
		
		$query = 'select COUNT(Id) from rezervacije';							 
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		$row = mysql_fetch_array($result);		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $row [0];	
	}
	
	public function GetPosebnaPonudaId($id){
	
		$connection = db_connect();			
		
		if($id == 1)
			$query = 'select PonudaId from posebnaponuda1';							 
		else
			$query = 'select PonudaId from posebnaponuda2';	
			
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		$row = mysql_fetch_array($result);		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $row [0];	
	}
	
	public function GetPosebnaAvantura($id){
	
		$connection = db_connect();			
		
		$query = 'SELECT *FROM avantura WHERE avantura.Id = "'.mysql_real_escape_string($id).'"';
		
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
		
	}
	
	public function GetPosebnaKultura($id){
	
		$connection = db_connect();			
		
		$query = 'SELECT *FROM smjestaj WHERE smjestaj.Id = "'.mysql_real_escape_string($id).'"';
		
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
		
	}
	
	public function SetPosebnaponuda($ponudaId, $id){
		$connection = db_connect();
		
		if($ponudaId == 1)
			$query = 'UPDATE posebnaponuda1 SET posebnaponuda1.PonudaId = "'.mysql_real_escape_string($id).'"';							 
		else
			$query = 'UPDATE posebnaponuda2 SET posebnaponuda2.PonudaId = "'.mysql_real_escape_string($id).'"';	
					 
		executeQuery('SET NAMES UTF8');		
		executeQuery($query);					
	}		
	
	
	public function InsertPosebnaponuda($ponudaId, $id){
		$connection = db_connect();
		
		if($ponudaId == 1)
			$query = 'INSERT INTO posebnaponuda1 (PonudaId)
						VALUES ( "'.mysql_real_escape_string($id).'")';							 
		else
			$query = 'INSERT INTO posebnaponuda2 (PonudaId)
						VALUES ( "'.mysql_real_escape_string($id).'")';	
					 
		executeQuery('SET NAMES UTF8');		
		executeQuery($query);					
	}	
	
	
	public function GetAllAvantura($page = 1, $perPage){
	
		$connection = db_connect();	
		if($page != 0)
			$page--;
		
		$skip = (int)($page * $perPage);		
		
		$query = 'SELECT * FROM avantura Order by Id DESC LIMIT '.$skip.', '.$perPage.'';							 
		executeQuery('SET NAMES UTF8');		
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $result;	
	}
	
	
	public function GetAllKultura($page = 1, $perPage){
	
		$connection = db_connect();	
		if($page != 0)
			$page--;
		
		$skip = (int)($page * $perPage);		
		
		$query = 'SELECT * FROM kultura Order by Id DESC LIMIT '.$skip.', '.$perPage.'';							 
		executeQuery('SET NAMES UTF8');		
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $result;	
	}
	
	public function GetAllSmjestaj($page = 1, $perPage){
	
		$connection = db_connect();	
		if($page != 0)
			$page--;
		
		$skip = (int)($page * $perPage);		
		
		$query = 'SELECT * FROM smjestaj Order by Id DESC LIMIT '.$skip.', '.$perPage.'';							 
		executeQuery('SET NAMES UTF8');		
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $result;	
	}
	
	
	public function GetIzdvojenaPonudaId(){
	
		$connection = db_connect();			
				
		$query = 'select PonudaId from izdvojenaponuda';							 
			
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		$row = mysql_fetch_array($result);		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $row [0];	
	}
	
	
	public function GetAllKombinacija($page = 1, $perPage){
	
		$connection = db_connect();	
		if($page != 0)
			$page--;
		
		$skip = (int)($page * $perPage);		
		
		$query = 'SELECT * FROM kombinacija Order by Id DESC LIMIT '.$skip.', '.$perPage.'';							 
		executeQuery('SET NAMES UTF8');		
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $result;	
	}
	
	public function SetIzdvojenaponuda($id){
		$connection = db_connect();
		
		$query = 'UPDATE izdvojenaponuda SET izdvojenaponuda.PonudaId = "'.mysql_real_escape_string($id).'"';		
		executeQuery('SET NAMES UTF8');		
		executeQuery($query);					
	}
	
	public function InsertIzdvojenaponuda($id){
		$connection = db_connect();
		
		$query = 'INSERT INTO izdvojenaponuda (PonudaId)
				VALUES ( "'.mysql_real_escape_string($id).'")';
		executeQuery('SET NAMES UTF8');		
		executeQuery($query);					
	}
	
	
	public function GetPosebnaKombinacija($selector)
	{
		$connection = db_connect();			
		
		$query = 'SELECT *FROM kombinacija WHERE kombinacija.Id = "'.mysql_real_escape_string($selector).'"';
		
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
	}	
	
	public function UpdateSigurnost1($sadrzaj, $imagePath1, $imagePath2, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE sigurnost SET 
		sigurnost.Vrijeme ="NOW()", 
		sigurnost.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		sigurnost.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		sigurnost.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		sigurnost.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where sigurnost.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	
	public function UpdateSigurnost2($sadrzaj, $imagePath1, $imagePath3,$selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE sigurnost SET 
		sigurnost.Vrijeme ="NOW()", 
		sigurnost.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		sigurnost.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
	    sigurnost.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where sigurnost.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateSigurnost3($sadrzaj, $imagePath1, $imagePath2, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE sigurnost SET 
		sigurnost.Vrijeme ="NOW()", 
		sigurnost.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		sigurnost.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		sigurnost.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'"
		
		where sigurnost.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateSigurnost4($sadrzaj, $imagePath1, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE sigurnost SET 
		sigurnost.Vrijeme ="NOW()", 
		sigurnost.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 		
		sigurnost.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'"
		
		where sigurnost.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateSigurnost5($sadrzaj, $imagePath2, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE sigurnost SET 
		sigurnost.Vrijeme ="NOW()", 
		sigurnost.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
	    sigurnost.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		sigurnost.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where sigurnost.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateSigurnost6($sadrzaj, $imagePath2, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE sigurnost SET 
		sigurnost.Vrijeme ="NOW()", 
		sigurnost.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		sigurnost.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'"
		
		where sigurnost.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateSigurnost7($sadrzaj, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE sigurnost SET 
		sigurnost.Vrijeme ="NOW()", 
		sigurnost.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		sigurnost.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where sigurnost.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateSigurnost8($sadrzaj, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE sigurnost SET 	
		sigurnost.Vrijeme ="NOW()", 
		sigurnost.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'"	
		
		where sigurnost.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	



	public function UpdateZahvalnica1($sadrzaj, $imagePath1, $imagePath2, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE zahvalnica SET 
		zahvalnica.Vrijeme ="NOW()", 
		zahvalnica.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		zahvalnica.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		zahvalnica.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		zahvalnica.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where zahvalnica.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	
	public function UpdateZahvalnica2($sadrzaj, $imagePath1, $imagePath3,$selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE zahvalnica SET 
		zahvalnica.Vrijeme ="NOW()", 
		zahvalnica.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		zahvalnica.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
	    zahvalnica.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where zahvalnica.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateZahvalnica3($sadrzaj, $imagePath1, $imagePath2, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE zahvalnica SET 
		zahvalnica.Vrijeme ="NOW()", 
		zahvalnica.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		zahvalnica.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		zahvalnica.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'"
		
		where zahvalnica.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateZahvalnica4($sadrzaj, $imagePath1, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE zahvalnica SET 
		zahvalnica.Vrijeme ="NOW()", 
		zahvalnica.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 		
		zahvalnica.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'"
		
		where zahvalnica.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateZahvalnica5($sadrzaj, $imagePath2, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE zahvalnica SET 
		zahvalnica.Vrijeme ="NOW()", 
		zahvalnica.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
	    zahvalnica.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		zahvalnica.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where zahvalnica.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateZahvalnica6($sadrzaj, $imagePath2, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE zahvalnica SET 
		zahvalnica.Vrijeme ="NOW()", 
		zahvalnica.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		zahvalnica.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'"
		
		where zahvalnica.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateZahvalnica7($sadrzaj, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE zahvalnica SET 
		zahvalnica.Vrijeme ="NOW()", 
		zahvalnica.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		zahvalnica.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where zahvalnica.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateZahvalnica8($sadrzaj, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE zahvalnica SET 	
		zahvalnica.Vrijeme ="NOW()", 
		zahvalnica.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'"	
		
		where zahvalnica.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	
	
	
	
	public function UpdateOnama1($sadrzaj, $imagePath1, $imagePath2, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE onama SET 
		onama.Vrijeme ="NOW()", 
		onama.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		onama.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		onama.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		onama.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where onama.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	
	public function UpdateOnama2($sadrzaj, $imagePath1, $imagePath3,$selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE onama SET 
		onama.Vrijeme ="NOW()", 
		onama.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		onama.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
	    onama.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where onama.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateOnama3($sadrzaj, $imagePath1, $imagePath2, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE onama SET 
		onama.Vrijeme ="NOW()", 
		onama.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		onama.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		onama.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'"
		
		where onama.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateOnama4($sadrzaj, $imagePath1, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE onama SET 
		onama.Vrijeme ="NOW()", 
		onama.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 		
		onama.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'"
		
		where onama.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateOnama5($sadrzaj, $imagePath2, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE onama SET 
		onama.Vrijeme ="NOW()", 
		onama.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
	    onama.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		onama.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where onama.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateOnama6($sadrzaj, $imagePath2, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE onama SET 
		onama.Vrijeme ="NOW()", 
		onama.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		onama.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'"
		
		where onama.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateOnama7($sadrzaj, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE onama SET 
		onama.Vrijeme ="NOW()", 
		onama.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		onama.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where onama.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateOnama8($sadrzaj, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE onama SET 	
		onama.Vrijeme ="NOW()", 
		onama.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'"	
		
		where onama.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	
	
	
	public function UpdateKontakt1($adresa, $telefon, $email, $facebook, $twitter, $imagePath1, $imagePath2, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kontakt SET 		
		kontakt.adresa ="'.mysql_real_escape_string($adresa).'", 
		kontakt.Vrijeme ="NOW()", 
		kontakt.telefon ="'.mysql_real_escape_string($telefon).'", 
		kontakt.email ="'.mysql_real_escape_string($email).'", 
		kontakt.facebook ="'.mysql_real_escape_string($facebook).'", 
		kontakt.twitter ="'.mysql_real_escape_string($twitter).'", 
		kontakt.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		kontakt.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		kontakt.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where kontakt.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	
	public function UpdateKontakt2($adresa, $telefon, $email, $facebook, $twitter, $imagePath1, $imagePath3,$selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kontakt SET 
		kontakt.adresa ="'.mysql_real_escape_string($adresa).'", 
		kontakt.Vrijeme ="NOW()", 
		kontakt.telefon ="'.mysql_real_escape_string($telefon).'", 
		kontakt.email ="'.mysql_real_escape_string($email).'", 
		kontakt.facebook ="'.mysql_real_escape_string($facebook).'", 
		kontakt.twitter ="'.mysql_real_escape_string($twitter).'", 
		kontakt.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
	    kontakt.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where kontakt.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKontakt3($adresa, $telefon, $email, $facebook, $twitter, $imagePath1, $imagePath2, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kontakt SET 
		kontakt.adresa ="'.mysql_real_escape_string($adresa).'", 
		kontakt.Vrijeme ="NOW()", 
		kontakt.telefon ="'.mysql_real_escape_string($telefon).'", 
		kontakt.email ="'.mysql_real_escape_string($email).'", 
		kontakt.facebook ="'.mysql_real_escape_string($facebook).'", 
		kontakt.twitter ="'.mysql_real_escape_string($twitter).'", 
		kontakt.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		kontakt.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'"
		
		where kontakt.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKontakt4($adresa, $telefon, $email, $facebook, $twitter, $imagePath1, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kontakt SET 
		kontakt.adresa ="'.mysql_real_escape_string($adresa).'", 
		kontakt.Vrijeme ="NOW()", 
		kontakt.telefon ="'.mysql_real_escape_string($telefon).'", 
		kontakt.email ="'.mysql_real_escape_string($email).'", 
		kontakt.facebook ="'.mysql_real_escape_string($facebook).'", 
		kontakt.twitter ="'.mysql_real_escape_string($twitter).'", 
		kontakt.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'"
		
		where kontakt.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKontakt5($adresa, $telefon, $email, $facebook, $twitter, $imagePath2, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kontakt SET 
		kontakt.adresa ="'.mysql_real_escape_string($adresa).'", 
		kontakt.Vrijeme ="NOW()", 
		kontakt.telefon ="'.mysql_real_escape_string($telefon).'", 
		kontakt.email ="'.mysql_real_escape_string($email).'", 
		kontakt.facebook ="'.mysql_real_escape_string($facebook).'", 
		kontakt.twitter ="'.mysql_real_escape_string($twitter).'", 
	    kontakt.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		kontakt.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where kontakt.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKontakt6($adresa, $telefon, $email, $facebook, $twitter, $imagePath2, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kontakt SET 
		kontakt.adresa ="'.mysql_real_escape_string($adresa).'", 
		kontakt.Vrijeme ="NOW()", 
		kontakt.telefon ="'.mysql_real_escape_string($telefon).'", 
		kontakt.email ="'.mysql_real_escape_string($email).'", 
		kontakt.facebook ="'.mysql_real_escape_string($facebook).'", 
		kontakt.twitter ="'.mysql_real_escape_string($twitter).'", 
		kontakt.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'"
		
		where kontakt.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKontakt7($adresa, $telefon, $email, $facebook, $twitter, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kontakt SET 
		kontakt.adresa ="'.mysql_real_escape_string($adresa).'", 
		kontakt.Vrijeme ="NOW()", 
		kontakt.telefon ="'.mysql_real_escape_string($telefon).'", 
		kontakt.email ="'.mysql_real_escape_string($email).'", 
		kontakt.facebook ="'.mysql_real_escape_string($facebook).'", 
		kontakt.twitter ="'.mysql_real_escape_string($twitter).'", 
		kontakt.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where kontakt.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKontakt8($adresa, $telefon, $email, $facebook, $twitter, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kontakt SET 	
		kontakt.adresa ="'.mysql_real_escape_string($adresa).'", 
		kontakt.Vrijeme ="NOW()", 
		kontakt.telefon ="'.mysql_real_escape_string($telefon).'", 
		kontakt.email ="'.mysql_real_escape_string($email).'", 
		kontakt.facebook ="'.mysql_real_escape_string($facebook).'", 
		kontakt.twitter ="'.mysql_real_escape_string($twitter).'"
		
		where kontakt.Id = "'.mysql_real_escape_string($selector).'"';			
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	
	
	
	public function GetAvantura(){
		
		$connection = db_connect();			
		
		$query = 'SELECT * FROM avantura ORDER BY Id DESC LIMIT 1';			
		
		executeQuery('SET NAMES UTF8');	
		$result = executeQuery($query);
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;	
	}
	
	public function GetKultura(){
		
		$connection = db_connect();			
		
		$query = 'SELECT * FROM kultura ORDER BY Id DESC LIMIT 1';			
		
		executeQuery('SET NAMES UTF8');	
		$result = executeQuery($query);
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;		
	}
	
	public function GetCitibreaks(){
		
		$connection = db_connect();			
		
		$query = 'SELECT * FROM city ORDER BY Id DESC LIMIT 1';			
		
		executeQuery('SET NAMES UTF8');	
		$result = executeQuery($query);
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;		
	}
	
	public function GetSmjestaj(){
		
		$connection = db_connect();			
		
		$query = 'SELECT * FROM smjestaj ORDER BY Id DESC LIMIT 1';			
		
		executeQuery('SET NAMES UTF8');	
		$result = executeQuery($query);
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;	
	}
	
	public function GetRentacar(){
		
		$connection = db_connect();			
		
		$query = 'SELECT * FROM rentacar ORDER BY Id DESC LIMIT 1';			
		
		executeQuery('SET NAMES UTF8');	
		$result = executeQuery($query);
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;		
	}
	
	public function GetKombinacija(){
		
		$connection = db_connect();			
		
		$query = 'SELECT * FROM kombinacija ORDER BY Id DESC LIMIT 1';			
		
		executeQuery('SET NAMES UTF8');	
		$result = executeQuery($query);
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;		
	}
	
	public function GetRezervacije(){
		
		$connection = db_connect();			
		
		$query = 'SELECT * FROM rezervacije ORDER BY Id DESC LIMIT 1';			
		
		executeQuery('SET NAMES UTF8');	
		$result = executeQuery($query);
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;	
	}
	
	public function Search($page = 1, $perPage, $searchText){
		
		$connection = db_connect();	
		if($page != 0)
			$page--;
		
		$skip = (int)($page * $perPage);		
		
		$query = 'SELECT Id, Naslov, Sadrzaj, ImgPath1, ImgPath2, ImgPath3, "avantura" as tbl 
				  FROM avantura as a 
				  where a.Naslov like "%'.mysql_real_escape_string($searchText).'%" or
				  a.Sadrzaj like "%'.mysql_real_escape_string($searchText).'%" union all
				  
				  SELECT Id, Naslov, Sadrzaj, ImgPath1, ImgPath2, ImgPath3, "kultura"  
				  FROM kultura as k 
				  where k.Naslov like "%'.mysql_real_escape_string($searchText).'%" or
				  k.Sadrzaj like "%'.mysql_real_escape_string($searchText).'%" union all
				  
				  SELECT Id, Naslov, Sadrzaj, ImgPath1, ImgPath2, ImgPath3, "city" as tbl 
				  FROM city as c 
				  where c.Naslov like "%'.mysql_real_escape_string($searchText).'%" or
				  c.Sadrzaj like "%'.mysql_real_escape_string($searchText).'%" union all
				  
				  SELECT Id, Naslov, KratakOpis, ImgPath1, ImgPath2, ImgPath3, "smjestaj" as tbl 
				  FROM smjestaj as c 
				  where c.Naslov like "%'.mysql_real_escape_string($searchText).'%" or 
				  c.KratakOpis like "%'.mysql_real_escape_string($searchText).'%" union all 
				  
				  SELECT Id, Naslov, Sadrzaj, ImgPath1, ImgPath2, ImgPath3, "rentacar" as tbl
				  FROM rentacar as r 
				  where r.Naslov like "%'.mysql_real_escape_string($searchText).'%" or
				  r.Sadrzaj like "%'.mysql_real_escape_string($searchText).'%" union all
				  
				  SELECT Id, Naslov, Sadrzaj, ImgPath1, ImgPath2, ImgPath3, "kombinacija" as tbl 
				  FROM kombinacija as k 
				  where k.Naslov like "%'.mysql_real_escape_string($searchText).'%" or
				  k.Sadrzaj like "%'.mysql_real_escape_string($searchText).'%" 
				  
				  Order by Id DESC LIMIT '.$skip.', '.$perPage;					 
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );				
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $result;		
	}
	
	
	public function GetAvanturaById($selector)
	{
		$connection = db_connect();			
		
		$query = 'SELECT *FROM avantura WHERE avantura.Id = "'.mysql_real_escape_string($selector).'"';
		
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
	}
	
	public function GetCitybreaksById($selector)
	{
		$connection = db_connect();			
		
		$query = 'SELECT *FROM city WHERE city.Id = "'.mysql_real_escape_string($selector).'"';
		
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
	}
	
	public function GetKulturaById($selector)
	{
		$connection = db_connect();			
		
		$query = 'SELECT *FROM kultura WHERE kultura.Id = "'.mysql_real_escape_string($selector).'"';
		
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
	}
	
	
	public function GetSmjestajById($selector)
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
	
	public function GetKombinacijaById($selector)
	{
		$connection = db_connect();			
		
		$query = 'SELECT *FROM kombinacija WHERE kombinacija.Id = "'.mysql_real_escape_string($selector).'"';
		
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
	}
	
	
	public function GetRezervacijeById($selector)
	{
		$connection = db_connect();			
		
		$query = 'SELECT *FROM rezervacije WHERE rezervacije.Id = "'.mysql_real_escape_string($selector).'"';
		
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
	}
	
	
	public function GetRentacarById($selector)
	{
		$connection = db_connect();			
		
		$query = 'SELECT *FROM rentacar WHERE rentacar.Id = "'.mysql_real_escape_string($selector).'"';
		
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
	}
	
	
}

?>