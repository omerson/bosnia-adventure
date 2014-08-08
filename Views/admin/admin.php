<?php 
if(!isset($_SESSION['userid']) && empty($_SESSION['userid'])){ 
	//Login panel
	require_once(VIEW_PATH.'admin/login.php');
	return;
}

//Admin panel
require_once(VIEW_PATH.'admin/adminpanel.php');

?>