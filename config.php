<?php 

	// routes url to controller and view
	$routes = array(
					array('url' => '/^adminarea$/', 'controller' => 'admin', 'view' => 'adminarea'),
					array('url' => '/^onama$/', 'controller' => 'index', 'view' => 'onama'),
					array('url' => '/^kontakt$/', 'controller' => 'index', 'view' => 'kontakt'),
					array('url' => '/^prijavise$/', 'controller' => 'index', 'view' => 'prijavise'),
					array('url' => '/^usluge$/', 'controller' => 'index', 'view' => 'usluge'),			
					array('url' => '/^sigurnost$/', 'controller' => 'index', 'view' => 'sigurnost'),	
					array('url' => '/^zahvalnica$/', 'controller' => 'index', 'view' => 'zahvalnica'),		
					array('url' => '/^pravilnik$/', 'controller' => 'index', 'view' => 'pravilnik'),
					
					array('url' => '/^avanturaall$/', 'controller' => 'avantura', 'view' => 'avanturaall'),
					array('url' => '/^kulturaall$/', 'controller' => 'kultura', 'view' => 'kulturaall'),
					array('url' => '/^citybreaksall$/', 'controller' => 'citybreaks', 'view' => 'citybreaksall'),
					array('url' => '/^smjestajall$/', 'controller' => 'smjestaj', 'view' => 'smjestajall'),
					array('url' => '/^rentacarall$/', 'controller' => 'rentacar', 'view' => 'rentacarall'),
					array('url' => '/^kombinacijaall$/', 'controller' => 'kombinacija', 'view' => 'kombinacijaall'),					
					array('url' => '/^lokacijeall$/', 'controller' => 'lokacije', 'view' => 'lokacijeall'),
					array('url' => '/^porukeall$/', 'controller' => 'index', 'view' => 'porukeall'),
					array('url' => '/^prijaveall$/', 'controller' => 'index', 'view' => 'prijaveall'),
					
					array('url' => '/^avanturaall\/(?P<id>\d+)$/', 'controller' => 'avantura', 'view' => 'avanturaall'),
					array('url' => '/^kulturaall\/(?P<id>\d+)$/', 'controller' => 'kultura', 'view' => 'kulturaall'),
					array('url' => '/^citybreaksall\/(?P<id>\d+)$/', 'controller' => 'citybreaks', 'view' => 'citybreaksall'),
					array('url' => '/^smjestajall\/(?P<id>\d+)$/', 'controller' => 'smjestaj', 'view' => 'smjestajall'),
					array('url' => '/^rentacarall\/(?P<id>\d+)$/', 'controller' => 'rentacar', 'view' => 'rentacarall'),
					array('url' => '/^kombinacijaall\/(?P<id>\d+)$/', 'controller' => 'kombinacija', 'view' => 'kombinacijaall'),
					array('url' => '/^porukeall\/(?P<id>\d+)$/', 'controller' => 'index', 'view' => 'porukeall'),
					array('url' => '/^prijaveall\/(?P<id>\d+)$/', 'controller' => 'index', 'view' => 'prijaveall'),
					
					
					
				    array('url' => '/^search\/(?P<id>\d+)\/avantura$/', 'controller' => 'search', 'view' => 'searchAvantura'),									
					array('url' => '/^search\/(?P<id>\d+)\/kultura$/', 'controller' => 'search', 'view' => 'searchKultura'),
					array('url' => '/^search\/(?P<id>\d+)\/city$/', 'controller' => 'search', 'view' => 'searchCity'),
					array('url' => '/^search\/(?P<id>\d+)\/smjestaj$/', 'controller' => 'search', 'view' => 'searchSmjestaj'),
					array('url' => '/^search\/(?P<id>\d+)\/rentacar$/', 'controller' => 'search', 'view' => 'searchRentacar'),
					array('url' => '/^search\/(?P<id>\d+)\/kombinacija$/', 'controller' => 'search', 'view' => 'searchKombinacija'),
				
					
					array('url' => '/^lokacijeall\/(?P<id>\d+)$/', 'controller' => 'lokacije', 'view' => 'lokacijeall'),		
					
					array('url' => '/^avantura\/(?P<id>\d+)$/', 'controller' => 'avantura', 'view' => 'avantura'),
					array('url' => '/^kultura\/(?P<id>\d+)$/', 'controller' => 'kultura', 'view' => 'kultura'),
					array('url' => '/^citybreaks\/(?P<id>\d+)$/', 'controller' => 'citybreaks', 'view' => 'citybreaks'),
					array('url' => '/^smjestaj\/(?P<id>\d+)$/', 'controller' => 'smjestaj', 'view' => 'smjestaj'),
					array('url' => '/^rentacar\/(?P<id>\d+)$/', 'controller' => 'rentacar', 'view' => 'rentacar'),
					array('url' => '/^kombinacija\/(?P<id>\d+)$/', 'controller' => 'kombinacija', 'view' => 'kombinacija'),					
					array('url' => '/^lokacije\/(?P<id>\d+)$/', 'controller' => 'lokacije', 'view' => 'lokacije'),
					array('url' => '/^poruka\/(?P<id>\d+)$/', 'controller' => 'index', 'view' => 'poruka'),
					array('url' => '/^prijava\/(?P<id>\d+)$/', 'controller' => 'index', 'view' => 'prijava'),
					
					//admin routes
					
					array('url' => '/^onamaadmin$/', 'controller' => 'index', 'view' => 'onamaadmin'),
					array('url' => '/^kontaktadmin$/', 'controller' => 'index', 'view' => 'kontaktadmin'),					
					
					
					array('url' => '/^avanturaalladmin$/', 'controller' => 'avantura', 'view' => 'avanturaalladmin'),
					array('url' => '/^kulturaalladmin$/', 'controller' => 'kultura', 'view' => 'kulturaalladmin'),
					array('url' => '/^citybreaksalladmin$/', 'controller' => 'citybreaks', 'view' => 'citybreaksalladmin'),
					array('url' => '/^smjestajalladmin$/', 'controller' => 'smjestaj', 'view' => 'smjestajalladmin'),
					array('url' => '/^rentacaralladmin$/', 'controller' => 'rentacar', 'view' => 'rentacaralladmin'),
					array('url' => '/^kombinacijaalladmin$/', 'controller' => 'kombinacija', 'view' => 'kombinacijaalladmin'),					
					array('url' => '/^lokacijealladmin$/', 'controller' => 'lokacije', 'view' => 'lokacijealladmin'),
					array('url' => '/^porukealladmin$/', 'controller' => 'index', 'view' => 'porukealladmin'),
					
					
					array('url' => '/^avanturaalladmin\/(?P<id>\d+)$/', 'controller' => 'avantura', 'view' => 'avanturaalladmin'),
					array('url' => '/^kulturaalladmin\/(?P<id>\d+)$/', 'controller' => 'kultura', 'view' => 'kulturaalladmin'),
					array('url' => '/^citybreaksalladmin\/(?P<id>\d+)$/', 'controller' => 'citybreaks', 'view' => 'citybreaksalladmin'),
					array('url' => '/^smjestajalladmin\/(?P<id>\d+)$/', 'controller' => 'smjestaj', 'view' => 'smjestajalladmin'),
					array('url' => '/^rentacaralladmin\/(?P<id>\d+)$/', 'controller' => 'rentacar', 'view' => 'rentacaralladmin'),
					array('url' => '/^kombinacijaalladmin\/(?P<id>\d+)$/', 'controller' => 'kombinacija', 'view' => 'kombinacijaalladmin'),
					array('url' => '/^lokacijealladmin\/(?P<id>\d+)$/', 'controller' => 'lokacije', 'view' => 'lokacijealladmin'),
										
					
					array('url' => '/^posponuda1admin$/', 'controller' => 'index', 'view' => 'posponuda1admin'),
					array('url' => '/^posponuda2admin$/', 'controller' => 'index', 'view' => 'posponuda2admin'),
					array('url' => '/^izdponudaadmin$/', 'controller' => 'index', 'view' => 'izdponudaadmin'),
					array('url' => '/^sigurnostadmin$/', 'controller' => 'index', 'view' => 'sigurnostadmin'),
					array('url' => '/^zahvalnicaadmin$/', 'controller' => 'index', 'view' => 'zahvalnicaadmin'),
					array('url' => '/^pravilnikadmin$/', 'controller' => 'index', 'view' => 'pravilnikadmin'),
					
					
					array('url' => '/^posebnaponuda\/(?P<id>\d+)$/', 'controller' => 'index', 'view' => 'posebnaponuda'),		
					array('url' => '/^izdvojenaponuda$/', 'controller' => 'index', 'view' => 'izdvojenaponuda'),		
							
					array('url' => '/^posponuda1admin\/(?P<id>\d+)$/', 'controller' => 'index', 'view' => 'posponuda1admin'),
					array('url' => '/^posponuda2admin\/(?P<id>\d+)$/', 'controller' => 'index', 'view' => 'posponuda2admin'),			
					
					array('url' => '/^izdponudaadmin\/(?P<id>\d+)$/', 'controller' => 'index', 'view' => 'izdponudaadmin'),		
					
					
					array('url' => '/^avanturaadmin\/(?P<id>\d+)$/', 'controller' => 'avantura', 'view' => 'avanturaadmin'),
					array('url' => '/^kulturaadmin\/(?P<id>\d+)$/', 'controller' => 'kultura', 'view' => 'kulturaadmin'),
					array('url' => '/^citybreaksadmin\/(?P<id>\d+)$/', 'controller' => 'citybreaks', 'view' => 'citybreaksadmin'),
					array('url' => '/^smjestajadmin\/(?P<id>\d+)$/', 'controller' => 'smjestaj', 'view' => 'smjestajadmin'),
					array('url' => '/^rentacaradmin\/(?P<id>\d+)$/', 'controller' => 'rentacar', 'view' => 'rentacaradmin'),
					array('url' => '/^kombinacijaadmin\/(?P<id>\d+)$/', 'controller' => 'kombinacija', 'view' => 'kombinacijaadmin'),					
					array('url' => '/^lokacijeadmin\/(?P<id>\d+)$/', 'controller' => 'lokacije', 'view' => 'lokacijeadmin'),
					
					array('url' => '/^avanturadel\/(?P<id>\d+)$/', 'controller' => 'avantura', 'view' => 'avanturadel'),
					array('url' => '/^kulturadel\/(?P<id>\d+)$/', 'controller' => 'kultura', 'view' => 'kulturadel'),
					array('url' => '/^citybreaksdel\/(?P<id>\d+)$/', 'controller' => 'citybreaks', 'view' => 'citybreaksdel'),
					array('url' => '/^smjestajdel\/(?P<id>\d+)$/', 'controller' => 'smjestaj', 'view' => 'smjestajdel'),
					array('url' => '/^rentacardel\/(?P<id>\d+)$/', 'controller' => 'rentacar', 'view' => 'rentacardel'),
					array('url' => '/^kombinacijadel\/(?P<id>\d+)$/', 'controller' => 'kombinacija', 'view' => 'kombinacijadel'),
					array('url' => '/^lokacijedel\/(?P<id>\d+)$/', 'controller' => 'lokacije', 'view' => 'lokacijedel'),
					
					array('url' => '/^avanturainsert$/', 'controller' => 'avantura', 'view' => 'avanturainsert'),
					array('url' => '/^kulturainsert$/', 'controller' => 'kultura', 'view' => 'kulturainsert'),
					array('url' => '/^citybreaksinsert$/', 'controller' => 'citybreaks', 'view' => 'citybreaksinsert'),
					array('url' => '/^smjestajinsert$/', 'controller' => 'smjestaj', 'view' => 'smjestajinsert'),
					array('url' => '/^rentacarinsert$/', 'controller' => 'rentacar', 'view' => 'rentacarinsert'),
					array('url' => '/^kombinacijainsert$/', 'controller' => 'kombinacija', 'view' => 'kombinacijainsert'),
					array('url' => '/^lokacijeinsert$/', 'controller' => 'lokacije', 'view' => 'lokacijeinsert'),
					
					array('url' => '/^register$/', 'controller' => 'korisnik', 'view' => 'register'),
					array('url' => '/^save$/', 'controller' => 'korisnik', 'view' => 'save'),
					array('url' => '/^login$/', 'controller' => 'korisnik', 'view' => 'login'),
					array('url' => '/^register\/(?P<id>\d+)$/', 'controller' => 'korisnik', 'view' => 'register'),
					
					array('url' => '/^korisnik\/(?P<id>\d+)\/edit$/', 'controller' => 'korisnik', 'view' => 'edit'),
					
					
					array('url' => '/^smjestaj\/(?P<id>\d+)\/images$/', 'controller' => 'smjestaj', 'view' => 'smjestajimages'),
					array('url' => '/^avantura\/(?P<id>\d+)\/images$/', 'controller' => 'avantura', 'view' => 'avanturaimages'),
					array('url' => '/^kultura\/(?P<id>\d+)\/images$/', 'controller' => 'kultura', 'view' => 'kulturaimages'),
					array('url' => '/^kombinacija\/(?P<id>\d+)\/images$/', 'controller' => 'kombinacija', 'view' => 'kombinacijaimages'),
					array('url' => '/^citybreaks\/(?P<id>\d+)\/images$/', 'controller' => 'citybreaks', 'view' => 'citybreaksimages'),
					array('url' => '/^rentacar\/(?P<id>\d+)\/images$/', 'controller' => 'rentacar', 'view' => 'rentacarimages'),

					
					
					array('url' => '/^smjestajimagesadmin\/(?P<id>\d+)$/', 'controller' => 'smjestaj', 'view' => 'smjestajimagesadmin'),
					array('url' => '/^avanturaimagesadmin\/(?P<id>\d+)$/', 'controller' => 'avantura', 'view' => 'avanturaimagesadmin'),
					array('url' => '/^kulturaimagesadmin\/(?P<id>\d+)$/', 'controller' => 'kultura', 'view' => 'kulturaimagesadmin'),
					array('url' => '/^kombinacijaimagesadmin\/(?P<id>\d+)$/', 'controller' => 'kombinacija', 'view' => 'kombinacijaimagesadmin'),
					array('url' => '/^citybreaksimagesadmin\/(?P<id>\d+)$/', 'controller' => 'citybreaks', 'view' => 'citybreaksimagesadmin'),
					array('url' => '/^rentacarimagesadmin\/(?P<id>\d+)$/', 'controller' => 'rentacar', 'view' => 'rentacarimagesadmin'),
					array('url' => '/^adminImg\/(?P<id>\d+)\/smjestaj$/', 'controller' => 'smjestaj', 'view' => 'adminImg'),
					array('url' => '/^deleteImg\/(?P<id>\d+)\/smjestaj$/', 'controller' => 'smjestaj', 'view' => 'deleteImg'),
					array('url' => '/^novaImg\/(?P<id>\d+)\/smjestaj$/', 'controller' => 'smjestaj', 'view' => 'novaImg'),
					
					array('url' => '/^adminImg\/(?P<id>\d+)\/avantura$/', 'controller' => 'avantura', 'view' => 'adminImg'),
					array('url' => '/^deleteImg\/(?P<id>\d+)\/avantura$/', 'controller' => 'avantura', 'view' => 'deleteImg'),
					array('url' => '/^novaImg\/(?P<id>\d+)\/avantura$/', 'controller' => 'avantura', 'view' => 'novaImg'),
					
					array('url' => '/^adminImg\/(?P<id>\d+)\/kultura$/', 'controller' => 'kultura', 'view' => 'adminImg'),
					array('url' => '/^deleteImg\/(?P<id>\d+)\/kultura$/', 'controller' => 'kultura', 'view' => 'deleteImg'),
					array('url' => '/^novaImg\/(?P<id>\d+)\/kultura$/', 'controller' => 'kultura', 'view' => 'novaImg'),
					
					array('url' => '/^adminImg\/(?P<id>\d+)\/kombina$/', 'controller' => 'kombinacija', 'view' => 'adminImg'),
					array('url' => '/^deleteImg\/(?P<id>\d+)\/kombina$/', 'controller' => 'kombinacija', 'view' => 'deleteImg'),
					array('url' => '/^novaImg\/(?P<id>\d+)\/kombina$/', 'controller' => 'kombinacija', 'view' => 'novaImg'),
					
					array('url' => '/^adminImg\/(?P<id>\d+)\/citybreaks$/', 'controller' => 'citybreaks', 'view' => 'adminImg'),
					array('url' => '/^deleteImg\/(?P<id>\d+)\/citybreaks$/', 'controller' => 'citybreaks', 'view' => 'deleteImg'),
					array('url' => '/^novaImg\/(?P<id>\d+)\/citybreaks$/', 'controller' => 'citybreaks', 'view' => 'novaImg'),
					
					array('url' => '/^adminImg\/(?P<id>\d+)\/rentacar$/', 'controller' => 'rentacar', 'view' => 'adminImg'),
					array('url' => '/^deleteImg\/(?P<id>\d+)\/rentacar$/', 'controller' => 'rentacar', 'view' => 'deleteImg'),
					array('url' => '/^novaImg\/(?P<id>\d+)\/rentacar$/', 'controller' => 'rentacar', 'view' => 'novaImg'),
					
					array('url' => '/^getUslugesmjestaj$/', 'controller' => 'smjestaj', 'view' => 'getUslugesmjestaj'),
					array('url' => '/^getUslugeavantura$/', 'controller' => 'avantura', 'view' => 'getUslugeavantura'),
					array('url' => '/^getUslugecity$/', 'controller' => 'citybreaks', 'view' => 'getUslugecitybreaks'),
					array('url' => '/^getUslugekombinacija$/', 'controller' => 'kombinacija', 'view' => 'getUslugekombinacija'),
					array('url' => '/^getUslugekultura$/', 'controller' => 'kultura', 'view' => 'getUslugekultura'),
					array('url' => '/^getUslugerentacar$/', 'controller' => 'rentacar', 'view' => 'getUslugerentacar'),
					
					
					array('url' => '/^korisnik\/(?P<id>\d+)\/edit$/', 'controller' => 'korisnik', 'view' => 'edit')			
					
					
			   );

	// Database connection params
	define('HOST', 'localhost');
	define('USERNAME', 'bosniaad');
	define('PASSWORD', 'IS1aC4rzoCzO');
	define('DATABASE', 'bosniaad_db');
	
	//define('HOST', 'bosnia-adventure.ba');
	//define('USERNAME', 'bosniaad_admin');
	//define('PASSWORD', 'SSoft1234!');
	//define('DATABASE', 'bosniaad_db');
	
	// The server root
	define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT']);
	
	//Application directory
	//define('APP_ROOT', 'bosnia-adventure');
	
	// MVC paths
	//define('MODEL_PATH', SERVER_ROOT.APP_ROOT.'/Models/');
	//define('VIEW_PATH', SERVER_ROOT.APP_ROOT.'/Views/');
	//define('CONTROLLER_PATH', SERVER_ROOT.APP_ROOT.'/Controllers/');
	//define('SHARED_PATH', SERVER_ROOT.APP_ROOT.'/Shared/');
	//define('CSS_PATH', SERVER_ROOT.APP_ROOT.'/Content/Css/');
	//define('SCRIPT_PATH', SERVER_ROOT.APP_ROOT.'/Script/');
	
	
	
	define('APP_ROOT', 'http://bosnia-adventure.ba/');
	
	// MVC paths
	define('MODEL_PATH', SERVER_ROOT.'/Models/');
	define('VIEW_PATH', SERVER_ROOT.'/Views/');
	define('CONTROLLER_PATH', SERVER_ROOT.'/Controllers/');
	define('SHARED_PATH', SERVER_ROOT.'/Shared/');
	define('CSS_PATH', SERVER_ROOT.'/Content/Css/');
	define('SCRIPT_PATH', SERVER_ROOT.'/Script/');
	
	
	require_once('Shared/database.php');


?>