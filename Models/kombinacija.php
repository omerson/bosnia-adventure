<?php

require_once(SHARED_PATH.'database.php');

class Kombinacija
{
	
	public function UnesiKombinacija($naslov, $sadrzaj, $img1, $img2, $img3, $polazak, $povratak){
		
		$connection = db_connect();			
		
		$query = 'INSERT INTO kombinacija (Naslov, Vrijeme, Sadrzaj, ImgPath1, ImgPath2, ImgPath3, Polazak, Dolazak)
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
	
	public function GetImages($id){
		
		$connection = db_connect();	
		
		$query = 'SELECT * FROM slike WHERE TipId = '.mysql_real_escape_string($id).' AND Tip = "kombinacija"';							 
		executeQuery('SET NAMES UTF8');	
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $result;	
		
	}
	
	public function GetKombinacijaImagesNumber(){
	
		$connection = db_connect();	
		
		$query = 'Select COUNT(Id) from slike where Tip = "kombinacija"';							 
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
	
	public function GetKombinacija($selector)
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
	
	public function DeleteKombinacija($selector)
	{
		$connection = db_connect();			
		
		$query = 'delete FROM kombinacija where kombinacija.Id = "'.mysql_real_escape_string($selector).'"';	
		executeQuery('SET NAMES UTF8');		
		executeQuery($query);			
	}	
	
	
	public function UpdateKombinacija1($naslov, $sadrzaj, $imagePath1, $imagePath2, $imagePath3, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kombinacija SET 
		kombinacija.Naslov ="'.mysql_real_escape_string($naslov).'", 
		kombinacija.Vrijeme ="NOW()", 
		kombinacija.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		kombinacija.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		kombinacija.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		kombinacija.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'",
		kombinacija.Polazak = "'.mysql_real_escape_string($polazak).'",
		kombinacija.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where kombinacija.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	
	public function UpdateKombinacija2($naslov, $sadrzaj, $imagePath1, $imagePath3, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kombinacija SET 
		kombinacija.Naslov ="'.mysql_real_escape_string($naslov).'", 
		kombinacija.Vrijeme ="NOW()", 
		kombinacija.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		kombinacija.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
	    kombinacija.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'",	
		kombinacija.Polazak = "'.mysql_real_escape_string($polazak).'",
		kombinacija.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where kombinacija.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKombinacija3($naslov, $sadrzaj, $imagePath1, $imagePath2, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kombinacija SET 
		kombinacija.Naslov ="'.mysql_real_escape_string($naslov).'", 
		kombinacija.Vrijeme ="NOW()", 
		kombinacija.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		kombinacija.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		kombinacija.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",		
		kombinacija.Polazak = "'.mysql_real_escape_string($polazak).'",
		kombinacija.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where kombinacija.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKombinacija4($naslov, $sadrzaj, $imagePath1, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kombinacija SET 
		kombinacija.Naslov ="'.mysql_real_escape_string($naslov).'", 
		kombinacija.Vrijeme ="NOW()", 
		kombinacija.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 		
		kombinacija.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",		
		kombinacija.Polazak = "'.mysql_real_escape_string($polazak).'",
		kombinacija.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where kombinacija.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKombinacija5($naslov, $sadrzaj, $imagePath2, $imagePath3, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kombinacija SET 
		kombinacija.Naslov ="'.mysql_real_escape_string($naslov).'", 
		kombinacija.Vrijeme ="NOW()", 
		kombinacija.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
	    kombinacija.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		kombinacija.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'",		
		kombinacija.Polazak = "'.mysql_real_escape_string($polazak).'",
		kombinacija.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where kombinacija.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKombinacija6($naslov, $sadrzaj, $imagePath2, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kombinacija SET 
		kombinacija.Naslov ="'.mysql_real_escape_string($naslov).'", 
		kombinacija.Vrijeme ="NOW()", 
		kombinacija.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		kombinacija.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",		
		kombinacija.Polazak = "'.mysql_real_escape_string($polazak).'",
		kombinacija.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where kombinacija.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKombinacija7($naslov, $sadrzaj, $imagePath3, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kombinacija SET 
		kombinacija.Naslov ="'.mysql_real_escape_string($naslov).'", 
		kombinacija.Vrijeme ="NOW()", 
		kombinacija.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		kombinacija.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'",		
		kombinacija.Polazak = "'.mysql_real_escape_string($polazak).'",
		kombinacija.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where kombinacija.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateKombinacija8($naslov, $sadrzaj, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE kombinacija SET 
		kombinacija.Naslov ="'.mysql_real_escape_string($naslov).'", 
		kombinacija.Vrijeme ="NOW()", 
		kombinacija.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 		
		kombinacija.Polazak = "'.mysql_real_escape_string($polazak).'",
		kombinacija.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where kombinacija.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	


}

?>