<script type="text/javascript">
$(function() {
	$('div#mainContainer').css('height', '1520px');
	$('div#rightBorder').css('height', '1560px');
	$('div#leftBorder').css('height', '1560px');
});
</script>
<div class="noviUnos"  style="padding:15px; float:left;">
		Administracija slika kultura
</div>
<div class="noviUnos" style="padding:15px;">
	<a href="../kulturaalladmin">Naza na dministracija kultura</a>
</div>
<div>
<div class="noviUnos" style="padding:15px;">
		<a href="../novaImg/<?php echo $id;?>/kultura">Novi unos</a>
</div>
</div>
<div class="areaText">

<?php 

if($kulturaImages == null)
{
	?>
	<tr>
    	<td width="532">Nema unosa</td>
    </tr>
	<?php 
	
}
else
{

while($rows = mysql_fetch_array($kulturaImages)){ 
?>

<div class="adminSlike" style="width:85px; float:left;">
 
<div style="">
	<a href="../adminImg/<?php echo $rows['Id']; ?>/kultura" >
		<img src="../<?php echo $rows['ImgPath']; ?>" style="cursor:pointer;" width="72" height="72" alt="" />
	</a>
</div>

<div class="deleteSlika" style="float:left;">
	<a style="color:#FF0000;" href="../deleteImg/<?php  echo $rows['Id']; ?>/kultura">Delete</a>
</div>

</div>

<?php 
}

}
 ?> 

 </div>