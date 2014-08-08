<div id="adminpanel">
	<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>
	<div id="adminpanelNaslov"><span>Unošenje novih citybreaks</span><span id="opisAdmin">Popunite polja i unesite avanturu na stranicu</span></div>

<div class="unosForme">
<form method="post" name="citybreaks" enctype="multipart/form-data">
<input type="hidden" value="editcitybreaks" name="editcitybreaks"/>
<input type="hidden" value="<?php echo $row['Id']; ?>" name="citybreaksId"/>
<table width="806" height="593" border="0">
  <tr>
    <td width="160"  height="50">Naslov</td>
    <td width="636"><input type="text" name="naslov" value="<?php echo $row['Naslov']; ?>" size="60" /></td>
  </tr>
  <tr>
    <td width="160" height="348">Sadržaj</td>
    <td><textarea name="sadrzaj"  cols="80"  rows="20"><?php echo str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $row['Sadrzaj']); ?>	</textarea></td>
  </tr>
  <tr>
    <td width="160" height="50">Slika 1</td>
    <td><input type="file" name="slika[]" id="slika[]" size="40"/></td>
  </tr>
  <tr>
    <td width="160" height="50">Slika 2</td>
    <td><input type="file" name="slika[]" id="slika[]" size="40"/></td>
  </tr>
  <tr>
    <td width="160" height="50">Slika 3</td>
    <td><input type="file" name="slika[]" id="slika[]" size="40"/></td>
  </tr>
  <tr>
    <td width="160" height="50">Polazak</td>
    <td><input type="text" name="polazak" value="<?php echo $row['Polazak']; ?>" id="polazak"/></td>
  </tr>
  <tr>
    <td width="160" height="50">Povaratak</td>
    <td><input type="text" name="povratak" value="<?php echo $row['Dolazak']; ?>" id="povratak"/></td>
  </tr>
  <tr>
    <td></td>
    <td><div align="right" style="margin-right:100px;">
      <input type="submit" class="inputButton" value="Unesi"/>
    </div></td>
  </tr>
</table>

</form>

</div>

	
</div>