<div id="adminpanel">
	<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>
	<div id="adminpanelNaslov"><span>Administracija citybreaks</span><span id="opisAdmin">Uredujte postojece avanture ili unesite nove</span></div>
	
<div class="noviUnos" id="novaCitybreaks">
Novi unos
</div>

<div id="citybreaksList" class="itemList">
<table width="631" border="0">
<?php 

if($foundCitybreaks == null)
{
	?>
	<tr>
    	<td width="532">Nema unosa</td>
    </tr>
	<?php 
	
}
else
{
while($rows = mysql_fetch_array($foundCitybreaks)){ 
?>
  <tr>
    <td width="532"><a href="../citybreaksadmin/<?php echo $rows['Id']; ?>"><span class="naslovi"><?php echo $rows['Naslov']; ?></span></a></td>
	
	<td width="532"><a href="http://bosnia-adventure.ba/citybreaksimagesadmin/<?php echo $rows['Id']; ?>"><span class="naslovi">Slike</span></a></td>
	
    <td width="42"><a id="delete" href="../citybreaksalladmin"><span class="brisanje" onclick="confirmDeleteCitybreaks('<?php echo $rows['Id']; ?>')">Izbriši</span></a></td>
  </tr>


<?php 
}
}
?>

</table>

</div>
<?php
if($foundCitybreaks != null)
{
 ?>
<div class="pager">
	<?php //echo $pager->renderFullNav(); 
		
		$numberOfCitybreaks = (int)$numberOfCitybreaks;
		$perPage = (int)$perPage;
		$numOfLinks = ((int) ($numberOfCitybreaks	/$perPage)) + 1;		
		$idPlus = $id+1;	
		$idMinus = $id-1;		
	?>
	
	<?php 
	if($id == 0 || $id==1){				
	?>
	
	<?php 
	}
	else	{				
	?>
	<a href="../citybreaksalladmin/1">Prva </a>
	<a href="../citybreaksalladmin/<?php echo $idMinus?>"><</a>
		<?php 
		}
		for($i = 1; $i<=$numOfLinks; $i++){
		
			if($i == $id){	
			?>		
				<a href="../citybreaksalladmin/<?php echo $i?>"><u><?php echo $i?></u></a>	
				<?php 
			}
			else{
			?>
				<a href="../citybreaksalladmin/<?php echo $i?>"><?php echo $i?></a>	
			<?php 
			}
		
		}
		
		?>
		
		
		<?php 
		if((int)$id == $numOfLinks){				
		?>
		
		<?php 
		}
		else	{				
		?>
		<a href="../citybreaksalladmin/<?php echo $idPlus?>">></a>
		<a href="../citybreaksalladmin/<?php echo $numOfLinks?>"> Zadnja</a>
		<?php 
			}
		?>	
</div>
	<?php 
	}
?>	
</div>