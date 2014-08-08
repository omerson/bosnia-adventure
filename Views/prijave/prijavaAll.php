<div class="areaText">

<div id="adminpanelNaslov"  style="margin:15px;"><span>Sve prijave</span></div>

<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>
<?php 
	if($foundPrijave){
		
	while($row = mysql_fetch_array($foundPrijave)) {
	?>
<div class="areaOne">	
	<div class="listText porukaMalo" style="font-size:16px; float:left; margin-right:15px; margin-left:15px;">
		<a href="http://bosnia-adventure.ba/prijava/<?php echo $row['Id']; ?>"><?php echo $row['Email']; ?></a>
	</div>
	<div class="listText porukaMalo" style="font-size:16px; margin-left:15px;">
		<a href="http://bosnia-adventure.ba/prijava/<?php echo $row['Id']; ?>"><?php echo $row['Vrijeme']; ?></a>
	</div>
</div>
<?php 
}

	
	
?>


</div>


<div class="pager">
	<?php //echo $pager->renderFullNav(); 
		
		$numberOfPrijave = (int)$numberOfPrijave;
		$perPage = (int)$perPage;
		$numOfLinks = ((int) ($numberOfPrijave	/$perPage)) + 1;		
		$idPlus = $id+1;	
		$idMinus = $id-1;		
	?>
	
	<?php 
	if($id == 0 || $id==1){				
	?>
	
	<?php 
	}
	else	{				
	?>
	<a href="../prijaveall/1">Prva </a>
	<a href="../prijaveall/<?php echo $idMinus?>"><</a>
		<?php 
		}
		for($i = 1; $i<=$numOfLinks; $i++){
		
			if($i == $id){	
			?>		
				<a href="../prijaveall/<?php echo $i?>"><u><?php echo $i?></u></a>	
				<?php 
			}
			else{
			?>
				<a href="../prijaveall/<?php echo $i?>"><?php echo $i?></a>	
			<?php 
			}
		
		}
		
		?>
		
		
		<?php 
		if((int)$id == $numOfLinks){				
		?>
		
		<?php 
		}
		else	{				
		?>
		<a href="../prijaveall/<?php echo $idPlus?>">></a>
		<a href="../prijaveall/<?php echo $numOfLinks?>"> Zadnja</a>
		<?php 
			}
		}
		?>	
</div>