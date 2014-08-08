<script type="text/javascript">
$(function() {
	$('div#mainContainer').css('height', '1520px');
	$('div#rightBorder').css('height', '1560px');
	$('div#leftBorder').css('height', '1560px');
});
</script>
<div class="noviUnos"  style="padding:15px; float:left;">
		Administracija slika city-break
</div>
<div class="noviUnos" style="padding:15px;">
	<a href="../citybreaksalladmin">Naza na dministracija city-breaks</a>
</div>
<div>
<div class="noviUnos" style="padding:15px;">
		<a href="http://bosnia-adventure.ba/novaImg/<?php echo $id;?>/citybreaks">Novi unos</a>
</div>
</div>
<div class="areaText">

<?php 

if($citybreaksImages == null)
{
	?>
	<tr>
    	<td width="532">Nema unosa</td>
    </tr>
	<?php 
	
}
else
{


while($rows = mysql_fetch_array($citybreaksImages)){ 
?>

<div class="adminSlike" style="width:85px; float:left;">
 
<div style="">
	<a href="../adminImg/<?php echo $rows['Id']; ?>/citybreaks" >
		<img src="../<?php echo $rows['ImgPath']; ?>" style="cursor:pointer;" width="72" height="72" alt="" />
	</a>
</div>

<div class="deleteSlika" style="float:left;">
	<a style="color:#FF0000;" href="../deleteImg/<?php  echo $rows['Id']; ?>/citybreaks">Delete</a>
</div>

</div>

<?php 
}
}
 ?> 

 </div>