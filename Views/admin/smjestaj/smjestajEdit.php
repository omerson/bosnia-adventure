<script type="text/javascript">
$(function() {
	$('div#mainContainer').css('height', '2000px');
	$('div#rightBorder').css('height', '2040px');
	$('div#leftBorder').css('height', '2040px');
});
</script>
<div id="adminpanel">
	<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>
	<div id="adminpanelNaslov"><span>Unošenje novih smještaj</span><span id="opisAdmin">Popunite polja i unesite smještaj na stranicu</span></div>

<div class="unosForme">
<form method="post" name="smjestaj" enctype="multipart/form-data">
<input type="hidden" value="editsmjestaj" name="editsmjestaj"/>
<input type="hidden" value="<?php echo $row['Id']; ?>" name="smjestajId"/>
<table width="806" border="0">
  <tr>
    <td width="700" >Naziv</td>
    <td width="400"><input type="text" name="naziv"  size="60" value="<?php echo htmlspecialchars($row['Naslov']); ?>" /></td>
  </tr>
  <tr>
    <td>Kratak opis</td>
    <td><textarea name="kratakopis"  cols="60"  rows="5"><?php echo str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $row['KratakOpis']); ?>	</textarea></td>
  </tr>
   <tr>
    <td>Vrsta objekta</td>
    <td>
	<select name="vrstaobjekta">
		<option <?php if($row['TipSmjestaja'] == "Hotel"){?> selected="selected"<?php }?>>Hotel</option>
		<option <?php if($row['TipSmjestaja'] == "Motel"){?> selected="selected"<?php }?>>Motel</option>
		<option <?php if($row['TipSmjestaja'] == "Guest house"){?> selected="selected"<?php }?>>Guest house</option>
	</select>
	</td>
  </tr>
  <tr>
    <td>Rad recepcije 24 sata</td>
    <td><input type="checkbox" <?php if($row['Recepcija24'] == "1"){?> checked="checked"<?php }?> name="recepcija24" /></td>
  </tr>
  <tr>
    <td>Restoran</td>
  	<td><input type="checkbox" <?php if($row['Restoran'] == "1"){?> checked="checked"<?php }?> name="restoran" /></td>
  </tr>
  <tr>
    <td>Bar</td>
     <td><input type="checkbox" <?php if($row['Bar'] == "1"){?> checked="checked"<?php }?> name="bar" /></td>
  </tr>
  <tr>
    <td>Zvucno izolirane sobe</td>
     <td><input type="checkbox" <?php if($row['ZvucnaIzolacija'] == "1"){?> checked="checked"<?php }?> name="zvucnaizolacija" /></td>
  </tr>
  <tr>
    <td>TV u sobama</td>
     <td><input type="checkbox" <?php if($row['Tv'] == "1"){?> checked="checked"<?php }?> name="tv" /></td>
  </tr>
  <tr>
    <td>Grijanje</td>
     <td><input type="checkbox" <?php if($row['Grijanje'] == "1"){?> checked="checked"<?php }?> name="grijanje" /></td>
  </tr>
  <tr>
    <td>Soba za nepučace</td>
     <td><input type="checkbox" <?php if($row['SobeNepusaci'] == "1"){?> checked="checked"<?php }?> name="nepusaci" /></td>
  </tr>
   <tr>
    <td>Obiteljske sobe</td>
     <td><input type="checkbox" <?php if($row['ObiteljskeSobe'] == "1"){?> checked="checked"<?php }?> name="obiteljskesobe" /></td>
  </tr>
   <tr>
    <td>Sef</td>
     <td><input type="checkbox" <?php if($row['Sef'] == "1"){?> checked="checked"<?php }?> name="sef" /></td>
  </tr>
   <tr>
    <td>Skladište prtljaga</td>
     <td><input type="checkbox" <?php if($row['SkladistePrtljaga'] == "1"){?> checked="checked"<?php }?> name="skladisteprtljaga" /></td>
  </tr>
   <tr>
    <td>Klimatizacija</td>
     <td><input type="checkbox" <?php if($row['Klima'] == "1"){?> checked="checked"<?php }?> name="klimatizacija" /></td>
  </tr>
   <tr>
    <td>Sauna</td>
     <td><input type="checkbox" <?php if($row['Sauna'] == "1"){?> checked="checked"<?php }?> name="sauna" /></td>
  </tr>
   <tr>
    <td>Fitness center</td>
     <td><input type="checkbox" <?php if($row['Fitnes'] == "1"){?> checked="checked"<?php }?> name="fitness" /></td>
  </tr>
   <tr>
    <td>Solarij</td>
     <td><input type="checkbox" <?php if($row['Solarij'] == "1"){?> checked="checked"<?php }?> name="solarij" /></td>
  </tr>
   <tr>
    <td>Spa/Wellness Centar</td>
     <td><input type="checkbox" <?php if($row['Wellnes'] == "1"){?> checked="checked"<?php }?> name="wellness" /></td>
  </tr>
   <tr>
    <td>Jacuzzi</td>
     <td><input type="checkbox" <?php if($row['Jacuzzi'] == "1"){?> checked="checked"<?php }?> name="jacuzzi" /></td>
  </tr>
   <tr>
    <td>Turska/parna kupelj</td>
     <td><input type="checkbox" <?php if($row['TurskoKupatilo'] == "1"){?> checked="checked"<?php }?> name="turskokupatilo" /></td>
  </tr>
   <tr>
    <td>Hammam</td>
     <td><input type="checkbox" <?php if($row['Hammam'] == "1"){?> checked="checked"<?php }?> name="hammam" /></td>
  </tr>
   <tr>
    <td>Zatvoreni bazen</td>
     <td><input type="checkbox" <?php if($row['ZatvoreniBazen'] == "1"){?> checked="checked"<?php }?> name="zatvorenibazen" /></td>
  </tr>
   <tr>
    <td>Ukupan broj soba</td>
     <td>
	 <input type="text" name="brojsoba" value="<?php echo $row['BrojSoba']; ?>"  />
  </tr>
  <tr>
    <td>Jednokrevetne</td>
     <td><input type="checkbox" name="jednokrevetne" <?php if($row['Jednokrevetne'] == "1"){?> checked="checked"<?php }?> /></td>
  </tr>
   <tr>
    <td>Cijena jednokrevetnih</td>
     <td><input type="text" name="jednokrevetnecijena" value="<?php echo $row['CijenaJednokrevetnih']; ?>" /></td>
  </tr>
  <tr>
    <td>Dvokrevetne</td>
     <td><input type="checkbox" name="dvokrevetne" <?php if($row['Dvokrevetne'] == "1"){?> checked="checked"<?php }?> /></td>
  </tr>
   <tr>
    <td>Cijena dvokrevetnih</td>
     <td><input type="text" name="dvokrevetnecijena" value="<?php echo $row['CijenaDvokrevetnih']; ?>" /></td>
  </tr>
   <tr>
    <td>Dvokrevetne sa odvojenim krevetima</td>
     <td><input type="checkbox" <?php if($row['DvokrevetneOdvojeno'] == "1"){?> checked="checked"<?php }?> name="sobeodvojeno" /></td>
  </tr>
  <tr>
    <td>Trokrevetne</td>
     <td><input type="checkbox" name="trokrevetne" <?php if($row['Trokrevetne'] == "1"){?> checked="checked"<?php }?> name="trokrevetne" /></td>
  </tr>
  <tr>
    <td>Cijena trekrevetnih</td>
     <td><input type="text" name="trokrevetnecijena" value="<?php echo $row['CijenaTrokrevetnih']; ?>"  /></td>
  </tr>
   <tr>
    <td>Četverokrevetne</td>
     <td><input type="checkbox" name="cetverokrevetne" <?php if($row['Cetverokrevetne'] == "1"){?> checked="checked"<?php }?> /></td>
  </tr>
  <tr>
    <td>Cijena četverokrevetnih</td>
     <td><input type="text" name="cetverokrevetnecijena" value="<?php echo $row['CijenaCetverokrevetnih']; ?>"  /></td>
  </tr>
   <tr>
    <td>Apartmani</td>
     <td><input type="checkbox" name="apartmani" <?php if($row['Apartmani'] == "1"){?> checked="checked"<?php }?> /></td>
  </tr>
   <tr>
    <td>Cijena apartmana</td>
     <td><input type="text" name="apartmanicijena" value="<?php echo $row['CijenaApartmana']; ?>"  /></td>
  </tr>
   <tr>
    <td>Trokrevetne</td>
     <td><input type="checkbox" <?php if($row['Trokrevetne'] == "1"){?> checked="checked"<?php }?> name="trokrevetne" /></td>
  </tr>
   <tr>
    <td>Četverokrevetne</td>
     <td><input type="checkbox" <?php if($row['Cetverokrevetne'] == "1"){?> checked="checked"<?php }?> name="cetverokrevetne" /></td>
  </tr>
   <tr>
    <td>Posluga u sobu</td>
     <td><input type="checkbox" <?php if($row['PoslugaUSobu'] == "1"){?> checked="checked"<?php }?> name="poslugausobu" /></td>
  </tr>
   <tr>
    <td>Praonica rublja</td>
     <td><input type="checkbox" <?php if($row['Veseraj'] == "1"){?> checked="checked"<?php }?> name="veseraj" /></td>
  </tr>
   <tr>
    <td>Usluga peglanja</td>
     <td><input type="checkbox" <?php if($row['UslugaPeglanja'] == "1"){?> checked="checked"<?php }?> name="peglanje" /></td>
  </tr>
   <tr>
    <td>Iznajmljivanje automobila</td>
     <td><input type="checkbox" <?php if($row['RentACar'] == "1"){?> checked="checked"<?php }?> name="rentacar" /></td>
  </tr>
   <tr>
    <td>Fax/Kopiranje</td>
     <td><input type="checkbox" <?php if($row['FaxKopiranje'] == "1"){?> checked="checked"<?php }?> name="fax" /></td>
  </tr>
     <tr>
    <td>Konferencijske sobe</td>
     <td><input type="checkbox" <?php if($row['KonferencijskeSobe'] == "1"){?> checked="checked"<?php }?> name="konferencija" /></td>
  </tr>
  <tr>
    <td>Prevoz iz/do zracne luke</td>
     <td><input type="checkbox" <?php if($row['PrevozOdDoZracneLuke'] == "1"){?> checked="checked"<?php }?> name="prevoz" /></td>
  </tr>
     <tr>
    <td>Hemijska cistionica</td>
     <td><input type="checkbox" <?php if($row['HemijskaCistiona'] == "1"){?> checked="checked"<?php }?> name="henijska" /></td>
  </tr>
     <tr>
    <td>Dorucak u sobi</td>
     <td><input type="checkbox" <?php if($row['DorucakUSobi'] == "1"){?> checked="checked"<?php }?> name="dorucakusobi" /></td>
  </tr>
     <tr>
    <td>Mjenjacnica</td>
     <td><input type="checkbox" <?php if($row['Mjenjacnica'] == "1"){?> checked="checked"<?php }?> name="mjenjacnica" /></td>
  </tr>
     <tr>
    <td>Dostupnost u cijelom objektu</td>
     <td><input type="checkbox" <?php if($row['Internet'] == "1"){?> checked="checked"<?php }?> name="internet" /></td>
  </tr>
     <tr>
    <td>Placanje</td>
     <td><input type="checkbox" <?php if($row['InternetPlacanje'] == "1"){?> checked="checked"<?php }?> name="internetplacanje" /></td>
  </tr>
     <tr>
    <td>Parking u sklopu objekta</td>
     <td><input type="checkbox" <?php if($row['ParkingUnutar'] == "1"){?> checked="checked"<?php }?> name="parkingobjekat" /></td>
  </tr>
     <tr>
    <td>Parking u blizini objekta</td>
     <td><input type="checkbox" <?php if($row['ParkingUblizini'] == "1"){?> checked="checked"<?php }?> name="parkingblizina" /></td>
  </tr>
     <tr>
    <td>Vrijeme prijave (Check in)</td>
     <td><input type="text" name="checkin" value="<?php echo $row['CheckIn']; ?>" /></td>
  </tr>
     <tr>
    <td>Vrijeme odjave (Check out)</td>
     <td><input type="text" name="checkout" value="<?php echo $row['CheckOut']; ?>" /></td>
  </tr>
     <tr>
    <td>Mogucnost otkazivanje sobe</td>
     <td><input type="checkbox" <?php if($row['OtkazivanjeSobe'] == "1"){?> checked="checked"<?php }?> name="otkazivanje" /></td>
  </tr>
     <tr>
    <td>Dodatni kreveti za djecu</td>
     <td><input type="checkbox" <?php if($row['KrevetZaDjecu'] == "1"){?> checked="checked"<?php }?> name="kravetzadjecu" /></td>
  </tr>
     <tr>
    <td>Dozvoljen boravak kucnih ljubimaca</td>
     <td><input type="checkbox" <?php if($row['KucniLjubimci'] == "1"){?> checked="checked"<?php }?> name="kucniljubimci" /></td>
  </tr>
     <tr>
    <td>Prihvacanje kreditne kartice: American Express, Visa, Euro/Mastercard, Maestro</td>
     <td><input type="checkbox" <?php if($row['KreditneKartice'] == "1"){?> checked="checked"<?php }?> name="kreditnekartice" /></td>
  </tr> 
   <tr>
    <td>Dodatni komentar</td>
    <td width="636"><textarea name="komentar"  cols="60"  rows="5"><?php echo str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $row['DodatniKomentar']); ?>	</textarea></td>
  </tr>   
  <tr>
    <td>Slika 1</td>
    <td><input type="file" name="slika[]" id="slika[]" size="40"/></td>
  </tr>
  <tr>
    <td>Slika 2</td>
    <td><input type="file" name="slika[]" id="slika[]" size="40"/></td>
  </tr>
  <tr>
    <td>Slika 3</td>
    <td><input type="file" name="slika[]" id="slika[]" size="40"/></td>
  </tr>  
  <tr>
    <td>Slika 4</td>
    <td><input type="file" name="slika[]" id="slika[]" size="40"/></td>
  </tr>  
  <tr>
    <td></td>
    <td><div align="right" style="margin-right:100px; margin-top:50px;">
      <input type="submit" class="inputButton"  value="Unesi"/>
    </div></td>
  </tr>
</table>

</form>

</div>

	
</div>