<?php

require_once(SHARED_PATH.'database.php');

class Admin
{
	public function Authenticate()
	{		
		$connection = db_connect();	
		
		$query = 'SELECT Password FROM baadmin';
		executeQuery('SET NAMES UTF8');		   
		$result = executeQuery($query);
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row['Password'];		
	}
	
	public function ChangePassword($password)
	{		
		$connection = db_connect();	
			
		$query = 'UPDATE baadmin SET Password = "'.mysql_real_escape_string($password).'"';	
		executeQuery('SET NAMES UTF8');
		executeQuery($query);
	}
}

?>