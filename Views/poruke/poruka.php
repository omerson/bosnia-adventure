<div id="adminpanelNaslov"  style="margin:15px;"><span>Poruka</span></div>

<div id="adminLogout">
		<a href="../porukeall"><span id="adminpanelBack" style="margin-right:15px; font-size:12px;">Sve poruke</span></a>
	</div>

<div id="adminLogout" style="clear:both; font-size:12px; margin-right:15px;" >
		<span id="adminpanelBack">Admin panel</span>
	</div>
<div class="areaText">
	<div class="areaLeft" style="float:left; margin-left:200px; font-size:16px;">	
		Sadržaj	
	</div>
	
	<div class="areaRight">		
		<div class="contentText">
			<?php echo str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $row['Sadrzaj']); ?>					
		</div>
 	</div>
</div>
