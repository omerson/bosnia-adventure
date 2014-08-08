<div id="adminpanel">
	<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>
	<div id="adminpanelNaslov"><span>Administracija posebne ponude</span><span id="opisAdmin">Uredujte postojece avanture kao posebne ponude</span></div>
	

<div id="avanturaList" class="itemList">
<table width="631" border="0">
<form method="post" enctype="multipart/form-data">


<?php 
if($ponudaId != null){	
?>
	<input type="hidden" value="editposebnaponuda1" name="editposebnaponuda1"/>
<?php 
}
else{
?>
	<input type="hidden" value="insertposebnaponuda1" name="insertposebnaponuda1"/>
<?php 
}
?>


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
if($rows['Id'] == $ponudaId)
{
?>
  <tr>
    <td width="600"><label><input type="radio" name="posebnaPonuda1" style="float:left; margin-top:6px;" value="<?php echo $rows['Id'];?>" checked="checked"><div style="padding-left:20px;"><?php echo $rows['Naslov'];?></div></label></td>   
  </tr>
<?php 
}
else{
?>

 <tr>
    <td width="600"><label><input type="radio" name="posebnaPonuda1" style="float:left; margin-top:6px;" value="<?php echo $rows['Id'];?>"><div style="padding-left:20px;"><?php echo $rows['Naslov'];?></div></label></td>   
  </tr>

<?php
}
}
}
?>
<tr>
   <td><div align="right" style="margin-right:100px;">
      <input type="submit" class="inputButton" value="Unesi"/>
    </div></td>
  </tr>
</table>
</form>
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
	<a href="../posponuda1admin/1">Prva </a>
	<a href="../posponuda1admin/<?php echo $idMinus?>"><</a>
		<?php 
		}
		for($i = 1; $i<=$numOfLinks; $i++){
		
			if($i == $id){	
			?>		
				<a href="../posponuda1admin/<?php echo $i?>"><u><?php echo $i?></u></a>	
				<?php 
			}
			else{
			?>
				<a href="../posponuda1admin/<?php echo $i?>"><?php echo $i?></a>	
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
		<a href="../posponuda1admin/<?php echo $idPlus?>">></a>
		<a href="../posponuda1admin/<?php echo $numOfLinks?>"> Zadnja</a>
		<?php 
			}
		?>	
</div>
		<?php 
	}
?>		
</div>