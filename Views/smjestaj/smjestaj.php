<script type="text/javascript">
$(function() {
	$('div#mainContainer').css('height', '1400px');
	$('div#rightBorder').css('height', '1440px');
	$('div#leftBorder').css('height', '1440px');
});
</script>

<div class="areaText">
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
		<div id="onamaImg" class="areaImg">
		<?php if ($row['ImgPath4'] != ""){?>	
			<img src="<?php echo APP_ROOT?><?php echo $row['ImgPath4']; ?>" class="bgmaximage" height="200"  width="300"/>	
		<?php }else{?>
			<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="200"  width="300"/>	
		<?php }?>
		</div>		
		
		<div id="moreImages" style="font-weight:bold; margin-left:75px;">
		<a href="<?php echo $row['Id']?>/images" >Više slika</a>		
		</div>
	</div>
	
	<div class="areaRight">
		<div class="titleText">
			<div style="float:left;">
				<?php echo $row['TipSmjestaja']." "; ?><?php echo $row['Naslov']; ?>
			</div>
			<div style="float:right;">
			<form method="post">
			<input type="hidden" value="rezervisismjestaj" name="rezervisismjestaj" />
			<input type="hidden" value="<?php echo $row['Naslov']?>" name="id" />
            <input type="submit" id="prijavise" class="inputButton"  value="Rezerviši"/>
		   </form>
			</div>
		</div>			
		
		<div class="contentText" style="clear:both;">
			<?php echo str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $row['KratakOpis']); ?><br/><br/>				
		</div>
		
		<div class="contentText">
		<div style="float:left">
			<div class="uslugeLeft">
				<span class="kategorije">Opšte usluge:</span><br/>
				<?php 						
					if($row['Restoran'] == 1)
						echo "Restoran"."<br/>";	
					if($row['Recepcija24'] == 1)
						echo "Rad recepcije 24 sata"."<br/>";
					if($row['Bar'] == 1)
						echo "Bar"."<br/>";
					if($row['ZvucnaIzolacija'] == 1)
						echo "Zvučna izolacija"."<br/>";
					if($row['Tv'] == 1)
						echo "TV"."<br/>";
					if($row['Grijanje'] == 1)
						echo "Grijanje"."<br/>";
					if($row['SobeNepusaci'] == 1)
						echo "Sobe za nepučace"."<br/>";
					if($row['ObiteljskeSobe'] == 1)
						echo "Obiteljske sobe"."<br/>";
					if($row['Sef'] == 1)
						echo "Sef"."<br/>";
					if($row['SkladistePrtljaga'] == 1)
						echo "Skladište prtljage"."<br/>";
					if($row['Klima'] == 1)
						echo "Klimatizacija"."<br/>";
					?><br/>
			</div>
			<div class="uslugeLeft">
				<span class="kategorije">Aktivnosti:</span><br/>
				<?php 	
					if($row['Sauna'] == 1)
						echo "Sauna"."<br/>";
					if($row['Fitnes'] == 1)
						echo "Fitness cenatar"."<br/>";
					if($row['Solarij'] == 1)
						echo "Solarij"."<br/>";
					if($row['Wellnes'] == 1)
						echo "Spa/Wellness Centar"."<br/>";	
					if($row['Solarij'] == 1)
						echo "Solarij"."<br/>";
					if($row['Jacuzzi'] == 1)
						echo "Jacuzzi"."<br/>";
					if($row['TurskoKupatilo'] == 1)
						echo "Turska/parna kupelj"."<br/>";
					if($row['Hammam'] == 1)
						echo "Hammam"."<br/>";
					if($row['ZatvoreniBazen'] == 1)
						echo "Zatvoreni bazen"."<br/>";
										
				?><br/>
			</div>
			<div class="uslugeLeft">
				<span class="kategorije">Sobe:</span><br/>
				<?php 	
					if($row['BrojSoba'] != "")
						echo "Ukupan broj soba: ".$row['BrojSoba']."<br/>";
					if($row['Jednokrevetne'] == 1)
						echo "Jednokrevetne "."<br/>";
					if($row['CijenaJednokrevetnih'] != "" && $row['Jednokrevetne'] == 1)
						echo "Cijena: ".$row['CijenaJednokrevetnih']."<br/>";
					if($row['Dvokrevetne'] == 1)
						echo "Dvokrevetne "."<br/>";
					if($row['CijenaDvokrevetnih'] != "" && $row['Dvokrevetne'] == 1)
						echo "Cijena: ".$row['CijenaDvokrevetnih']."<br/>";
					if($row['DvokrevetneOdvojeno'] == 1)
						echo "Dvokrevetna sa odvojenim krevetima"."<br/>";
					if($row['Trokrevetne'] == 1)
						echo "Trokrevetne "."<br/>";
					if($row['CijenaTrokrevetnih'] != "" && $row['Trokrevetne'] == 1)
						echo "Cijena: ".$row['CijenaTrokrevetnih']."<br/>";
					if($row['Cetverokrevetne'] == 1)
						echo "Četverokrevetne "."<br/>";	
					if($row['CijenaCetverokrevetnih'] != "" && $row['Cetverokrevetne'] == 1)
						echo "Cijena: ".$row['CijenaCetverokrevetnih']."<br/>";
					if($row['Apartmani'] == 1)
						echo "Apartmani "."<br/>";	
					if($row['CijenaApartmana'] != "" && $row['Apartmani'] == 1)
						echo "Cijena: ".$row['CijenaApartmana']."<br/>";
				?><br/>
			</div>
			</div>
			<div style="float:left">
				<div class="uslugeLeft">
					<span class="kategorije">Usluge:</span><br/>
					<?php 						
						if($row['PoslugaUSobu'] == 1)
							echo "Posluga u sobu"."<br/>";
						if($row['Veseraj'] == 1)
							echo "Praonica rublja"."<br/>";
						if($row['UslugaPeglanja'] == 1)
							echo "Usluga peglanja"."<br/>";	
						if($row['RentACar'] == 1)
							echo "Iznajmljivanje automobila"."<br/>";
						if($row['FaxKopiranje'] == 1)
							echo "Fax/Kopiranje"."<br/>";
						if($row['KonferencijskeSobe'] == 1)
							echo "Konferencijske sobe"."<br/>";	
						if($row['PrevozOdDoZracneLuke'] == 1)
							echo "Prevoz iz/do zračne luke"."<br/>";
						if($row['HemijskaCistiona'] == 1)
							echo "Hemijska čistiona"."<br/>";
						if($row['DorucakUSobi'] == 1)
							echo "Doručak u sobi"."<br/>";	
						if($row['Mjenjacnica'] == 1)
							echo "Mjenjačnica"."<br/>";	
					?><br/>
				</div>
				<div class="uslugeLeft">
					<span class="kategorije">Internet:</span><br/>
					<?php 						
						if($row['Internet'] == 1)
							echo "Dostupnost u cijelom objektu"."<br/>";
						if($row['InternetPlacanje'] == 1)
							echo "Sa naplatom"."<br/>";					
					?><br/>
					
					<span class="kategorije">Parking:</span><br/>
					<?php 						
						if($row['ParkingUnutar'] == 1)
							echo "Parking u sklopu objekta"."<br/>";
						if($row['ParkingUblizini'] == 1)
							echo "Parking u blizini objekta"."<br/>";					
					?><br/>
				</div>				
			</div>
			<div  style="float:left; clear:both;">
				<div class="uslugeLeft" style="min-width:500px;">				
					<span class="kategorije">Pravila:</span><br/>
					<?php 	
						if($row['CheckIn'] != "")					
							echo "Vrijeme prijave(Check in): ".$row['CheckIn']."<br/>";;
						if($row['CheckOut'] != "")
							echo "Vrijeme odjave(Check out): ".$row['CheckOut']."<br/>";
						if($row['OtkazivanjeSobe'] == 1)
							echo "Mogucnost otkazivanja sobe"."<br/>";;
						if($row['KrevetZaDjecu'] == 1)
							echo " Dodatni kreveti za djecu"."<br/>";	
						if($row['KucniLjubimci'] == 1)
							echo "Dozvoljen boravak kucnih ljubimaca"."<br/>";
						if($row['KreditneKartice'] == 1)
							echo "Prihvaćene kreditne kartice:American Express, Visa, Euro/MasterCard, Maestro"."<br/>";										
					?><br/>
				</div>
			</div>
		</div>
		<div style="float:left; clear:both;">	
			<span class="kategorije">Dodatni komentar:</span><br/>		
			<?php echo str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $row['DodatniKomentar']); ?><br/><br/>	
		</div>
 	</div>
</div>
