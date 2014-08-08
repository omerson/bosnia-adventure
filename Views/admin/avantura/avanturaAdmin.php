<div id="adminpanel">
	<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>
	<div id="adminpanelNaslov"><span>Administracija avantura</span><span id="opisAdmin">Uredujte postojece avanture ili unesite nove</span></div>
	
<div class="noviUnos" id="novaAvantura">
Novi unos
</div>

<div id="avanturaList" class="itemList">
<table width="631" border="0">
<?php 

if($foundAvantura == null)
{
	?>
	<tr>
    	<td width="532">Nema unosa</td>
    </tr>
	<?php 
	
}
else
{

while($rows = mysql_fetch_array($foundAvantura)){ 
?>
  <tr>
    <td width="532"><a href="../avanturaadmin/<?php echo $rows['Id']; ?>"><span class="naslovi"><?php echo $rows['Naslov']; ?></span></a></td>
	
	<td width="532"><a href="http://bosnia-adventure.ba/avanturaimagesadmin/<?php echo $rows['Id']; ?>"><span class="naslovi">Slike</span></a></td>
	
    <td width="42"><a id="delete" href="../avanturaalladmin"><span class="brisanje" onclick="confirmDeleteAvantura('<?php echo $rows['Id']; ?>')">Izbriši</span></a></td>
  </tr>


<?php 
}
}
?>

</table>

</div>
<?php
if($foundAvantura != null)
{
 ?>
<div class="pager">
	<?php //echo $pager->renderFullNav(); 
		
		$numberOfAvantura = (int)$numberOfAvantura;
		$perPage = (int)$perPage;
		$numOfLinks = ((int) ($numberOfAvantura	/$perPage)) + 1;		
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
	<a href="../avanturaalladmin/1">Prva </a>
	<a href="../avanturaalladmin/<?php echo $idMinus?>"><</a>
		<?php 
		}
		for($i = 1; $i<=$numOfLinks; $i++){
		
			if($i == $id){	
			?>		
				<a href="../avanturaalladmin/<?php echo $i?>"><u><?php echo $i?></u></a>	
				<?php 
			}
			else{
			?>
				<a href="../avanturaalladmin/<?php echo $i?>"><?php echo $i?></a>	
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
		<a href="../avanturaalladmin/<?php echo $idPlus?>">></a>
		<a href="../avanturaalladmin/<?php echo $numOfLinks?>"> Zadnja</a>
		<?php 
			}
		?>	
</div>
	<?php 
	}
?>	
</div>