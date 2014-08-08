<div style="float:left; font-size:12px;">
	<div id="gallery">
		<ul>
			<?php 
			if($smjestajImages){
				while($rows = mysql_fetch_array($smjestajImages)){ 
			?>			
			<li>
				<a href="../../<?php echo $rows['ImgPath']; ?>" >
					<img src="../../<?php echo $rows['ImgPath'];  ?>" width="100" height="100" alt="" />
				</a>
			</li>
			<?php 
				}
			}
			?>
		</ul>
	</div>
</div>