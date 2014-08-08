<div class="areaText">
	<div class="areaLeft">
		<div class="areaImg">
			<img src="<?php echo '../'; echo $row['ImgPath1']; ?>" class="bgmaximage" height="200"  width="300"/>	
		</div>
		
		<div id="onamaImg" class="areaImg">
			<img src="<?php echo '../'; echo $row['ImgPath2']; ?>" class="bgmaximage" height="200"  width="300"/>	
		</div>
		
		<div id="onamaImg" class="areaImg">
			<img src="<?php echo '../'; echo $row['ImgPath3']; ?>" class="bgmaximage" height="200"  width="300"/>	
		</div>
	</div>
	
	<div class="areaRight">
		<div class="titleText">
			Zahvalnica
		</div>			
		
		<div class="contentText">
			<?php echo str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $row['Sadrzaj']); ?>					
		</div>
 	</div>
</div>
