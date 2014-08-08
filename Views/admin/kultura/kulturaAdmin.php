<div id="adminpanel">
	<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>
	<div id="adminpanelNaslov"><span>Administracija kultura</span><span id="opisAdmin">Uredujte postojeće avanture ili unesite nove</span></div>
	
<div class="noviUnos" id="novaKultura">
Novi unos
</div>

<div id="kulturaList" class="itemList">
<table width="631" border="0">
<?php 

if($foundKultura == null)
{
	?>
	<tr>
    	<td width="532">Nema unosa</td>
    </tr>
	<?php 
	
}
else
{

while($rows = mysql_fetch_array($foundKultura)){ 
?>
  <tr>
    <td width="532"><a href="http://bosnia-adventure.ba/kulturaadmin/<?php echo $rows['Id']; ?>"><span class="naslovi"><?php echo $rows['Naslov']; ?></span></a></td>
	
	<td width="532"><a href="http://bosnia-adventure.ba/kulturaimagesadmin/<?php echo $rows['Id']; ?>"><span class="naslovi">Slike</span></a></td>
	
    <td width="42"><a id="delete" href="http://bosnia-adventure.ba/kulturaalladmin"><span class="brisanje" onclick="confirmDeleteKultura('<?php echo $rows['Id']; ?>')">Izbriši</span></a></td>
  </tr>

<?php 
}
}
?>

</table>

</div>
<?php
if($foundKultura != null)
{
 ?>
<div class="pager">
	<?php //echo $pager->renderFullNav(); 
		
		$numberOfKultura = (int)$numberOfKultura;
		$perPage = (int)$perPage;
		$numOfLinks = ((int) ($numberOfKultura	/$perPage)) + 1;		
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
	<a href="../kulturaalladmin/1">Prva </a>
	<a href="../kulturaalladmin/<?php echo $idMinus?>"><</a>
		<?php 
		}
		for($i = 1; $i<=$numOfLinks; $i++){
		
			if($i == $id){	
			?>		
				<a href="../kulturaalladmin/<?php echo $i?>"><u><?php echo $i?></u></a>	
				<?php 
			}
			else{
			?>
				<a href="../kulturaalladmin/<?php echo $i?>"><?php echo $i?></a>	
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
		<a href="../kulturaalladmin/<?php echo $idPlus?>">></a>
		<a href="../kulturaalladmin/<?php echo $numOfLinks?>"> Zadnja</a>
		<?php 
			}
		?>	
</div>
	<?php 
	}
?>	
</div>