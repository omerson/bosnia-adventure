﻿<div id="adminpanel">
	<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>
	<div id="adminpanelNaslov"><span>Unošenje novih avantura</span><span id="opisAdmin">Popunite polja i unesite avanturu na stranicu</span></div>

<div class="unosForme">
<form method="post" name="avantura" enctype="multipart/form-data">
<input type="hidden" value="novaavantura" name="novaavantura"/>
<table width="806" height="593" border="0">
  <tr>
    <td width="160"  height="50">Naslov</td>
    <td width="636"><input type="text" name="naslov"  size="60" /></td>
  </tr>
  <tr>
    <td width="160" height="348">Sadržaj</td>
    <td><textarea name="sadrzaj"  cols="80"  rows="20"></textarea></td>
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
    <td><input type="text" name="polazak" id="polazak"/></td>
  </tr>
  <tr>
    <td width="160" height="50">Povaratak</td>
    <td><input type="text" name="povratak" id="povratak"/></td>
  </tr>
  <tr>
    <td></td>
    <td><div align="right" style="margin-right:100px;">
      <input type="submit" class="inputButton"  value="Unesi"/>
    </div></td>
  </tr>
</table>

</form>

</div>

	
</div>