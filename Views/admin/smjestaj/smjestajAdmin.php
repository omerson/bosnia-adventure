<div id="adminpanel">
	<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>
	<div id="adminpanelNaslov"><span>Administracija smještaj</span><span id="opisAdmin">Uredujte postojeće smještaje ili unesite nove</span></div>
	
<div class="noviUnos" id="novaSmjestaj">
Novi unos
</div>

<div id="smjestajList" class="itemList">
<table width="631" border="0">
<?php 

if($foundSmjestaj == null)
{
	?>
	<tr>
    	<td width="532">Nema unosa</td>
    </tr>
	<?php 
	
}
else
{


while($rows = mysql_fetch_array($foundSmjestaj)){ 
?>
  <tr>
    <td width="532"><a href="../smjestajadmin/<?php echo $rows['Id']; ?>"><span class="naslovi"><?php echo $rows['Naslov']; ?></span></a></td>
	
	<td width="532"><a href="../smjestajimagesadmin/<?php echo $rows['Id']; ?>"><span class="naslovi">Slike</span></a></td>
	
    <td width="42"><a id="delete" href="http://bosnia-adventure.ba/smjestajalladmin"><span class="brisanje" onclick="confirmDeleteSmjestaj('<?php echo $rows['Id']; ?>')">Izbriši</span></a></td>
  </tr>


<?php 
}
}
?>
</table>

</div>
<?php
if($foundSmjestaj != null)
{
 ?>
<div class="pager">
	<?php //echo $pager->renderFullNav(); 
		
		$numberOfSmjestaj = (int)$numberOfSmjestaj;
		$perPage = (int)$perPage;
		$numOfLinks = ((int) ($numberOfSmjestaj	/$perPage)) + 1;		
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
	<a href="../smjestajalladmin/1">Prva </a>
	<a href="../smjestajalladmin/<?php echo $idMinus?>"><</a>
		<?php 
		}
		for($i = 1; $i<=$numOfLinks; $i++){
		
			if($i == $id){	
			?>		
				<a href="../smjestajalladmin/<?php echo $i?>"><u><?php echo $i?></u></a>	
				<?php 
			}
			else{
			?>
				<a href="../smjestajalladmin/<?php echo $i?>"><?php echo $i?></a>	
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
		<a href="../smjestajalladmin/<?php echo $idPlus?>">></a>
		<a href="../smjestajalladmin/<?php echo $numOfLinks?>"> Zadnja</a>
		<?php 
			}
		?>	
</div>
	<?php 
	}
?>	
</div>