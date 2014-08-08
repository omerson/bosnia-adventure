<div id="adminpanel">
	<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>
	<div id="adminpanelNaslov"><span>Administracija kontakt sekcije</span><span id="opisAdmin">Uredujte kontakt sekciju vasim klijentima</span></div>	

<div id="kombinacijaList" class="itemList">
<table width="631" border="0">
<form method="post" enctype="multipart/form-data"> 
<input type="hidden" value="editkontakt" name="editkontakt"/>	
  <tr>
    <td width="160" height="50">Adresa</td>
    <td><input type="text" name="adresa"size="40" value="<?php echo $row['adresa'];?>"/></td>
  </tr>
  <tr>
    <td width="160" height="50">Telefon</td>
    <td><input type="text" name="telefon" size="40" value="<?php echo $row['telefon'];?>"/></td>
  </tr>
  <tr>
    <td width="160" height="50">Email</td>
    <td><input type="text" name="email" size="40" value="<?php echo $row['email'];?>"/></td>
  </tr>
  <tr>
    <td width="160" height="50">Facebook</td>
    <td><input type="text" name="facebook" size="40" value="<?php echo $row['facebook'];?>"/></td>
  </tr>
  <tr>
    <td width="160" height="50">Twitter</td>
    <td><input type="text" name="twitter" size="40" value="<?php echo $row['twitter'];?>"/></td>
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