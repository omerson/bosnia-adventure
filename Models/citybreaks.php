<?php

require_once(SHARED_PATH.'database.php');

class Citybreaks
{
	public function UnesiCitybreaks($naslov, $sadrzaj, $img1, $img2, $img3, $polazak, $povratak){
		
		$connection = db_connect();			
		
		$query = 'INSERT INTO city (Naslov, Vrijeme, Sadrzaj, ImgPath1, ImgPath2, ImgPath3, Polazak, Dolazak)
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
	
	public function GetAllCitybreaks($page = 1, $perPage){
	
		$connection = db_connect();	
		if($page != 0)
			$page--;
		
		$skip = (int)($page * $perPage);		
		
		$query = 'SELECT * FROM city Order by Id DESC LIMIT '.$skip.', '.$perPage.'';							 
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
		
		$query = 'SELECT * FROM slike WHERE TipId = '.mysql_real_escape_string($id).' AND Tip = "citybreaks"';							 
		executeQuery('SET NAMES UTF8');	
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $result;	
		
	}
	
	public function GetCitybreaksImagesNumber(){
	
		$connection = db_connect();	
		
		$query = 'Select COUNT(Id) from slike where Tip = "citybreaks"';							 
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
	
	public function GetCitybreaksNumber(){
	
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
	
	public function GetCitybreaks($selector)
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
	
	public function DeleteCitybreaks($selector)
	{
		$connection = db_connect();			
		
		$query = 'delete FROM city where city.Id = "'.mysql_real_escape_string($selector).'"';	
		executeQuery('SET NAMES UTF8');		
		executeQuery($query);			
	}	
	
	
	public function UpdateCitybreaks1($naslov, $sadrzaj, $imagePath1, $imagePath2, $imagePath3, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE city SET 
		city.Naslov ="'.mysql_real_escape_string($naslov).'", 
		city.Vrijeme ="NOW()", 
		city.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		city.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		city.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		city.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'",
		city.Polazak = "'.mysql_real_escape_string($polazak).'",
		city.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where city.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	
	public function UpdateCitybreaks2($naslov, $sadrzaj, $imagePath1, $imagePath3, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE city SET 
		city.Naslov ="'.mysql_real_escape_string($naslov).'", 
		city.Vrijeme ="NOW()", 
		city.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		city.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
	    city.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'",	
		city.Polazak = "'.mysql_real_escape_string($polazak).'",
		city.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where city.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateCitybreaks3($naslov, $sadrzaj, $imagePath1, $imagePath2, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE city SET 
		city.Naslov ="'.mysql_real_escape_string($naslov).'", 
		city.Vrijeme ="NOW()", 
		city.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		city.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		city.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",		
		city.Polazak = "'.mysql_real_escape_string($polazak).'",
		city.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where city.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateCitybreaks4($naslov, $sadrzaj, $imagePath1, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE city SET 
		city.Naslov ="'.mysql_real_escape_string($naslov).'", 
		city.Vrijeme ="NOW()", 
		city.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 		
		city.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",		
		city.Polazak = "'.mysql_real_escape_string($polazak).'",
		city.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where city.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateCitybreaks5($naslov, $sadrzaj, $imagePath2, $imagePath3, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE city SET 
		city.Naslov ="'.mysql_real_escape_string($naslov).'", 
		city.Vrijeme ="NOW()", 
		city.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
	    city.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		city.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'",		
		city.Polazak = "'.mysql_real_escape_string($polazak).'",
		city.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where city.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateCitybreaks6($naslov, $sadrzaj, $imagePath2, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE city SET 
		city.Naslov ="'.mysql_real_escape_string($naslov).'", 
		city.Vrijeme ="NOW()", 
		city.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		city.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",		
		city.Polazak = "'.mysql_real_escape_string($polazak).'",
		city.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where city.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateCitybreaks7($naslov, $sadrzaj, $imagePath3, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE city SET 
		city.Naslov ="'.mysql_real_escape_string($naslov).'", 
		city.Vrijeme ="NOW()", 
		city.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		city.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'",		
		city.Polazak = "'.mysql_real_escape_string($polazak).'",
		city.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where city.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateCitybreaks8($naslov, $sadrzaj, $polazak, $povratak, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE city SET 
		city.Naslov ="'.mysql_real_escape_string($naslov).'", 
		city.Vrijeme ="NOW()", 
		city.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 		
		city.Polazak = "'.mysql_real_escape_string($polazak).'",
		city.Dolazak = "'.mysql_real_escape_string($povratak).'"
		
		where city.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	

}

?>