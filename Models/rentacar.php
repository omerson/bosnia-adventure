<?php

require_once(SHARED_PATH.'database.php');

class Rentacar
{
	public function UnesiRentacar($naslov, $sadrzaj, $img1, $img2, $img3){
		
		$connection = db_connect();			
		
		$query = 'INSERT INTO rentacar (Naslov, Vrijeme, Sadrzaj, ImgPath1, ImgPath2, ImgPath3)
				  VALUES ("'.mysql_real_escape_string($naslov).'", 
				             NOW(), 
							 "'.mysql_real_escape_string($sadrzaj).'",  
							 "'.mysql_real_escape_string($img1).'",  
							 "'.mysql_real_escape_string($img2).'",  
							 "'.mysql_real_escape_string($img3).'")';	
		
		executeQuery('SET NAMES UTF8');		
		executeQuery($query );			
	}
	
	public function GetAllRentacar($page = 1, $perPage){
	
		$connection = db_connect();	
		if($page != 0)
			$page--;
		
		$skip = (int)($page * $perPage);		
		
		$query = 'SELECT * FROM rentacar Order by Id DESC LIMIT '.$skip.', '.$perPage.'';							 
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
		
		$query = 'SELECT * FROM slike WHERE TipId = '.mysql_real_escape_string($id).' AND Tip = "rentacar"';							 
		executeQuery('SET NAMES UTF8');	
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}		
					
		return $result;	
		
	}
	
	public function GetRentacarImagesNumber(){
	
		$connection = db_connect();	
		
		$query = 'Select COUNT(Id) from slike where Tip = "rentacar"';							 
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
		
		$query = 'INSERT INTO slike (TipId, Tip, ImgPath) VALUES ('.mysql_real_escape_string($id).', "'.mysql_real_escape_string($tip).'", "'.mysql_real_escape_string($newname).'")';		
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);
	
	}
	
	public function GetRentacarNumber(){
	
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
	
	public function GetRentacar($selector)
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
	
	public function DeleteRentacar($selector)
	{
		$connection = db_connect();			
		
		$query = 'delete FROM rentacar where rentacar.Id = "'.mysql_real_escape_string($selector).'"';	
		executeQuery('SET NAMES UTF8');		
		executeQuery($query);			
	}	
	
	
	public function UpdateRentacar1($naslov, $sadrzaj, $imagePath1, $imagePath2, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE rentacar SET 
		rentacar.Naslov ="'.mysql_real_escape_string($naslov).'", 
		rentacar.Vrijeme ="NOW()", 
		rentacar.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		rentacar.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		rentacar.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		rentacar.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where rentacar.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	
	public function UpdateRentacar2($naslov, $sadrzaj, $imagePath1, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE rentacar SET 
		rentacar.Naslov ="'.mysql_real_escape_string($naslov).'", 
		rentacar.Vrijeme ="NOW()", 
		rentacar.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		rentacar.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
	    rentacar.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where rentacar.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateRentacar3($naslov, $sadrzaj, $imagePath1, $imagePath2, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE rentacar SET 
		rentacar.Naslov ="'.mysql_real_escape_string($naslov).'", 
		rentacar.Vrijeme ="NOW()", 
		rentacar.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		rentacar.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'",
		rentacar.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'"
		
		where rentacar.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateRentacar4($naslov, $sadrzaj, $imagePath1, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE rentacar SET 
		rentacar.Naslov ="'.mysql_real_escape_string($naslov).'", 
		rentacar.Vrijeme ="NOW()", 
		rentacar.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 		
		rentacar.ImgPath1 = "'.mysql_real_escape_string($imagePath1).'"
		
		where rentacar.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateRentacar5($naslov, $sadrzaj, $imagePath2, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE rentacar SET 
		rentacar.Naslov ="'.mysql_real_escape_string($naslov).'", 
		rentacar.Vrijeme ="NOW()", 
		rentacar.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 
		rentacar.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'",
		rentacar.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where rentacar.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateRentacar6($naslov, $sadrzaj, $imagePath2, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE rentacar SET 
		rentacar.Naslov ="'.mysql_real_escape_string($naslov).'", 
		rentacar.Vrijeme ="NOW()", 
		rentacar.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		rentacar.ImgPath2 = "'.mysql_real_escape_string($imagePath2).'"
		
		where rentacar.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateRentacar7($naslov, $sadrzaj, $imagePath3, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE rentacar SET 
		rentacar.Naslov ="'.mysql_real_escape_string($naslov).'", 
		rentacar.Vrijeme ="NOW()", 
		rentacar.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'", 	
		rentacar.ImgPath3 = "'.mysql_real_escape_string($imagePath3).'"
		
		where rentacar.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');
		executeQuery($query);		
	}	
	
	public function UpdateRentacar8($naslov, $sadrzaj, $selector)
	{
		$connection = db_connect();			
		
		$query = 'UPDATE rentacar SET 
		rentacar.Naslov ="'.mysql_real_escape_string($naslov).'", 
		rentacar.Vrijeme ="NOW()", 
		rentacar.Sadrzaj ="'.mysql_real_escape_string($sadrzaj).'"				
		
		where rentacar.Id = "'.mysql_real_escape_string($selector).'"';	
		
		executeQuery('SET NAMES UTF8');	
		executeQuery($query);		
	}	
}

?>