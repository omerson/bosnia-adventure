<div id="adminpanel">
	<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>
	<div id="adminpanelNaslov"><span>Administracija Pravilnik sekcije</span><span id="opisAdmin">Uredujte Pravilnik sekciju vašim klijentima</span></div>	

<div id="kombinacijaList" class="itemList">
<table width="631" border="0">
<form method="post" enctype="multipart/form-data"> 
<input type="hidden" value="editpravilnik" name="editpravilnik"/>
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
    <td></td>
    <td><div align="right" style="margin-right:100px;">
      <input type="submit" class="inputButton" value="Unesi"/>
    </div></td>
  </tr>
</form>
</table>
</div>

</div>