<div style="margin-top:20px; margin-left:10px;">
<form method="post" name="unesiSliku" id="unesiSliku" enctype="multipart/form-data">
	<input type="hidden" value="izmjeniSliku<?php echo $tip;?>" name="izmjeniSliku<?php echo $tip;?>"/>
	<input type="hidden" value="<?php echo $id;?>" name="id"/>
	<table width="438" border="0">
	  <tr>
		<td>Izmjeni sliku</td>
		<td><input type="file" name="image" size="40"/></td>
	  </tr>
	  <tr>
		<td height="94">&nbsp;</td>
		<td>
		  
	       <div align="right" style="padding-right:25px;">
	          <input name="submit" class="inputButton"  type="submit" value="Unesi"/>
          </div></td></tr>
	</table>
</form>

</div>
