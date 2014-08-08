<div class="areaText">
<?php 
	if($foundKombinacija){

	while($row = mysql_fetch_array($foundKombinacija)) {
	?>
<div class="areaOne">
	<div class="areaNaslov listNaslov">
		<a href="../kombinacija/<?php  echo $row['Id']; ?>" class="vijestiLink" id="vijestiLink<?php  echo $row['NId']; ?>"> 
       <?php echo htmlspecialchars($row['Naslov']); ?></a>
	</div>
	<div class="areaImg listImg">
		<?php if ($row['ImgPath1'] != ""){?>	
		<img src="<?php echo '../'; echo $row['ImgPath1']; ?>" class="bgmaximage" height="120"  width="150"/>	
		<?php }else{?>
			<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="120"  width="150"/>	
		<?php }?>
	</div>
	
	<div class="listText">
		<?php echo $row['Sadrzaj']; ?>
	</div>
</div>
<?php 
}

	
	
?>


</div>


<div class="pager">
	<?php //echo $pager->renderFullNav(); 
		
		$numberOfKombinacija = (int)$numberOfKombinacija;
		$perPage = (int)$perPage;
		$numOfLinks = ((int) ($numberOfKombinacija	/$perPage)) + 1;		
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
	<a href="../kombinacijaall/1">Prva </a>
	<a href="../kombinacijaall/<?php echo $idMinus?>"><</a>
		<?php 
		}
		for($i = 1; $i<=$numOfLinks; $i++){
		
			if($i == $id){	
			?>		
				<a href="../kombinacijaall/<?php echo $i?>"><u><?php echo $i?></u></a>	
				<?php 
			}
			else{
			?>
				<a href="../kombinacijaall/<?php echo $i?>"><?php echo $i?></a>	
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
		<a href="../kombinacijaall/<?php echo $idPlus?>">></a>
		<a href="../kombinacijaall/<?php echo $numOfLinks?>"> Zadnja</a>
		<?php 
			}
		}
		?>	
</div>
