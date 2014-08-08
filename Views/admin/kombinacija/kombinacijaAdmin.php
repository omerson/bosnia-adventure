<div id="adminpanel">
	<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>
	<div id="adminpanelNaslov"><span>Administracija kombinacija</span><span id="opisAdmin">Uredujte postojeće avanture ili unesite nove</span></div>
	
<div class="noviUnos" id="novaKombinacija">
Novi unos
</div>

<div id="kombinacijaList" class="itemList">
<table width="631" border="0">
<?php 

if($foundKombinacija == null)
{
	?>
	<tr>
    	<td width="532">Nema unosa</td>
    </tr>
	<?php 
	
}
else
{
while($rows = mysql_fetch_array($foundKombinacija)){ 
?>
  <tr>
    <td width="532"><a href="../kombinacijaadmin/<?php echo $rows['Id']; ?>"><span class="naslovi"><?php echo $rows['Naslov']; ?></span></a></td>
	
	<td width="532"><a href="http://bosnia-adventure.ba/kombinacijaimagesadmin/<?php echo $rows['Id']; ?>"><span class="naslovi">Slike</span></a></td>
	
    <td width="42"><a id="delete" href="../kombinacijaalladmin"><span class="brisanje" onclick="confirmDeleteKombinacija('<?php echo $rows['Id']; ?>')">Izbriši</span></a></td>
  </tr>


<?php 
}
}
?>

</table>

</div>
<?php
if($foundKombinacija != null)
{
 ?>
<div class="pager">
	<?php //echo $pager->renderFullNav(); 
		
		$numberOfKombinacija = (int)$numberOfKombinacija;
		$perPage = (int)$perPage;
		$numOfLinks = ((int) ($numberOfKombinacija	/$perPage)) + 1;		
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
	<a href="../kombinacijaalladmin/1">Prva </a>
	<a href="../kombinacijaalladmin/<?php echo $idMinus?>"><</a>
		<?php 
		}
		for($i = 1; $i<=$numOfLinks; $i++){
		
			if($i == $id){	
			?>		
				<a href="../kombinacijaalladmin/<?php echo $i?>"><u><?php echo $i?></u></a>	
				<?php 
			}
			else{
			?>
				<a href="../kombinacijaalladmin/<?php echo $i?>"><?php echo $i?></a>	
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
		<a href="../kombinacijaalladmin/<?php echo $idPlus?>">></a>
		<a href="../kombinacijaalladmin/<?php echo $numOfLinks?>"> Zadnja</a>
		<?php 
			}
		?>	
</div>
	<?php 
	}
?>	
</div>