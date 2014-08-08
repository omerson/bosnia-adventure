<?php

require_once(SHARED_PATH.'database.php');

class Kultura
{	
	public function UnesiKulturu($naslov, $sadrzaj, $img1, $img2, $img3, $polazak, $povratak){
		
		$connection = db_connect();			
		
		$query = 'INSERT INTO kultura (Naslov, Vrijeme, Sadrzaj, ImgPath1, ImgPath2, ImgPath3, Polazak, Dolazak)
				  VALUES ("'.mysql_real_escape_string($naslov).'", 
				             NOW(), 
							 "'.mysql_real_escape_string($sadrzaj).'",  
							 "'.mysql_real_escape_string($img1).'",  
							 "'.mysql_real_escape_string($img2).'",  
							 "'.mysql_real_escape_string($img3).'",  
							 "'.mysql_real_escape_string($polazak).'", 
							 "'.mysql_real_escape_string($povratak).'" )';
		
		executeQuery('SET NAMES UTF8');		
		executeQuery($query );			
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
	
	public function GetImages($id){
		
		$connection = db_connect();	
		
		$query = 'SELECT * FROM slike WHERE TipId = '.mysql_real_escape_string($id).' AND Tip = "kultura"';							 
		executeQuery('SET NAMES UTF8');	
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $result;	
		
	}
	
	public function GetKulturaImagesNumber(){
	
		$connection = db_connect();	
		
		$query = 'Select COUNT(Id) from slike where Tip = "kultura"';							 
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
	
	public function GetKultura($selector)
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
	
	public function DeleteKultura($selector)
	{
		$connection = db_connect();			
		
		$query = 'delete FROM kultura where kultura.Id = "'.mysql_real_escape_string($selector).'"';	
		executeQuery('SET NAMES UTF8');		
		executeQuery($query);			
	}	
	
	
	public function UpdateKultura1($naslov, $sadrzaj, $imagePath1, $imagePath2, $imagePath3, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kultura SET 
		kultura.Naslov ="'.mysql_real_escape_string($naslov).'", 
		kultura.Vrijeme ="NOW()", 
		kultura.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		kultura.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		kultura.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		kultura.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'",
		kultura.Polazak = "'.mysql_real_escape_string($polazak).'",
		kultura.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where kultura.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	
	public function UpdateKultura2($naslov, $sadrzaj, $imagePath1, $imagePath3, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kultura SET 
		kultura.Naslov ="'.mysql_real_escape_string($naslov).'", 
		kultura.Vrijeme ="NOW()", 
		kultura.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		kultura.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
	    kultura.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'",	
		kultura.Polazak = "'.mysql_real_escape_string($polazak).'",
		kultura.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where kultura.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKultura3($naslov, $sadrzaj, $imagePath1, $imagePath2, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kultura SET 
		kultura.Naslov ="'.mysql_real_escape_string($naslov).'", 
		kultura.Vrijeme ="NOW()", 
		kultura.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		kultura.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		kultura.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",		
		kultura.Polazak = "'.mysql_real_escape_string($polazak).'",
		kultura.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where kultura.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKultura4($naslov, $sadrzaj, $imagePath1, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kultura SET 
		kultura.Naslov ="'.mysql_real_escape_string($naslov).'", 
		kultura.Vrijeme ="NOW()", 
		kultura.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 		
		kultura.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",		
		kultura.Polazak = "'.mysql_real_escape_string($polazak).'",
		kultura.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where kultura.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKultura5($naslov, $sadrzaj, $imagePath2, $imagePath3, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kultura SET 
		kultura.Naslov ="'.mysql_real_escape_string($naslov).'", 
		kultura.Vrijeme ="NOW()", 
		kultura.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		kultura.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		kultura.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'",
		kultura.Polazak = "'.mysql_real_escape_string($polazak).'",
		kultura.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where kultura.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKultura6($naslov, $sadrzaj, $imagePath2, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kultura SET 
		kultura.Naslov ="'.mysql_real_escape_string($naslov).'", 
		kultura.Vrijeme ="NOW()", 
		kultura.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		kultura.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",		
		kultura.Polazak = "'.mysql_real_escape_string($polazak).'",
		kultura.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where kultura.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKultura7($naslov, $sadrzaj, $imagePath3, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kultura SET 
		kultura.Naslov ="'.mysql_real_escape_string($naslov).'", 
		kultura.Vrijeme ="NOW()", 
		kultura.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		kultura.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'",		
		kultura.Polazak = "'.mysql_real_escape_string($polazak).'",
		kultura.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where kultura.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKultura8($naslov, $sadrzaj, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kultura SET 
		kultura.Naslov ="'.mysql_real_escape_string($naslov).'", 
		kultura.Vrijeme ="NOW()", 
		kultura.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 		
		kultura.Polazak = "'.mysql_real_escape_string($polazak).'",
		kultura.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where kultura.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	
}

?>