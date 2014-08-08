<div id="adminpanel">
	<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>
	<div id="adminpanelNaslov"><span>Administracija rentacar</span><span id="opisAdmin">Uredujte postojeće rentacar ili unesite nove</span></div>
	
<div class="noviUnos" id="novaRentacar">
Novi unos
</div>

<div id="rentacarList" class="itemList">
<table width="631" border="0">
<?php 

if($foundRentacar == null)
{
	?>
	<tr>
    	<td width="532">Nema unosa</td>
    </tr>
	<?php 
	
}
else
{

while($rows = mysql_fetch_array($foundRentacar)){ 
?>
  <tr>
    <td width="532"><a href="http://bosnia-adventure.ba/rentacaradmin/<?php echo $rows['Id']; ?>"><span class="naslovi"><?php echo $rows['Naslov']; ?></span></a></td>
	
	<td width="532"><a href="http://bosnia-adventure.ba/rentacarimagesadmin/<?php echo $rows['Id']; ?>"><span class="naslovi">Slike</span></a></td>
	
    <td width="42"><a id="delete" href="http://bosnia-adventure.ba/rentacaralladmin"><span class="brisanje" onclick="confirmDeleteRentacar('<?php echo $rows['Id']; ?>')">Izbriši</span></a></td>
  </tr>


<?php 
}
}
?>

</table>

</div>
<?php
if($foundRentacar != null)
{
 ?>
<div class="pager">
	<?php //echo $pager->renderFullNav(); 
		
		$numberOfRentacar = (int)$numberOfRentacar;
		$perPage = (int)$perPage;
		$numOfLinks = ((int) ($numberOfRentacar	/$perPage)) + 1;		
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
	<a href="../rentacaralladmin/1">Prva </a>
	<a href="../rentacaralladmin/<?php echo $idMinus?>"><</a>
		<?php 
		}
		for($i = 1; $i<=$numOfLinks; $i++){
		
			if($i == $id){	
			?>		
				<a href="../rentacaralladmin/<?php echo $i?>"><u><?php echo $i?></u></a>	
				<?php 
			}
			else{
			?>
				<a href="../rentacaralladmin/<?php echo $i?>"><?php echo $i?></a>	
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
		<a href="../rentacaralladmin/<?php echo $idPlus?>">></a>
		<a href="../rentacaralladmin/<?php echo $numOfLinks?>"> Zadnja</a>
		<?php 
			}
		?>	
</div>
	<?php 
	}
?>	
</div>