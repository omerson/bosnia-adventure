<?php session_start(); 
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::bosnia-adventure::</title>

<?php
$jurl = $_SERVER['REQUEST_URI']; 
$arr = explode("/",$jurl);	
$arrCount  = count($arr);
$s = substr($jurl, -1);
if($s == '/'){
	$arrCount = $arrCount-2;
	if($arrCount == 0)
		$arrCount++;
}
else{
	$arrCount = $arrCount-1;
	if($arrCount == 0)
		$arrCount++;
}

$sUrl = '';

if($arrCount == 1){
	require_once('reference1.php');
	$sUrl = '';
}
else if($arrCount == 2){
	require_once('reference2.php');
	$sUrl = '../';
}
else if($arrCount == 3){
	require_once('reference3.php');
	$sUrl = '../../';
}
else{
	require_once('default.php');
	return;
} 

?>

</head>
<body>
	 <div id="topBg">	 
		<div id="topContainer">
			<div id="topContainerLeft">		
				<div id="mounain"></div>		
				<div id="destinations">
					<?php 
					require_once(CONTROLLER_PATH.'forHeader.php');		
					if( $row5 != null ){					
						while($rows = mysql_fetch_array($row5)){ ?>						
						<div class="destinationItem">
							<a href="<?php echo $sUrl;?>lokacije/<?php echo $rows['Id'];?>">
								<span class="lokacije"><?php echo $rows['Naziv'];?></span>
							</a>
						</div>
						<div class="dot"></div>
					<?php }
					}?>					
				</div>
				<a href="http://bosnia-adventure.ba/" ><div id="logo"></div></a>
			</div>
			<div id="topContainerRight">	
				<!--<a href="<?php //echo $sUrl;?>adminarea"><div id="adminAreaLink">	
									
					<?php 					
						//echo '<span id="login">[adminarea]</span>';								 	
					?>
				</div></a>	 -->
				<form name="logout" method="post" action="" enctype="multipart/form-data">
					<input type="hidden" value="logout" name="logout"/>
				</form>			
				<div id="contactArea">
					
					<div id="languageIco">
						<div id="bos" class="icoLang"></div>
						<div id="eng" class="icoLang"></div>
						<div id="ger" class="icoLang"></div>
					</div>
					
					<div id="contact">
						<div id="pogledaj">
							<div class="pozoviText">
								<span id="spnPogledaj">Pogledajte usluge</span>
							</div>
							<a href="<?php echo $sUrl;?>usluge"><div id="pogledajImg">
							</div></a>
						</div>
						<div id="pozovi">
							<div class="pozoviText">
								<span id="spnPozovi">Kontaktirajte nas</span>
							</div>
							<a href="<?php echo $sUrl;?>kontakt"><div id="pozoviImg">
							</div></a>
						</div>
					</div>
				</div>
				<div id="topMenu">					
					<div id="menuCenter" >
						<div id="naslovna" class="links">
							<a href="http://bosnia-adventure.ba/"><span id="spnNaslovna">Naslovna</span></a>
						</div>
						<div id="onama" class="links">
							<a href="<?php echo $sUrl;?>onama"><span id="spnOnama">O nama</span></a>
						</div>
						<div id="kontakt" class="links">
							<a href="<?php echo $sUrl;?>kontakt"><span id="spnKontakt">Kontakt</span></a>
						</div>
						<div id="prijavise" class="links">
							<a href="<?php echo $sUrl;?>prijavise"><span id="spnPrijavise">Prijavi se</span></a>
						</div>
					</div>				
				</div>				
			</div>
		</div>
	</div>	
	<div id="sasa">
		<div id="container">
			<div id="mainContainer">	
				<div id="caryCenter">				
					<div id="rightBorder">
						<div id="rightBorderCorner">
						</div>							
					</div>
					<div id="center">
						<div id="mainContainerArea">							
							<div id="mainMenu">		
								<div id="mainMenuLeft"> 			
									<div id="avantura" class="menuItem" >
										<a href="<?php echo $sUrl;?>avanturaall"><span id="spnAvantura" class="">AVANTURA</span></a>
									</div>
									<div id="kulturniTurizam" class="menuItem" >
										<a href="<?php echo $sUrl;?>kulturaall"><span id="spnKulturniTurizam">KULTURNI TURIZAM</span></a>
									</div>
									<div id="cityBreaks" class="menuItem" >
										<a href="<?php echo $sUrl;?>citybreaksall"><span id="spncityBreaks">CITY BREAKS</span></a>
									</div>					
									<div id="smjestaj" class="menuItem" >
										<a href="<?php echo $sUrl;?>smjestajall"><span id="spnSmjestaj">SMJEŠTAJ</span></a>
									</div>
									<div id="rentacar" class="menuItem" >
										<a href="<?php echo $sUrl;?>rentacarall"><span id="spnRentacar">RENT-A-CAR</span></a>
									</div>
									<div id="combinovano" class="menuItem" >
										<a href="<?php echo $sUrl;?>kombinacijaall"><span id="spnCombinovano">KOMBINOVANE TURE</span></a>
									</div>
									<div id="pravilnik" class="menuItem" >
										<a href="<?php echo $sUrl;?>pravilnik"><span id="spnPravilnik">PRAVILNIK</span></a>
									</div>						
								</div>
								<div id="mainMenuRight">
								  <!-- <div id="register" class="" >
										<span>SEARCH</span>
									</div>	-->
									<form method="get" id="searchform" name="search">
										<fieldset class="search">										
											<input type="text" class="box" name="search" />
											<button id="btnSearch" class="btn" title="Submit Search">Search</button>
										</fieldset>
									</form>
								</div>											
							</div>
							
