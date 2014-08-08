<div id="adminpanel">
	<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>
	<div id="adminpanelNaslov"><span>Administracija posebne ponude</span><span id="opisAdmin">Uredujte postojece avanture kao posebne ponude</span></div>
	

<div id="kulturaList" class="itemList">
<table width="631" border="0">
<form method="post" enctype="multipart/form-data">

<?php 
if($ponudaId != null){	
?>
	<input type="hidden" value="editposebnaponuda2" name="editposebnaponuda2"/>
<?php 
}
else{
?>
	<input type="hidden" value="insertposebnaponuda2" name="insertposebnaponuda2"/>
<?php 
}
?>

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
if($rows['Id'] == $ponudaId)
{
?>
  <tr>
    <td width="532"><label><input type="radio" name="posebnaPonuda2" style="float:left; margin-top:6px;" value="<?php echo $rows['Id'];?>" checked="checked"><div style="padding-left:20px;"><?php echo $rows['Naslov'];?></div></label></td>   
  </tr>
<?php 
}
else{
?>

 <tr>
    <td width="532"><label><input type="radio" name="posebnaPonuda2" style="float:left; margin-top:6px;" value="<?php echo $rows['Id'];?>"><div style="padding-left:20px;"><?php echo $rows['Naslov'];?></div></label></td>   
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
	<a href="../posponuda2admin/1">Prva </a>
	<a href="../posponuda2admin/<?php echo $idMinus?>"><</a>
		<?php 
		}
		for($i = 1; $i<=$numOfLinks; $i++){
		
			if($i == $id){	
			?>		
				<a href="../posponuda2admin/<?php echo $i?>"><u><?php echo $i?></u></a>	
				<?php 
			}
			else{
			?>
				<a href="../posponuda2admin/<?php echo $i?>"><?php echo $i?></a>	
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
		<a href="../posponuda2admin/<?php echo $idPlus?>">></a>
		<a href="../posponuda2admin/<?php echo $numOfLinks?>"> Zadnja</a>
		<?php 
			}
		?>	
</div>
	<?php 
	}
?>	
</div>