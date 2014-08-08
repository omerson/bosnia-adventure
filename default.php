				<div id="contentTop">		
					<div id="mainArticle">						
						<div id="clientImpresion">
							<div id="naseUsluge">
							</div>
							<div id="ponudaUsluge">
								 <div id="avanturaText">
									<div id="imeAvanture">
										Izdvojena</br> usluga
									</div>
									<div id="cijenaAvanture">										
									</div>									
								</div>
								<div id="viseAvanture">
									<a href="izdvojenaponuda">VIŠE</a>
								</div>
							</div>						
						</div>
						<div id="ponude">
							<div id="posebnaPonuda1">
								<div id="podebnaPonuda1Header">
								</div>
								<div id="podebnaPonuda1Content">	
								<?php if ($row1['ImgPath1'] != ""){?>	
								<img src="<?php echo '../'; echo $row1['ImgPath1']; ?>" class="bgmaximage" height="99"  width="128"/>	
								<?php }else{?>
								<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="99"  width="128"/>	
								<?php }?>
								</div>
								<div id="podebnaPonuda1Footer">
									<div id="podebnaPonuda1FooterContent">
										<a href="posebnaponuda/1"><div id="visePosebnihPonuda1">
										</div></a>
									</div>
									<div id="podebnaPonuda1FooterCornerContent">
										<div id="posebnaPonuda1Center">
										</div>
									</div>
								</div>
							</div>
							<div id="posebnaPonuda2">
								<div id="podebnaPonuda2Header">
								</div>
								<div id="podebnaPonuda2Content">
								<?php if ($row2['ImgPath1'] != ""){?>	
									<img src="<?php echo '../'; echo $row2['ImgPath1']; ?>" class="bgmaximage" height="99"  width="128"/>	
								<?php }else{?>
								<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="99"  width="128"/>	
								<?php }?>
								</div>
								<div id="podebnaPonuda2Footer">
									<div id="podebnaPonuda2FooterContent">
										<a href="posebnaponuda/2"><div id="visePosebnihPonuda2">
										</div></a>
									</div>
									<div id="podebnaPonuda2FooterCornerContent">
										<div id="posebnaPonuda2Center">
										</div>
									</div>
								</div>								
							</div>
						</div>	
						<div id="welcomeHero"> 			
							<div id="slideshow-main"> 
								<ul>
									<li class="p1 active"> 
										<a href="avantura/<?php echo $avanturaDefault['Id']; ?>"> 
										<?php if ($avanturaDefault['ImgPath1'] != ""){?>	
										<img src="<?php echo '../'; echo $avanturaDefault['ImgPath1']; ?>" class="bgmaximage" height="387"  width="466"/>	
										<?php }else{?>
											<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="387"  width="466"/>	
										<?php }?>
											<span class="opacity"></span> 
											<span class="content"><h1></h1><p><?php echo $avanturaDefault['Naslov']; ?></p></span> 
										</a> 
									</li>  									
									<li class="p2">
										<a href="kultura/<?php echo $kulturaDefault['Id']; ?>"> 
										<?php if ($kulturaDefault['ImgPath1'] != ""){?>	
										<img src="<?php echo '../'; echo $kulturaDefault['ImgPath1']; ?>" class="bgmaximage" height="387"  width="466"/>	
										<?php }else{?>
											<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="387"  width="466"/>	
										<?php }?>
											<span class="opacity"></span> 
											<span class="content"><h1></h1><p><?php echo $kulturaDefault['Naslov']; ?></p></span> 
										</a> 
									</li> 
									<li class="p3"> 
										<a href="citybreaks/<?php echo $citibreaksDefault['Id']; ?>"> 
										<?php if ($citibreaksDefault['ImgPath1'] != ""){?>	
										<img src="<?php echo '../'; echo $citibreaksDefault['ImgPath1']; ?>" class="bgmaximage" height="387"  width="466"/>	
										<?php }else{?>
											<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="387"  width="466"/>	
										<?php }?>
											<span class="opacity"></span> 
											<span class="content"><h1></h1><p><?php echo $citibreaksDefault['Naslov']; ?></p></span> 
										</a> 
									</li> 
									<li class="p4"> 
										<a href="smjestaj/<?php echo $smjestajDefault['Id']; ?>"> 
										<?php if ($smjestajDefault['ImgPath1'] != ""){?>	
										<img src="<?php echo '../'; echo $smjestajDefault['ImgPath1']; ?>" class="bgmaximage" height="387"  width="466"/>	
										<?php }else{?>
											<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="387"  width="466"/>	
										<?php }?>
											<span class="opacity"></span> 
											<span class="content"><h1></h1><p><?php echo $smjestajDefault['Naslov']; ?></p></span> 
										</a> 
									</li> 
									<li class="p5"> 
										<a href="rentacar/<?php echo $rentacarDefault['Id']; ?>"> 
										<?php if ($rentacarDefault['ImgPath1'] != ""){?>	
										<img src="<?php echo '../'; echo $rentacarDefault['ImgPath1']; ?>" class="bgmaximage" height="387"  width="466"/>	
										<?php }else{?>
											<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="387"  width="466"/>	
										<?php }?>
											<span class="opacity"></span> 
											<span class="content"><h1></h1><p><?php echo $rentacarDefault['Naslov']; ?></p></span> 
										</a> 
									</li> 
									<li class="p6"> 
										<a href="kombinacija/<?php echo $kombinacijaDefault['Id']; ?>"> 
										<?php if ($kombinacijaDefault['ImgPath1'] != ""){?>	
										<img src="<?php echo '../'; echo $kombinacijaDefault['ImgPath1']; ?>" class="bgmaximage" height="387"  width="466"/>	
										<?php }else{?>
											<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="387"  width="466"/>	
										<?php }?>
											<span class="opacity"></span> 
											<span class="content"><h1></h1><p><?php echo $kombinacijaDefault['Naslov']; ?></p></span> 
										</a> 
									</li> 
									<!--<li class="p7"> 
										<a href="rezervacije/<?php //echo $rezervacijeDefault['Id']; ?>"> 
											<?php //if ($rezervacijeDefault['ImgPath1'] != ""){?>	
										<img src="<?php //echo '../'; echo $rezervacijeDefault['ImgPath1']; ?>" class="bgmaximage" height="387"  width="466"/>	
										<?php //}else{?>
											<img src="<?php //echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="387"  width="466"/>	
										<?php// }?>
											<span class="opacity"></span> 
											<span class="content"><h1></h1><p><?php //echo $rezervacijeDefault['Naslov']; ?></p></span> 
										</a> 
									</li> 		 -->							
								</ul>										
							</div> 				
							<div id="slideshow-carousel">				
								  <ul id="carousel" class="jcarousel jcarousel-skin-tango"> 
									<li><a href="#" rel="p1">
									<?php if ($avanturaDefault['ImgPath1'] != ""){?>	
										<img src="<?php echo '../'; echo $avanturaDefault['ImgPath1']; ?>" class="bgmaximage" height="95"  width="106"/>	
										<?php }else{?>
											<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="99"  width="128"/>	
										<?php }?></a></li> 
									<li><a href="#" rel="p2"><?php if ($kulturaDefault['ImgPath1'] != ""){?>	
										<img src="<?php echo '../'; echo $kulturaDefault['ImgPath1']; ?>" class="bgmaximage" height="95"  width="106"/>	
										<?php }else{?>
											<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="99"  width="128"/>	
										<?php }?></a></li> 
									<li><a href="#" rel="p3"><?php if ($citibreaksDefault['ImgPath1'] != ""){?>	
										<img src="<?php echo '../'; echo $citibreaksDefault['ImgPath1']; ?>" class="bgmaximage" height="95"  width="106"/>	
										<?php }else{?>
											<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="99"  width="128"/>	
										<?php }?></a></li> 
									<li><a href="#" rel="p4"><?php if ($smjestajDefault['ImgPath1'] != ""){?>	
										<img src="<?php echo '../'; echo $smjestajDefault['ImgPath1']; ?>" class="bgmaximage" height="95"  width="106"/>	
										<?php }else{?>
											<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="99"  width="128"/>	
										<?php }?></a></li> 
									<li><a href="#" rel="p5"><?php if ($rentacarDefault['ImgPath1'] != ""){?>	
										<img src="<?php echo '../'; echo $rentacarDefault['ImgPath1']; ?>" class="bgmaximage" height="95"  width="106"/>	
										<?php }else{?>
											<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="99"  width="128"/>	
										<?php }?></a></li> 
									<li><a href="#" rel="p6"><?php if ($kombinacijaDefault['ImgPath1'] != ""){?>	
										<img src="<?php echo '../'; echo $kombinacijaDefault['ImgPath1']; ?>" class="bgmaximage" height="95"  width="106"/>	
										<?php }else{?>
											<img src="<?php echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="99"  width="128"/>	
										<?php }?></a></li> 
									<!--<li><a href="#" rel="p7"><?php //if ($rezervacijeDefault['ImgPath1'] != ""){?>	
										<img src="<?php //echo '../'; echo $rezervacijeDefault['ImgPath1']; ?>" class="bgmaximage" height="95"  width="106"/>	
										<?php //}else{?>
											<img src="<?php //echo APP_ROOT?>Content/Images/noimage.gif" class="bgmaximage" height="99"  width="128"/>	
										<?php// }?></a></li>  -->
									
								  </ul> 
							</div> 							
							<div class="clear">
							</div> 							
						</div> 						
					</div>	
					<div id="greyDelimiter">
					</div>							
				</div>
				<div id="contentBottom">
					<div id="leftContentBottom">
						<div id="blueStub">
						 <form method="get" action="">
							<input type="hidden" name="trazi" value="trazi" />
								<div id="prijavaTable2">
									<div id="planAdventure1" class="planAdventure">
									</div>
									<div id="prijavaForma1">
										<table width="150" border="0">
										  <tr>
											<td>Polazak</td>
										  </tr>
										  <tr>
											<td><input id="polazak" name="polazak" type="text" class="forma" /></td>
										  </tr>
										  <tr>
											<td>Povratak</td>
										  </tr>
										  <tr>
											<td><input type="text" id="povratak" name="povratak" class="forma" /></td>
										  </tr>
										  <tr>
											<td>Sadržaj</td>
										  </tr>
										   <tr>
											<td>
												<select class="forma" name="tipUsluge" id="tipUsluge">
													<option>-Izaberite-</option>
													<option value="avantura">Avantura</option>
													<option value="kultura">Kulturni turizam</option>
													<option value="city">City Breaks</option>
													<option value="smjestaj">Smještaj</option>
													<option value="rentacar">Rent-a-car</option>
													<option value="kombinacija">Kombinovane ture</option>	
												</select>
											</td>
										  </tr>
										</table>
									</div>
								</div>
								<div id="prijavaTable1">
									<div id="planAdventure2" class="planAvanture">
									</div>
									<div id="prijavaForma2">							
										<table border="0">
										  <tr>
							<td><label><input type="checkbox" class="formaCheck" id="nepusac" name="nepusac" />Nepušač</label></td>
										  </tr>								 
										  <tr>
						<td><label><input type="checkbox" class="formaCheck" id="ishrana" name="ishrana" />Posebna ishrana</label></td>
										  </tr>
										  <tr>
						<td><label><input type="checkbox" class="formaCheck" id="alergija" name="alergija"  />Alergičar</label></td>
										  </tr>
										  <tr>
				<td><label><input type="checkbox" class="formaCheck" id="posebnePotrebe" name="posebnePotrebe" />Posebne potrebe</label></td>
										  </tr>									 
									  </table>
									</div>
								</div>	
								<!--<a href="prijavise"> -->
								<div id="formaButton">
								<input type="submit" class="inputButton" value="Traži"/>
							    </div>
								<!--</a> -->
						   </form>
						</div>
						<div id="visePonuda">
							<div id="visePonuda1">
							</div>	
							<div id="visePonuda2">
							</div>	
						</div>
					</div>
					<div id="centarContentBottom">							
						<div id="zahvalnica">	
							<div id="pojedinacnaIpresija">								
								<a href="zahvalnica"><div id="sadrzajIzjave">
								<?php echo $zahvalnicaDefault['Sadrzaj'];?>
								</div></a>
							</div>						
						</div>
					</div>
					<div id="rightContentBottom">
						<div id="sigurnostImg">
							<img src="<?php echo APP_ROOT;  echo $sigurnostDefault['ImgPath1'];?>" id="sigurnostImg" height="314" width="340" /></img>
							<a href="sigurnost" style="margin-top:-314px;"><div id="sigurnostTitle" style="margin-top:-120px;">
							</div></a>
							
						</div>
						<div id="sigurnostText">
							<?php echo $sigurnostDefault['Sadrzaj'];?>
						</div>
					</div>
				</div>
			