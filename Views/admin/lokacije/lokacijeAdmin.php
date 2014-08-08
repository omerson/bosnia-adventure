<div id="adminpanel">
	<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>
	<div id="adminpanelNaslov"><span>Administracija lokacije</span><span id="opisAdmin">Uredujte postojeće avanture ili unesite nove</span></div>
	
<div class="noviUnos" id="novaLokacije">
Novi unos
</div>

<div id="lokacijeList" class="itemList">
<table width="631" border="0">
<?php 

if($foundLokacije == null)
{
	?>
	<tr>
    	<td width="532">Nema unosa</td>
    </tr>
	<?php 
	
}
else
{

while($rows = mysql_fetch_array($foundLokacije)){ 
?>
  <tr>
    <td width="532"><a href="../lokacijeadmin/<?php echo $rows['Id']; ?>"><span class="naslovi"><?php echo $rows['Naziv']; ?></span></a></td>
	
	<td width="532"><a href="../lokacijeimagesadmin/<?php echo $rows['Id']; ?>"><span class="naslovi">Slike</span></a></td>
	
    <td width="42"><a id="delete" href="../lokacijealladmin"><span class="brisanje" onclick="confirmDeleteLokacije('<?php echo $rows['Id']; ?>')">Izbriši</span></a></td>
  </tr>


<?php 
}
}
?>

</table>

</div>
<?php
if($foundLokacije != null)
{
 ?>
<div class="pager">
	<?php //echo $pager->renderFullNav(); 
		
		$numberOfLokacije = (int)$numberOfLokacije;
		$perPage = (int)$perPage;
		$numOfLinks = ((int) ($numberOfLokacije	/$perPage)) + 1;		
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
	<a href="../lokacijealladmin/1">Prva </a>
	<a href="../lokacijealladmin/<?php echo $idMinus?>"><</a>
		<?php 
		}
		for($i = 1; $i<=$numOfLinks; $i++){
		
			if($i == $id){	
			?>		
				<a href="../lokacijealladmin/<?php echo $i?>"><u><?php echo $i?></u></a>	
				<?php 
			}
			else{
			?>
				<a href="../lokacijealladmin/<?php echo $i?>"><?php echo $i?></a>	
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
		<a href="../lokacijealladmin/<?php echo $idPlus?>">></a>
		<a href="../lokacijealladmin/<?php echo $numOfLinks?>"> Zadnja</a>
		<?php 
			}
		?>	
</div>
	<?php 
	}
?>	
</div>