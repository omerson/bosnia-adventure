<div id="adminpanel">
	<div id="adminLogout">
		<span id="adminpanelBack">Admin panel</span>
	</div>
	<div id="adminpanelNaslov"><span>Administracija izdvojene ponude</span><span id="opisAdmin">Uredujte postojeće kombinacije kao izdvojene ponude</span></div>	

<div id="kombinacijaList" class="itemList">
<table width="631" border="0">
<form method="post"  enctype="multipart/form-data">
<?php 
if($ponudaId != null){	
?>
	<input type="hidden" value="editizdvojenaponuda" name="editizdvojenaponuda"/>
<?php 
}
else{
?>
	<input type="hidden" value="insertizdvojenaponuda" name="insertizdvojenaponuda"/>
<?php 
}
?>

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
if($rows['Id'] == $ponudaId)
{
?>
  <tr>
    <td width="600"><label><input type="radio" name="izdvojenaponuda" style="float:left; margin-top:6px;" value="<?php echo $rows['Id'];?>" checked="checked"><div style="padding-left:20px;"><?php echo $rows['Naslov'];?></div></label></td>   
  </tr>
<?php 
}
else{
?>

 <tr>
    <td width="600"><label><input type="radio" name="izdvojenaponuda" style="float:left; margin-top:6px;" value="<?php echo $rows['Id'];?>"><div style="padding-left:20px;"><?php echo $rows['Naslov'];?></div></label></td>   
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
if($foundKombinacija != null)
{
 ?>
<div class="pager">
	<?php 		
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
	<a href="../izdponudaadmin/1">Prva </a>
	<a href="../izdponudaadmin/<?php echo $idMinus?>"><</a>
		<?php 
		}
		for($i = 1; $i<=$numOfLinks; $i++){
		
			if($i == $id){	
			?>		
				<a href="../izdponudaadmin/<?php echo $i?>"><u><?php echo $i?></u></a>	
				<?php 
			}
			else{
			?>
				<a href="../izdponudaadmin/<?php echo $i?>"><?php echo $i?></a>	
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
		<a href="../izdponudaadmin/<?php echo $idPlus?>">></a>
		<a href="../izdponudaadmin/<?php echo $numOfLinks?>"> Zadnja</a>
		<?php 
			}
		?>	
</div>
		<?php 
	}
?>	
</div>