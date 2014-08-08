<?php

require_once(MODEL_PATH.'admin.php');


$admin = new Admin(); 
 

$passwordClient = $_POST['password']; 

$modelPassword = $admin->Authenticate();	
							
		if( $passwordClient === $modelPassword ){			       	
			$_SESSION['userid'] = 'admin';				
			require_once(VIEW_PATH.'admin/adminpanel.php');
			return;
		}	
		else{	
			require_once(VIEW_PATH.'admin/pogresanLogin.php');			
			require_once(VIEW_PATH.'admin/login.php');	
			return;
		}	
		 
?>