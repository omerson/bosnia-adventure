<?php require_once(CONTROLLER_PATH.'forDefault.php'); ?>
<div id="adminpanel">
	<div id="adminLogout">
		<span id="logout">Logout</span>
	</div>
	<div id="adminpanelNaslov"><span>Administratorski panel</span><span id="opisAdmin">Kliknite na neku od sekcija da biste izvršili uredivanje iste</span></div>
	<div id="standardAdmin">
		<table width="120" border="0">
		  <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>onamaadmin">O nama</a></td>
		  </tr>
		  <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>kontaktadmin">Kontakt</a></td>
		  </tr>
		   <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>lokacijealladmin">Lokacije</a></td>
		  </tr>
		  <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>porukeall">Poruke(<?php echo $brojPoruka; ?>)</a></td>
		  </tr>
		  <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>prijaveall">Prijave(<?php echo $brojPrijava; ?>)</a></td>
		  </tr>
		</table>
	</div>
	<div id="specialAdmin">
		<table width="220" border="0">
		  <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>posponuda1admin">Posebna ponuda 1</a></td>
		  </tr>
		  <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>posponuda2admin">Posebna ponuda 2</a></td>
		  </tr>
		  <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>izdponudaadmin">Izdvojena ponuda</a></td>
		  </tr>
		  <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>sigurnostadmin">Sigurnost</a></td>
		  </tr>
		  <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>zahvalnicaadmin">Zahvalnica</a></td>
		  </tr>		  
		</table>	
	</div>
	<div id="serviceAdmin">
		<table width="200" border="0">
		  <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>avanturaalladmin">Avantura</a></td>
		  </tr>
		  <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>kulturaalladmin">Kulturni turizam</a></td>
		  </tr>
		  <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>citybreaksalladmin">City breaks</a></td>
		  </tr>		  	  
		  <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>smjestajalladmin">Smještaj</a></td>
		  </tr>		  
		  <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>rentacaralladmin">Rent-a-car</a></td>
		  </tr>		  
		  <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>kombinacijaalladmin">Kombinovane ture</a></td>
		  </tr>		 
		   <tr>
			<td height="50"><a class="adminLinks" href="<?php echo $sUrl;?>pravilnikadmin">Pravilnik</a></td>
		  </tr>		 		  
		</table>
	</div>
</div>
