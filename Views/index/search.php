<div class="areaText">
<?php 
	while($row = mysql_fetch_array($foundSearchResult)) {
	?>
<div class="areaOne">
	<div class="areaNaslov listNaslov">
	<?php 
	$table = "";
	switch($row['tbl']){
	
		case 'avantura';
		$table = "avantura";	 
		break;  
		case 'kultura';	
		$table = "kultura";	
		break; 
		case 'city';
		$table = "city";
		break; 
		case 'smjestaj';
		$table = "smjestaj";
		break; 
		case 'rentacar';
		$table = "rentacar";
		break; 
		case 'kombinacija';
		$table = "kombinacija";
		break;
		case 'rezervacije';
		$table = "rezervacije";
		break; 
		
	}?>
	   <a href="<?php echo APP_ROOT?>search/<?php echo $row['Id']; ?>/<?php echo $table; ?>" class="vijestiLink" id="vijestiLink<?php  echo $row['NId']; ?>"> 
       <?php echo htmlspecialchars($row['Naslov']); ?></a>
	</div>
	<div class="areaImg listImg">
		<img src="<?php echo APP_ROOT?><?php echo $row['ImgPath1']; ?>" class="bgmaximage" height="120"  width="150"/>	
	</div>
	
	<div class="listText">
		<?php echo $row['Sadrzaj']; ?>
	</div>
</div>
<?php 
}
	
?>


</div>


