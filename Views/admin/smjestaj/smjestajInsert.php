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
	<div id="adminpanelNaslov"><span>Unošenje novih smještaja</span><span id="opisAdmin">Popunite polja i unesite smještaj na stranicu</span></div>

<div class="unosForme">
<form method="post" name="smjestaj" enctype="multipart/form-data">
<input type="hidden" value="novasmjestaj" name="novasmjestaj"/>
<table width="806" border="0">
  <tr>
    <td width="700" >Naziv</td>
    <td width="400"><input type="text" name="naziv"  size="60" /></td>
  </tr>
  <tr>
    <td>Kratak opis</td>
    <td><textarea name="kratakopis"  cols="60"  rows="5"></textarea></td>
  </tr>
   <tr>
    <td>Vrsta objekta</td>
    <td>
		<select name="vrstaobjekta">
			<option>Hotel</option>
			<option>Motel</option>
			<option>Guest house</option>
		</select>
	</td>
  </tr>
  <tr>
    <td>Rad recepcije 24 sata</td>
    <td><input type="checkbox" name="recepcija24" /></td>
  </tr>
  <tr>
    <td>Restoran</td>
  	<td><input type="checkbox" name="restoran" /></td>
  </tr>
  <tr>
    <td>Bar</td>
     <td><input type="checkbox" name="bar" /></td>
  </tr>
  <tr>
    <td>Zvucno izolirane sobe</td>
     <td><input type="checkbox" name="zvucnaizolacija" /></td>
  </tr>
  <tr>
    <td>TV u sobama</td>
     <td><input type="checkbox" name="tv" /></td>
  </tr>
  <tr>
    <td>Grijanje</td>
     <td><input type="checkbox" name="grijanje" /></td>
  </tr>
  <tr>
    <td>Soba za nepučace</td>
     <td><input type="checkbox" name="nepusaci" /></td>
  </tr>
   <tr>
    <td>Obiteljske sobe</td>
     <td><input type="checkbox" name="obiteljskesobe" /></td>
  </tr>
   <tr>
    <td>Sef</td>
     <td><input type="checkbox" name="sef" /></td>
  </tr>
   <tr>
    <td>Skladište prtljaga</td>
     <td><input type="checkbox" name="skladisteprtljaga" /></td>
  </tr>
   <tr>
    <td>Klimatizacija</td>
     <td><input type="checkbox" name="klimatizacija" /></td>
  </tr>
   <tr>
    <td>Sauna</td>
     <td><input type="checkbox" name="sauna" /></td>
  </tr>
   <tr>
    <td>Fitness center</td>
     <td><input type="checkbox" name="fitness" /></td>
  </tr>
   <tr>
    <td>Solarij</td>
     <td><input type="checkbox" name="solarij" /></td>
  </tr>
   <tr>
    <td>Spa/Wellness Centar</td>
     <td><input type="checkbox" name="wellness" /></td>
  </tr>
   <tr>
    <td>Jacuzzi</td>
     <td><input type="checkbox" name="jacuzzi" /></td>
  </tr>
   <tr>
    <td>Turska/parna kupelj</td>
     <td><input type="checkbox" name="turskokupatilo" /></td>
  </tr>
   <tr>
    <td>Hammam</td>
     <td><input type="checkbox" name="hammam" /></td>
  </tr>
   <tr>
    <td>Zatvoreni bazen</td>
     <td><input type="checkbox" name="zatvorenibazen" /></td>
  </tr>
   <tr>
    <td>Ukupan broj soba</td>
     <td><input type="text" name="brojsoba" /></td>
  </tr>
  <tr>
    <td>Jednokrevetne</td>
     <td><input type="checkbox" name="jednokrevetne" /></td>
  </tr>
   <tr>
    <td>Cijena jednokrevetnih</td>
     <td><input type="text" name="jednokrevetnecijena" /></td>
  </tr>
  <tr>
    <td>Dvokrevetne</td>
     <td><input type="checkbox" name="dvokrevetne" /></td>
  </tr>
   <tr>
    <td>Cijena dvokrevetnih</td>
     <td><input type="text" name="dvokrevetnecijena" /></td>
  </tr>
   <tr>
    <td>Dvokrevetne sa odvojenim krevetima</td>
     <td><input type="checkbox" name="sobeodvojeno" /></td>
  </tr>
   <tr>
    <td>Trokrevetne</td>
     <td><input type="checkbox" name="trokrevetne" /></td>
  </tr>
  <tr>
    <td>Cijena trekrevetnih</td>
     <td><input type="text" name="trokrevetnecijena" /></td>
  </tr>
   <tr>
    <td>Četverokrevetne</td>
     <td><input type="checkbox" name="cetverokrevetne" /></td>
  </tr>
  <tr>
    <td>Cijena četverokrevetnih</td>
     <td><input type="text" name="cetverokrevetnecijena" /></td>
  </tr>
   <tr>
    <td>Apartmani</td>
     <td><input type="checkbox" name="apartmani" /></td>
  </tr>
   <tr>
    <td>Cijena apartmana</td>
     <td><input type="text" name="apartmanicijena" /></td>
  </tr>
   <tr>
    <td>Posluga u sobu</td>
     <td><input type="checkbox" name="poslugausobu" /></td>
  </tr>
   <tr>
    <td>Praonica rublja</td>
     <td><input type="checkbox" name="veseraj" /></td>
  </tr>
   <tr>
    <td>Usluga peglanja</td>
     <td><input type="checkbox" name="peglanje" /></td>
  </tr>
   <tr>
    <td>Iznajmljivanje automobila</td>
     <td><input type="checkbox" name="rentacar" /></td>
  </tr>
   <tr>
    <td>Fax/Kopiranje</td>
     <td><input type="checkbox" name="fax" /></td>
  </tr>
     <tr>
    <td>Konferencijske sobe</td>
     <td><input type="checkbox" name="konferencija" /></td>
  </tr>
  <tr>
    <td>Prevoz iz/do zracne luke</td>
     <td><input type="checkbox" name="prevoz" /></td>
  </tr>
     <tr>
    <td>Hemijska cistionica</td>
     <td><input type="checkbox" name="henijska" /></td>
  </tr>
     <tr>
    <td>Dorucak u sobi</td>
     <td><input type="checkbox" name="dorucakusobi" /></td>
  </tr>
     <tr>
    <td>Mjenjacnica</td>
     <td><input type="checkbox" name="mjenjacnica" /></td>
  </tr>
     <tr>
    <td>Dostupnost u cijelom objektu</td>
     <td><input type="checkbox" name="internet" /></td>
  </tr>
     <tr>
    <td>Placanje</td>
     <td><input type="checkbox" name="internetplacanje" /></td>
  </tr>
     <tr>
    <td>Parking u sklopu objekta</td>
     <td><input type="checkbox" name="parkingobjekat" /></td>
  </tr>
     <tr>
    <td>Parking u blizini objekta</td>
     <td><input type="checkbox" name="parkingblizina" /></td>
  </tr>
     <tr>
    <td>Vrijeme prijave (Check in)</td>
     <td><input type="text" name="checkin" /></td>
  </tr>
     <tr>
    <td>Vrijeme odjave (Check out)</td>
     <td><input type="text" name="checkout" /></td>
  </tr>
     <tr>
    <td>Mogucnost otkazivanje sobe</td>
     <td><input type="checkbox" name="otkazivanje" /></td>
  </tr>
     <tr>
    <td>Dodatni kreveti za djecu</td>
     <td><input type="checkbox" name="kravetzadjecu" /></td>
  </tr>
     <tr>
    <td>Dozvoljen boravak kucnih ljubimaca</td>
     <td><input type="checkbox" name="kucniljubimci" /></td>
  </tr>
     <tr>
    <td>Prihvacanje kreditne kartice: American Express, Visa, Euro/Mastercard, Maestro</td>
     <td><input type="checkbox" name="kreditnekartice" /></td>
  </tr> 
   <tr>
    <td>Dodatni komentar</td>
    <td width="636"><textarea name="komentar"  cols="60"  rows="5"></textarea></td>
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