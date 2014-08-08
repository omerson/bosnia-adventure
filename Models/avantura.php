<?php

require_once(SHARED_PATH.'database.php');

class Avantura
{
	
	public function UnesiAvanturu($naslov, $sadrzaj, $img1, $img2, $img3, $polazak, $povratak){
		
		$connection = db_connect();			
		
		$query = 'INSERT INTO avantura (Naslov, Vrijeme, Sadrzaj, ImgPath1, ImgPath2, ImgPath3, Polazak, Dolazak)
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
	
	public function GetImages($id){
		
		$connection = db_connect();	
		
		$query = 'SELECT * FROM slike WHERE TipId = '.mysql_real_escape_string($id).' AND Tip = "avantura"';	
		executeQuery('SET NAMES UTF8');	
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $result;	
		
	}
	
	public function GetAvanturaImagesNumber(){
	
		$connection = db_connect();	
		
		$query = 'Select COUNT(Id) from slike where Tip = "avantura"';							 
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
	
	public function GetAvantura($selector)
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
	
	public function DeleteAvantura($selector)
	{
		$connection = db_connect();			
		
		$query = 'delete FROM avantura where avantura.Id = "'.mysql_real_escape_string($selector).'"';	
		executeQuery('SET NAMES UTF8');		
		executeQuery($query);			
	}	
	
	
	public function UpdateAvantura1($naslov, $sadrzaj, $imagePath1, $imagePath2, $imagePath3, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE avantura SET 
		avantura.Naslov ="'.mysql_real_escape_string($naslov).'", 
		avantura.Vrijeme ="NOW()", 
		avantura.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		avantura.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		avantura.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		avantura.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'",
		avantura.Polazak = "'.mysql_real_escape_string($polazak).'",
		avantura.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where avantura.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	
	public function UpdateAvantura2($naslov, $sadrzaj, $imagePath1, $imagePath3, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE avantura SET 
		avantura.Naslov ="'.mysql_real_escape_string($naslov).'", 
		avantura.Vrijeme ="NOW()", 
		avantura.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		avantura.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
	    avantura.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'",	
		avantura.Polazak = "'.mysql_real_escape_string($polazak).'",
		avantura.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where avantura.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateAvantura3($naslov, $sadrzaj, $imagePath1, $imagePath2, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE avantura SET 
		avantura.Naslov ="'.mysql_real_escape_string($naslov).'", 
		avantura.Vrijeme ="NOW()", 
		avantura.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		avantura.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		avantura.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",		
		avantura.Polazak = "'.mysql_real_escape_string($polazak).'",
		avantura.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where avantura.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateAvantura4($naslov, $sadrzaj, $imagePath1, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE avantura SET 
		avantura.Naslov ="'.mysql_real_escape_string($naslov).'", 
		avantura.Vrijeme ="NOW()", 
		avantura.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 		
		avantura.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",		
		avantura.Polazak = "'.mysql_real_escape_string($polazak).'",
		avantura.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where avantura.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateAvantura5($naslov, $sadrzaj, $imagePath2, $imagePath3, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE avantura SET 
		avantura.Naslov ="'.mysql_real_escape_string($naslov).'", 
		avantura.Vrijeme ="NOW()", 
		avantura.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
	    avantura.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		avantura.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'",		
		avantura.Polazak = "'.mysql_real_escape_string($polazak).'",
		avantura.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where avantura.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateAvantura6($naslov, $sadrzaj, $imagePath2, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE avantura SET 
		avantura.Naslov ="'.mysql_real_escape_string($naslov).'", 
		avantura.Vrijeme ="NOW()", 
		avantura.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		avantura.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",		
		avantura.Polazak = "'.mysql_real_escape_string($polazak).'",
		avantura.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where avantura.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateAvantura7($naslov, $sadrzaj, $imagePath3, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE avantura SET 
		avantura.Naslov ="'.mysql_real_escape_string($naslov).'", 
		avantura.Vrijeme ="NOW()", 
		avantura.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		avantura.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'",		
		avantura.Polazak = "'.mysql_real_escape_string($polazak).'",
		avantura.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where avantura.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateAvantura8($naslov, $sadrzaj, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE avantura SET 
		avantura.Naslov ="'.mysql_real_escape_string($naslov).'", 
		avantura.Vrijeme ="NOW()", 
		avantura.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 		
		avantura.Polazak = "'.mysql_real_escape_string($polazak).'",
		avantura.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where avantura.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	

}

?>