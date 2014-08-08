<?php
	require_once('config.php');
	
	$url = $_SERVER['REQUEST_URI']; 
	$url = substr( $url, 1 );	
	if($url != "getUslugesmjestaj" && $url != "getUslugeavantura" && $url != "getUslugecity" && $url != "getUslugekombinacija" && $url != "getUslugekultura" && $url != "getUslugerentacar" && $url != "getUsluge-Izaberite-" )	
		require_once('Shared/header.php');
?>
	
	<?php
		//require_once('default.php');
		//echo 'na';
	?>
	
	
	<?php
		
		//Dispatcher implementation
		function dispatcher($routes){
			
			 		 // Requested URL
			$url = $_SERVER['REQUEST_URI']; 
			
			//echo $url;
			
			// Removes Apllication root from url
			//$url = str_replace('/', '', $url);
			$url = substr( $url, 1 );
			
			//echo $url;
								
			if($url == '')
			{
				require_once(CONTROLLER_PATH.'forDefault.php');		
				require_once('default.php');
				return;
			}			
				
			
			if($_GET){		
			
				if($_GET['trazi'] == 'trazi'){						
					require_once(CONTROLLER_PATH.'index/doTrazi.php');						
					return;					
				}		
											
				require_once(CONTROLLER_PATH.'index/doSearch.php');						
				return;									
			}
			
			
			if($_POST){		
				
				//if($_POST['searchHidden'] == 'searchHidden'){						
					//require_once(CONTROLLER_PATH.'search.php');					
					//return;
				//}
							
				if($_POST['login'] == 'login'){						
					require_once(CONTROLLER_PATH.'adminLogin.php');					
					return;
				}
				
				if($_POST['logout'] == 'logout'){					
					require_once(CONTROLLER_PATH.'logout.php');						
					return;					
				}			
				
				if($_POST['rezervacija'] == 'rezervacija'){
					require_once(CONTROLLER_PATH.'index/rezervacija.php');
					return;	
				}
				
				if($_POST['novaavantura'] == 'novaavantura'){					
					require_once(CONTROLLER_PATH.'avantura/unesiAvanturu.php');						
					return;					
				}
				
				if($_POST['trazi'] == 'trazi'){		
					echo 'www';			
					require_once(CONTROLLER_PATH.'index/doTrazi.php');						
					return;					
				}
				
				if($_POST['novakultura'] == 'novakultura'){					
					require_once(CONTROLLER_PATH.'kultura/unesiKulturu.php');						
					return;					
				}
				
				if($_POST['editavantura'] == 'editavantura'){					
					require_once(CONTROLLER_PATH.'avantura/editAvantura.php');						
					return;					
				}
				
				if($_POST['editkultura'] == 'editkultura'){					
					require_once(CONTROLLER_PATH.'kultura/editKultura.php');						
					return;					
				}				
				
				if($_POST['novacitybreaks'] == 'novacitybreaks'){					
					require_once(CONTROLLER_PATH.'citybreaks/unesiCitybreaks.php');						
					return;					
				}
				
				if($_POST['editcitybreaks'] == 'editcitybreaks'){					
					require_once(CONTROLLER_PATH.'smjestaj/editCitybreaks.php');						
					return;					
				}
				
				if($_POST['novasmjestaj'] == 'novasmjestaj'){					
					require_once(CONTROLLER_PATH.'smjestaj/unesiSmjestaj.php');						
					return;					
				}
				
				if($_POST['editsmjestaj'] == 'editsmjestaj'){	
					require_once(CONTROLLER_PATH.'smjestaj/editSmjestaj.php');						
					return;					
				}
				
				if($_POST['novarentacar'] == 'novarentacar'){					
					require_once(CONTROLLER_PATH.'rentacar/unesiRentacar.php');						
					return;					
				}
				
				if($_POST['editrentacar'] == 'editrentacar'){					
					require_once(CONTROLLER_PATH.'rentacar/editRentacar.php');						
					return;					
				}				
				
				if($_POST['novakombinacija'] == 'novakombinacija'){					
					require_once(CONTROLLER_PATH.'kombinacija/unesiKombinacija.php');						
					return;					
				}
				
				if($_POST['editkombinacija'] == 'editkombinacija'){					
					require_once(CONTROLLER_PATH.'kombinacija/editKombinacija.php');						
					return;					
				}
				
				if($_POST['novarezervacije'] == 'novarezervacije'){					
					require_once(CONTROLLER_PATH.'rezervacije/unesiRezervacije.php');						
					return;					
				}
				
				if($_POST['editlokacije'] == 'editlokacije'){					
					require_once(CONTROLLER_PATH.'lokacije/editLokacije.php');						
					return;					
				}
				
				if($_POST['novalokacije'] == 'novalokacije'){					
					require_once(CONTROLLER_PATH.'lokacije/unesiLokacije.php');						
					return;					
				}
				
				if($_POST['editrezervacije'] == 'editrezervacije'){					
					require_once(CONTROLLER_PATH.'rezervacije/editRezervacije.php');						
					return;					
				}
				
				if($_POST['editposebnaponuda1'] == 'editposebnaponuda1'){					
					require_once(CONTROLLER_PATH.'index/editPosebnaponuda1.php');						
					return;					
				}
				
				if($_POST['editposebnaponuda2'] == 'editposebnaponuda2'){					
					require_once(CONTROLLER_PATH.'index/editPosebnaponuda2.php');						
					return;					
				}
				
				if($_POST['editizdvojenaponuda'] == 'editizdvojenaponuda'){					
					require_once(CONTROLLER_PATH.'index/editIzdvojenaponuda.php');						
					return;					
				}
				
				if($_POST['insertizdvojenaponuda'] == 'insertizdvojenaponuda'){					
					require_once(CONTROLLER_PATH.'index/insertIzdvojenaponuda.php');						
					return;					
				}
				
				if($_POST['insertposebnaponuda1'] == 'insertposebnaponuda1'){					
					require_once(CONTROLLER_PATH.'index/insertPosebnaponuda1.php');						
					return;					
				}
				
				if($_POST['insertposebnaponuda2'] == 'insertposebnaponuda2'){					
					require_once(CONTROLLER_PATH.'index/insertPosebnaponuda2.php');						
					return;					
				}
				
				if($_POST['editsigurnost'] == 'editsigurnost'){					
					require_once(CONTROLLER_PATH.'index/editSigurnost.php');						
					return;					
				}
				
				if($_POST['editzahvalnica'] == 'editzahvalnica'){					
					require_once(CONTROLLER_PATH.'index/editZahvalnica.php');						
					return;					
				}
				
				if($_POST['editonama'] == 'editonama'){					
					require_once(CONTROLLER_PATH.'index/editOnama.php');						
					return;					
				}
				
				if($_POST['editpravilnik'] == 'editpravilnik'){					
					require_once(CONTROLLER_PATH.'index/editPravilnik.php');						
					return;					
				}
				
				if($_POST['editkontakt'] == 'editkontakt'){					
					require_once(CONTROLLER_PATH.'index/editKontakt.php');						
					return;					
				}
				
				if($_POST['kontaktPoruka'] == 'kontaktPoruka'){					
					require_once(CONTROLLER_PATH.'index/porukaKontakt.php');						
					return;					
				}
				
				if($_POST['izmjeniSlikusmjestaj'] == 'izmjeniSlikusmjestaj'){					
					require_once(CONTROLLER_PATH.'smjestaj/editSlika.php');						
					return;					
				}
				
				if($_POST['novaImgsmjestaj'] == 'novaImgsmjestaj'){	
					$tip = "smjestaj";	
					require_once(CONTROLLER_PATH.'smjestaj/insertSlika.php');						
					return;					
				}	
				
				if($_POST['izmjeniSlikuavantura'] == 'izmjeniSlikuavantura'){					
					require_once(CONTROLLER_PATH.'avantura/editSlika.php');						
					return;					
				}
				
				if($_POST['novaImgavantura'] == 'novaImgavantura'){	
					$tip = "avantura";	
					require_once(CONTROLLER_PATH.'avantura/insertSlika.php');						
					return;					
				}		
				
				if($_POST['izmjeniSlikukultura'] == 'izmjeniSlikukultura'){					
					require_once(CONTROLLER_PATH.'kultura/editSlika.php');						
					return;					
				}
				
				if($_POST['novaImgkultura'] == 'novaImgkultura'){	
					$tip = "kultura";
					require_once(CONTROLLER_PATH.'kultura/insertSlika.php');						
					return;					
				}		
				
				if($_POST['izmjeniSlikukombinacija'] == 'izmjeniSlikukombinacija'){					
					require_once(CONTROLLER_PATH.'kombinacija/editSlika.php');						
					return;					
				}
				
				if($_POST['novaImgkombinacija'] == 'novaImgkombinacija'){	
					$tip = "kombinacija";	
					require_once(CONTROLLER_PATH.'kombinacija/insertSlika.php');						
					return;					
				}		
				
				if($_POST['izmjeniSlikurentacar'] == 'izmjeniSlikurentacar'){					
					require_once(CONTROLLER_PATH.'rentacar/editSlika.php');						
					return;					
				}
				
				if($_POST['novaImgrentacar'] == 'novaImgrentacar'){															
					$tip = "rentacar";								
					require_once(CONTROLLER_PATH.'rentacar/insertSlika.php');						
					return;					
				}		
				
				if($_POST['izmjeniSlikucitybreaks'] == 'izmjeniSlikucitybreaks'){					
					require_once(CONTROLLER_PATH.'citybreaks/editSlika.php');						
					return;					
				}
				
				if($_POST['novaImgcitybreaks'] == 'novaImgcitybreaks'){	
					$tip = "citybreaks";						
					require_once(CONTROLLER_PATH.'citybreaks/insertSlika.php');						
					return;					
				}	
				
				if($_POST['rezervisismjestaj'] == 'rezervisismjestaj'){	
					$id = $_POST['id'];	
					$tipUsluge = 'smjestaj';				
					require_once(VIEW_PATH.'index/prijavise.php');						
					return;					
				}
				
				if($_POST['rezervisirentacar'] == 'rezervisirentacar'){	
					$id = $_POST['id'];	
					$tipUsluge = 'rentacar';
					require_once(VIEW_PATH.'index/prijavise.php');						
					return;					
				}
				
				if($_POST['rezervisikultura'] == 'rezervisikultura'){		
					$id = $_POST['id'];	
					$tipUsluge = 'kultura';			
					require_once(VIEW_PATH.'index/prijavise.php');						
					return;					
				}
				
				if($_POST['rezervisikombinacija'] == 'rezervisikombinacija'){	
					$id = $_POST['id'];	
					$tipUsluge = 'kombinacija';					
					require_once(VIEW_PATH.'index/prijavise.php');						
					return;					
				}
				
				if($_POST['rezervisicitybreaks'] == 'rezervisicitybreaks'){	
					$id = $_POST['id'];	
					$tipUsluge = 'city';					
					require_once(VIEW_PATH.'index/prijavise.php');						
					return;					
				}
				
				if($_POST['rezervisiavantura'] == 'rezervisiavantura'){	
					$id = $_POST['id'];	
					$tipUsluge = 'avantura';					
					require_once(VIEW_PATH.'index/prijavise.php');						
					return;					
				}				
			}
						
					   
			$params = array();
			
			$route_match = false;
			foreach($routes as $urls => $route)
			{		               	
				if(preg_match($route['url'], $url, $matches))
				{
					$params = array_merge($params, $matches);
					$route_match = true;							
					break;					
				}						
			}	
			
			// if no route matched display error
			if(!$route_match) { 
				
				if($url != 'adminarea')				
					include(VIEW_PATH.'common/nemaRute.php');
				
				require_once('Shared/footer.php');
				exit();
				
			}		
			
			//echo CONTROLLER_PATH.$route['controller'].'.php'.'<br/>';
				
			require_once(CONTROLLER_PATH.$route['controller'].'.php');		
			
			 	
		}		
	
		//Dispatcher call
		dispatcher($routes);
	?>
	
				
		
<?php
	$url = $_SERVER['REQUEST_URI']; 
	$url = substr( $url, 1 );	
	if($url != "getUslugesmjestaj" && $url != "getUslugeavantura" && $url != "getUslugecity" && $url != "getUslugekombinacija" && $url != "getUslugekultura" && $url != "getUslugerentacar" && $url != "getUsluge-Izaberite-" )	
		require_once('Shared/footer.php');
?>