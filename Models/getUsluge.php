<?php

require_once(SHARED_PATH.'database.php');

$connection = db_connect();			

$query = 'SELECT * FROM '.mysql_real_escape_string($tip);							 
executeQuery('SET NAMES UTF8');	

$result = executeQuery($query);

if(isEmpty($result))
{	
	echo '<select class="" name="usluga" id="prijavausluga" style="width:145px;">';		
		echo "<option>";	
		echo "</option>";		
	echo '</select>';	
	
return;	
}		
	echo '<select class="" name="usluga" id="prijavausluga" style="width:145px;">';			
	while($row = mysql_fetch_array($result))
	{
		echo "<option>";
		echo $row['Naslov'];		
		echo "</option>";
	}	
	echo '</select>';	
?>