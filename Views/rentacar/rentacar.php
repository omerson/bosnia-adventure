﻿<div class="areaText">
	<div class="areaLeft">
		<div class="areaImg">
		<?php if ($row['ImgPath1'] != ""){?>	
			<img src="<?php echo APP_ROOT?><?php echo $row['ImgPath1']; ?>" class="bgmaximage" height="200"  width="300"/>	
		<?php }else{?>
			<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="200"  width="300"/>	
		<?php }?>			
		</div>		
		<div id="onamaImg" class="areaImg">
		<?php if ($row['ImgPath2'] != ""){?>	
			<img src="<?php echo APP_ROOT?><?php echo $row['ImgPath2']; ?>" class="bgmaximage" height="200"  width="300"/>	
		<?php }else{?>
			<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="200"  width="300"/>	
		<?php }?>
		</div>		
		<div id="onamaImg" class="areaImg">
		<?php if ($row['ImgPath3'] != ""){?>	
			<img src="<?php echo APP_ROOT?><?php echo $row['ImgPath3']; ?>" class="bgmaximage" height="200"  width="300"/>	
		<?php }else{?>
			<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="200"  width="300"/>	
		<?php }?>
		</div>
		<!--<div id="onamaImg" class="areaImg">
		<?php //if ($row['ImgPath4'] != ""){?>	
			<img src="<?php //echo APP_ROOT?><?php //echo $row['ImgPath4']; ?>" class="bgmaximage" height="200"  width="300"/>	
		<?php //}else{?>
			<img src="<?php //echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="200"  width="300"/>	
		<?php //}?>
		</div>	 -->	
		
		<div id="moreImages" style="font-weight:bold; margin-left:75px;">
		<a href="<?php echo $row['Id']?>/images" >Više slika</a>		
		</div>
	</div>
	
	<div class="areaRight">
		<div class="titleText">
			<div style="float:left;">
				<?php echo $row['Naslov']; ?>
			</div>
			<div style="float:right;">
			 <form  method="post">
			 <input type="hidden" value="rezervisirentacar" name="rezervisirentacar" />
			 <input type="hidden" value="<?php echo $row['Naslov']?>" name="id" />
		     <input type="submit" id="prijavise" class="inputButton"  value="Rezerviši"/>
		   </form>
			</div>
		</div>			
		
		<div class="contentText" style="clear:both;">
			<?php echo str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $row['Sadrzaj']); ?>					
		</div>
 	</div>
</div>
