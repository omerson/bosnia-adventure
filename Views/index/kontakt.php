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
			Kontakt
		</div>				
		<div class="contentText kontaktContent">
			<table border="0">
			  <tr>
				<td width="100" height="50"><div align="right" class="alignCenter">Adresa:</div></td>
				<td width="280"><?php echo $row['adresa']; ?></td>
			  </tr>
			  <tr>
				<td height="50"><div align="right" class="alignCenter">Telefon:</div></td>
				<td><?php echo $row['telefon']; ?></td>
			  </tr>
			  <tr>
				<td height="50"><div align="right" class="alignCenter">Email:</div></td>
				<td><?php echo $row['email']; ?></td>
			  </tr>
			  <tr>
				<td height="50"><div align="right" class="alignCenter">Facebook:</div></td>
				<td><?php echo $row['facebook']; ?></td>
			  </tr>
			  <tr>
				<td height="50"><div align="right" class="alignCenter">Twitter:</div></td>
				<td><?php echo $row['twitter']; ?></td>
			  </tr>
  		  </table>	
		  <div style="width:500px; float:right; margin-top:30px;">			  
			<form id="kontaktForm" method="post" name="trazi" enctype="multipart/form-data">
						<input type="hidden" name="kontaktPoruka" value="kontaktPoruka"/>
						<div class="formRow" style="float:left; clear:both;">
							<div class="formText">Vaš email</div>
							<div class="formInput" style="color:#FF0000;" ><input id="cemail" name="email" class="required email" /></div>
						</div>
						<div class="formRow" style="float:left; clear:both;">
							<div class="formText">Poruka</div>
							<div class="formInput" style="color:#FF0000; width:500px; "><textarea name="brzaPoruka" cols="30" rows="10" type="text" class="required">
					</textarea></div>
						</div>					
						<div class="formRow" style="float:left; clear:both; margin-top:20px;">
							<div id="clanstvoSubmit" style="margin-left:120px;"><input type="submit" class="submit inputButton" value="Pošalji"/></div>
						</div>
			</form>
			</div>
		</div>
 	</div>
</div>
