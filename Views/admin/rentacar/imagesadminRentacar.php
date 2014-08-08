<script type="text/javascript">
$(function() {
	$('div#mainContainer').css('height', '1520px');
	$('div#rightBorder').css('height', '1560px');
	$('div#leftBorder').css('height', '1560px');
});
</script>
<div class="noviUnos"  style="padding:15px; float:left;">
		Administracija slika rentacar
</div>
<div class="noviUnos" style="padding:15px;">
	<a href="../rentacaralladmin">Nazad na aministracija rentacar</a>
</div>
<div>
<div class="noviUnos" style="padding:15px;">
		<a href="../novaImg/<?php echo $id;?>/rentacar">Novi unos</a>
</div>
</div>

<div class="areaText">

<?php 

if($rentacarImages == null)
{
	?>
	<tr>
    	<td width="532">Nema unosa</td>
    </tr>
	<?php 
	
}
else
{


while($rows = mysql_fetch_array($rentacarImages)){ 
?>

<div class="adminSlike" style="width:85px; float:left;">
 
<div style="">
	<a href="http://bosnia-adventure.ba/adminImg/<?php echo $rows['Id']; ?>/rentacar" >
		<img src="../<?php echo $rows['ImgPath']; ?>" style="cursor:pointer;" width="72" height="72" alt="" />
	</a>
</div>

<div class="deleteSlika" style="float:left;">
	<a style="color:#FF0000;" href="http://bosnia-adventure.ba/deleteImg/<?php  echo $rows['Id']; ?>/rentacar">Delete</a>
</div>

</div>

<?php 
}
}
 ?> 

 </div>