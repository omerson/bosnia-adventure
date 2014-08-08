<?php

require_once(SHARED_PATH.'database.php');

class Lokacije
{
	public function UnesiLokacije($naslov, $sadrzaj, $img1, $img2, $img3){
		
		$connection = db_connect();			
		
		$query = 'INSERT INTO lokacije (Naziv, Vrijeme, Sadrzaj, ImgPath1, ImgPath2, ImgPath3)
				  VALUES ("'.mysql_real_escape_string($naslov).'", 
				             NOW(), 
							 "'.mysql_real_escape_string($sadrzaj).'",  
							 "'.mysql_real_escape_string($img1).'",  
							 "'.mysql_real_escape_string($img2).'",  
							 "'.mysql_real_escape_string($img3).'")';	
		
		executeQuery('SET NAMES UTF8');				
		executeQuery($query );			
	}
	
	public function GetAllLokacije($page = 1, $perPage){
	
		$connection = db_connect();	
		if($page != 0)
			$page--;
		
		$skip = (int)($page * $perPage);		
		
		$query = 'SELECT * FROM lokacije Order by Id DESC LIMIT '.$skip.', '.$perPage.'';							 
		executeQuery('SET NAMES UTF8');		
		$result = executeQuery($query );		
		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $result;	
	}
	
	public function GetLokacijeNumber(){
	
		$connection = db_connect();			
		
		$query = 'Select COUNT(Id) from lokacije';							 
		executeQuery('SET NAMES UTF8');
		$result = executeQuery($query );		
		$row = mysql_fetch_array($result);		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $row [0];	
	}
	
	public function GetLokacije($selector)
	{
		$connection = db_connect();			
		
		$query = 'SELECT *FROM lokacije WHERE lokacije.Id = "'.mysql_real_escape_string($selector).'"';		
		executeQuery('SET NAMES UTF8');		
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
	}
	
	public function DeleteLokacije($selector)
	{
		$connection = db_connect();			
		
		$query = 'delete FROM lokacije where lokacije.Id = "'.mysql_real_escape_string($selector).'"';	
		executeQuery('SET NAMES UTF8');		
		executeQuery($query);					
	}	
	
	
	public function UpdateLokacije1($naslov, $sadrzaj, $imagePath1, $imagePath2, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE lokacije SET 
		lokacije.Naziv ="'.mysql_real_escape_string($naslov).'", 
		lokacije.Vrijeme ="NOW()", 
		lokacije.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		lokacije.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		lokacije.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		lokacije.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where lokacije.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);				
	}	
	
	
	public function UpdateLokacije2($naslov, $sadrzaj, $imagePath1, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE lokacije SET 
		lokacije.Naziv ="'.mysql_real_escape_string($naslov).'", 
		lokacije.Vrijeme ="NOW()", 
		lokacije.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		lokacije.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
	    lokacije.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where lokacije.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);				
	}	
	
	public function UpdateLokacije3($naslov, $sadrzaj, $imagePath1, $imagePath2, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE lokacije SET 
		lokacije.Naziv ="'.mysql_real_escape_string($naslov).'", 
		lokacije.Vrijeme ="NOW()", 
		lokacije.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		lokacije.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		lokacije.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'"
		
		where lokacije.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);				
	}	
	
	public function UpdateLokacije4($naslov, $sadrzaj, $imagePath1, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE lokacije SET 
		lokacije.Naziv ="'.mysql_real_escape_string($naslov).'", 
		lokacije.Vrijeme ="NOW()", 
		lokacije.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 		
		lokacije.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'"
		
		where lokacije.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);	
			
	}	
	
	public function UpdateLokacije5($naslov, $sadrzaj, $imagePath2, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE lokacije SET 
		lokacije.Naziv ="'.mysql_real_escape_string($naslov).'", 
		lokacije.Vrijeme ="NOW()", 
		lokacije.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		lokacije.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		lokacije.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where lokacije.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);				
	}	
	
	public function UpdateLokacije6($naslov, $sadrzaj, $imagePath2, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE lokacije SET 
		lokacije.Naziv ="'.mysql_real_escape_string($naslov).'", 
		lokacije.Vrijeme ="NOW()", 
		lokacije.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		lokacije.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'"
		
		where lokacije.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);				
	}	
	
	public function UpdateLokacije7($naslov, $sadrzaj, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE lokacije SET 
		lokacije.Naziv ="'.mysql_real_escape_string($naslov).'", 
		lokacije.Vrijeme ="NOW()", 
		lokacije.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		lokacije.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where lokacije.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);				
	}	
	
	public function UpdateLokacije8($naslov, $sadrzaj, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE lokacije SET 
		lokacije.Naziv ="'.mysql_real_escape_string($naslov).'", 
		lokacije.Vrijeme ="NOW()", 
		lokacije.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'"			
		
		where lokacije.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);				
	}	
}

?>