<script type="text/javascript">
$(function() {
	$('div#mainContainer').css('height', '1400px');
	$('div#rightBorder').css('height', '1440px');
	$('div#leftBorder').css('height', '1440px');
});
</script>

<div id="adminpanelNaslov" style="margin:15px;"><span>Prijava</span></div>

<div id="adminLogout">
		<a href="../prijaveall"><span id="adminpanelBack" style="margin-right:15px; font-size:12px;">Sve prijave</span></a>
	</div>

<div id="adminLogout" style="clear:both;">
		<span id="adminpanelBack" style="margin-right:15px; font-size:12px; ">Admin panel</span>
	</div>

<div class="areaText">

	<table width="600" border="0">
	  <tr>
		<td>Ime</td>
		<td><?php echo $row['Ime']; ?></td>
	  </tr>
	  <tr>
		<td>Prezime</td>
		<td><?php echo $row['Prezime']; ?></td>
	  </tr>
	  <tr>
		<td>Email</td>
		<td><?php echo $row['Email']; ?></td>
	  </tr>
	  <tr>
		<td>Sadržaj</td>
		<td><?php echo $row['Tip']; ?></td>
	  </tr>
	  <tr>
		<td>Usluga</td>
		<td><?php echo $row['Usluga']; ?></td>
	  </tr>
	  <tr>
		<td>Izlet u periodu</td>
		<td><?php echo $row['Polazak']; if($row['Polazak'] != '' && $row['Povratak'] != '') {echo " do ";} echo $row['Povratak']; ?>	</td>
	  </tr>
	  <tr>
		<td>Broj grupe vaših prijatelja</td>
		<td>	<?php $row['BrojPrijatelja']; ?></td>
	  </tr>
	  <tr>
		<td>Nepušač</td>
		<td><?php if($row['Nepusac'] == 1) { echo "DA";} else { echo "NE";} ?></td>
	  </tr>
	  <tr>
		<td>Posebna ishrana</td>
		<td><?php if($row['Ishrana'] == 1) { echo "DA";} else { echo "NE";} ?></td>
	  </tr>
	  <tr>
		<td>Opis ishrane</td>
		<td><?php echo str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $row['IshranaOpis']); ?></td>
	  </tr>
	  <tr>
		<td>Alergičar</td>
		<td><?php if($row['Alergicar'] == 1) { echo "DA";} else { echo "NE";} ?></td>
	  </tr>
	  <tr>
		<td>Opis alergije</td>
		<td><?php echo str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $row['AlergijaOpis']); ?></td>
	  </tr>
	  <tr>
		<td>Posebne želje</td>
		<td><?php if($row['Zelje'] == 1) { echo "DA";} else { echo "NE";} ?></td>
	  </tr>
	  <tr>
		<td>Opis želja</td>
		<td><?php echo str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $row['ZeljeOpis']); ?></td>
	  </tr>
	  <tr>
		<td>Željene destinacije</td>
		<td><?php echo str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $row['DestinacijeOpis']); ?></td>
	  </tr>
	</table>	
</div>
