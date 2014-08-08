<div class="areaText">

<div id="adminpanelNaslov"  style="margin:15px;"><span>Sve poruke</span></div>

	<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>


<?php 
	if($foundPoruke){
		
	while($row = mysql_fetch_array($foundPoruke)) {
	?>
<div class="areaOne">	
	<div class="listText porukaMalo" style="font-size:16px; float:left; margin-right:15px;">
		<a href="http://bosnia-adventure.ba/poruka/<?php echo $row['Id']; ?>"><?php echo $row['Email']; ?></a>
	</div>
	<div class="listText porukaMalo" style="font-size:16px;">
		<a href="http://bosnia-adventure.ba/poruka/<?php echo $row['Id']; ?>"><?php echo $row['Vrijeme']; ?></a>
	</div>
</div>
<?php 
}

	
	
?>


</div>


<div class="pager">
	<?php //echo $pager->renderFullNav(); 
		
		$numberOfPoruke = (int)$numberOfPoruke;
		$perPage = (int)$perPage;
		$numOfLinks = ((int) ($numberOfPoruke	/$perPage)) + 1;		
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
	<a href="../porukeall/1">Prva </a>
	<a href="../porukeall/<?php echo $idMinus?>"><</a>
		<?php 
		}
		for($i = 1; $i<=$numOfLinks; $i++){
		
			if($i == $id){	
			?>		
				<a href="../porukeall/<?php echo $i?>"><u><?php echo $i?></u></a>	
				<?php 
			}
			else{
			?>
				<a href="../porukeall/<?php echo $i?>"><?php echo $i?></a>	
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
		<a href="../porukeall/<?php echo $idPlus?>">></a>
		<a href="../porukeall/<?php echo $numOfLinks?>"> Zadnja</a>
		<?php 
			}
		}
		?>	
</div>