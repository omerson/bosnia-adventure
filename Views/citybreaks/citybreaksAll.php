<div class="areaText">
<?php 
	if($foundCitybreaks){
	
	while($row = mysql_fetch_array($foundCitybreaks)) {
	?>
<div class="areaOne">
	<div class="areaNaslov listNaslov">
		<a href="../citybreaks/<?php  echo $row['Id']; ?>" class="vijestiLink" id="vijestiLink<?php  echo $row['NId']; ?>"> 
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
		
		$numberOfCitybreaks = (int)$numberOfCitybreaks;
		$perPage = (int)$perPage;
		$numOfLinks = ((int) ($numberOfCitybreaks	/$perPage)) + 1;		
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
	<a href="../citybreaksall/1">Prva </a>
	<a href="../citybreaksall/<?php echo $idMinus?>"><</a>
		<?php 
		}
		for($i = 1; $i<=$numOfLinks; $i++){
		
			if($i == $id){	
			?>		
				<a href="../citybreaksall/<?php echo $i?>"><u><?php echo $i?></u></a>	
				<?php 
			}
			else{
			?>
				<a href="../citybreaksall/<?php echo $i?>"><?php echo $i?></a>	
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
		<a href="../citybreaksall/<?php echo $idPlus?>">></a>
		<a href="../citybreaksall/<?php echo $numOfLinks?>"> Zadnja</a>
		<?php 
			}
		}
		?>	
</div>
