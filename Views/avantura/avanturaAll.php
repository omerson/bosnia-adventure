<div class="areaText">
<?php 
	if($foundAvantura){

	while($row = mysql_fetch_array($foundAvantura)) {
	?>
<div class="areaOne">
	<div class="areaNaslov listNaslov">
		<a href="../avantura/<?php  echo $row['Id']; ?>" class="vijestiLink" id="vijestiLink<?php  echo $row['NId']; ?>"> 
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
		
		$numberOfAvantura = (int)$numberOfAvantura;
		$perPage = (int)$perPage;
		$numOfLinks = ((int) ($numberOfAvantura	/$perPage)) + 1;		
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
	<a href="../avanturaall/1">Prva </a>
	<a href="../avanturaall/<?php echo $idMinus?>"><</a>
		<?php 
		}
		for($i = 1; $i<=$numOfLinks; $i++){
		
			if($i == $id){	
			?>		
				<a href="../avanturaall/<?php echo $i?>"><u><?php echo $i?></u></a>	
				<?php 
			}
			else{
			?>
				<a href="../avanturaall/<?php echo $i?>"><?php echo $i?></a>	
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
		<a href="../avanturaall/<?php echo $idPlus?>">></a>
		<a href="../avanturaall/<?php echo $numOfLinks?>"> Zadnja</a>
		<?php 
			}
		}
		?>	
</div>
