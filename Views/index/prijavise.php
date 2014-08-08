<script type="text/javascript">



</script>

<div class="areaText">
<div class="titleText">
			Prijavite se 
		</div>	
<form name="prijavaforma" method="post" id="rezervacijaform" enctype="multipart/form-data">
<input type="hidden" name="rezervacija" value="rezervacija">
  <table width="700" border="0">
    <tr>
      <td width="231" height="50">Ime</td>
      <td width="400">
	  	<div class="prijavaInput">
			<input type="text" name="ime" id="prijavaIme" class="required" />
		</div>       
	  </td>
    </tr>
    <tr>
      <td height="50" width="231">Prezime</td>
      <td>
		  <div class="prijavaInput">
			  <input type="text" name="prezime" id="prijavaPrezime" class="required" />
		  </div>		 
	 </td>
    </tr>
	 <tr>
      <td height="50" width="231">Email</td>
      <td>
		  <div class="prijavaInput">
			  <input type="text" name="email" id="prijavaEmail"  class="required email"/>
		  </div>		 
	 </td>
    </tr>  
	 <tr>
	   <td height="50" width="231">Sadržaj</td>
		<td>
			<select class="" name="tipUsluge" id="prijavaTipUsluge" style="width:145px;">
				
		<?php if($tipUsluge != "-Izaberite-"){?>
				<option>
		<?php   if($tipUsluge == 'smjestaj')
				echo 'Smještaj'; 
				else if($tipUsluge == 'kultura')
				echo 'Kulturni turizam'; 
				else if($tipUsluge == 'avantura')
				echo 'Avantura'; 
				else if($tipUsluge == 'city')
				echo 'City Breaks'; 
				else if($tipUsluge == 'rentacar')
				echo 'Rent-a-car'; 
				else if($tipUsluge == 'kombinacija')
				echo 'Kombinovane ture'; 
				else { ?>	
				<option>-Izaberite-</option>
				<option value="avantura">Avantura</option>
				<option value="kultura">Kulturni turizam</option>
				<option value="city">City Breaks</option>
				<option value="smjestaj">Smještaj</option>
				<option value="rentacar">Rent-a-car</option>
				<option value="kombinacija">Kombinovane ture			
				<?php }?>
	
				</option>
				
		<?php 	
		}
			  else { ?>	
				<option>-Izaberite-</option>
				<option value="avantura">Avantura</option>
				<option value="kultura">Kulturni turizam</option>
				<option value="city">City Breaks</option>
				<option value="smjestaj">Smještaj</option>
				<option value="rentacar">Rent-a-car</option>
				<option value="kombinacija">Kombinovane ture</option>			
				<?php }?>	
			</select>
		</td>
	 </tr>	
	 <tr>
      <td height="50" width="231">Usluga</td>
      <td>
	  	<div id="ajaxResult">
			<?php if(isset($id)){?>
		 	<select class="" name="usluga" id="prijavausluga" style="width:145px;">		 
				<option><?php echo $id;?></option>
			</select>	
			<?php }
			
			else if(isset($tipUsluge))
			{ 						 
				 if($tipUsluge == 'smjestaj'){
					$tip = $tipUsluge;
					require_once(MODEL_PATH.'getUsluge.php');
				 }
				 if($tipUsluge == 'kultura'){
					$tip = $tipUsluge;
					require_once(MODEL_PATH.'getUsluge.php');
				 }
				 if($tipUsluge == 'avantura'){
					$tip = $tipUsluge;
					require_once(MODEL_PATH.'getUsluge.php');
				 }
				 if($tipUsluge == 'city'){
					$tip = $tipUsluge;
					require_once(MODEL_PATH.'getUsluge.php');
				 }
				 if($tipUsluge == 'rentacar'){
					$tip = $tipUsluge;
					require_once(MODEL_PATH.'getUsluge.php');
				 }
				 if($tipUsluge == 'kombinacija'){
					$tip = $tipUsluge;
					require_once(MODEL_PATH.'getUsluge.php');
				 }		
			} 
			else
			{	
				echo '<select class="" name="usluga" id="prijavausluga" style="width:145px;">';
				echo '<option></option>';
				echo '</select>';
			}
			?>			
		</div>
	 </td>
    </tr>  
	
    <tr>
      <td height="50" width="231">Izlet u periodu</td>
      <td>
	  <div class="prijavaInput">
	  	<input type="text" name="periodod" value="<?php if(isset($polazak)) { echo $polazak; }?>" id="prijavaPeriodod"/>
        <span style="color:#656565; font-size:12px;">do</span>	 
	  	<input type="text" name="perioddo" id="prijavaPerioddo" value="<?php if(isset($povratak)) { echo $povratak; }?>"/></div><img src="../../Content/Images/AQUAINOTE.png" width="12" height="12" class="help" title="U kojem periodu vam najviše odgovara izvršavanje željene usluge"></img></td>
	  </td>
    </tr>
    <tr>
      <td height="50" width="231">Broj grupe vaših prijatelja</td>
      <td> <div class="prijavaInput">
	  	<input type="text" name="brojPrijatelja" id="brojPrijatelja" />
		</div>
         <img src="../../Content/Images/AQUAINOTE.png" width="12" height="12" class="help" title="Broj polaznika izleta ukoliko organizujete isti za grupu prijatelja"></img></td>
    </tr>    
    <tr>
      <td height="50" width="231">Nepušač</td>
      <td> 
	  	<div class="prijavaInput"><input type="checkbox" name="nepusaci" id="prijavaNepusac" <?php if($nepusac == "on"){?> checked="checked"<?php }?>/></div>
      </td>
    </tr>
	
	<tr>
      <td height="50" width="231">Posebna ishrana</td>
      <td>
	  	<div class="prijavaInput"><input type="checkbox" name="ishrana" id="prijavaIshrana" <?php  if($ishrana == "on"){?> checked="checked"<?php }?> /></div>
      </td>
    </tr>	
	
	<tr id="opisIshrana">
      <td height="50" width="231"><span style="width:231px;">Opišite ishranu</span></td>
      <td> <div class="prijavaInput"><textarea name="opisIshrana"></textarea></div>
         <img src="../../Content/Images/AQUAINOTE.png" width="12" height="12" class="help" title="Opišite vaše zahtjeve za posebnom ishranom"></img></td>
    </tr>
	<tr>
      <td height="50" width="231">Alergičar</td>
      <td>
	  	<div class="prijavaInput"><input type="checkbox" id="prijavaAlergicar" name="alergicar"  <?php  if($alergija == "on"){?> checked="checked"<?php }?> /></div>
      </td>
    </tr>
	
	<tr id="opisAlergije">
      <td height="50" width="231"><span style="width:231px;">Opišite alergije</span></td>
      <td> <div class="prijavaInput"><textarea name="opisAlergije"></textarea></div>
         <img src="../../Content/Images/AQUAINOTE.png" width="12" height="12" class="help" title="Navedite stvari na koje ste alergični"></img></td>
    </tr>
	
	<tr>
      <td height="50" width="231">Posebne želje</td>
      <td> <div class="prijavaInput"><input type="checkbox" id="prijavaZelje" name="zelje"  <?php  if($posebnePotrebe == "on"){?> checked="checked"<?php }?> /></div>
       </td>
    </tr>
	
	<tr id="posebneZelje">
      <td height="50" width="231"><span style="width:231px;">Opišite posebne želje</span></td>
      <td> <div class="prijavaInput"><textarea name="opisZelje"></textarea></div>
         <img src="../../Content/Images/AQUAINOTE.png" width="12" height="12" class="help" title="Molim vas navedite ako imate bilo kakve dodatne želje koje ce doprinjeti vašem užitku"></img></td>
    </tr>
			
    <tr>
      <td height="50 width="231"">Željene destinacije</td>
      <td> <div class="prijavaInput"><textarea name="zeljeneDestinacije"></textarea></div>
         <img src="../../Content/Images/AQUAINOTE.png" width="12" height="12" class="help" title="Molimo vas navedite poznata ili manje poznata vama zanimljiva mjesta koja biste željeli posjetiti tokom izleta"></img></td>
    </tr>        
    
  </table>
  <div id="prijavaSubmit">
	  <input type="submit"  class="inputButton" value="Prijavi se" />
  </div>
</form>
</div>
