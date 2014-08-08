<?php

	require_once(MODEL_PATH.'index.php');
	
	$index = new Index(); 
	
	switch($route['view']){			
		case 'onama';
		$row = $index->GetOnama();
		require_once(VIEW_PATH.'index/onama.php');
		break;	
		
		case 'pravilnik';
		$row = $index->GetPravilnik();
		require_once(VIEW_PATH.'index/pravilnik.php');
		break;	
		
		case 'kontakt';
		$row = $index->GetKontakt();
		require_once(VIEW_PATH.'index/kontakt.php');
		break;	
		
		case 'prijavise';	
		require_once(VIEW_PATH.'index/prijavise.php');
		break;	
		
		case 'usluge';	
		$avanturaNumber = $index->GetAvanturaNumber();
		$kulturaNumber = $index->GetKulturaNumber();
		$cityNumber = $index->GetCityNumber();
		$smjestajNumber = $index->GetSmjestajNumber();
		$rentacarNumber = $index->GetRentNumber();
		$kombinacijaNumber = $index->GetKombinacijaNumber();
		$rezervacijeNumber = $index->GetRezervacijeNumber();
		$row = $index->GetForUsluge();
		require_once(VIEW_PATH.'index/usluge.php');
		break;		
						
		case 'onamaadmin';	
		$row = $index->GetOnama();		
		require_once(VIEW_PATH.'admin/index/onamaadmin.php');
		break;	
		
		case 'pravilnikadmin';	
		$row = $index->GetPravilnik();		
		require_once(VIEW_PATH.'admin/index/pravilnikadmin.php');
		break;	
		
		case 'kontaktadmin';	
	    $row = $index->GetKontakt();	
		require_once(VIEW_PATH.'admin/index/kontaktadmin.php');
		break;	
		
		case 'lokacijeadmin';			
		require_once(VIEW_PATH.'admin/lokacije/lokacijeadmin.php');
		break;	
		
		case 'posponuda1admin';	
		$ponudaId = $index->GetPosebnaPonudaId(1);
		$id = $params['id'];
		$numberOfAvantura = $index->GetAvanturaNumber();	
		$perPage = 15;		
		$foundAvantura = $index->GetAllAvantura($id, $perPage);		
		require_once(VIEW_PATH.'admin/index/posebnaponuda1.php');
		break;		
		
		case 'posebnaponuda';	
		$id = $params['id'];
		if($id == 1){
			$ponudaId = $index->GetPosebnaPonudaId($id);
			$row = $index->GetPosebnaAvantura($ponudaId);
			require_once(VIEW_PATH.'avantura/avantura.php');
			break;	
		}
		if($id == 2){
			$ponudaId = $index->GetPosebnaPonudaId($id);
			$row = $index->GetPosebnaKultura($ponudaId);
			require_once(VIEW_PATH.'smjestaj/smjestaj.php');
			break;	
		}		
		
		case 'izdvojenaponuda';
		$ponudaId = $index->GetIzdvojenaPonudaId();	
		$row = $index->GetPosebnaKombinacija($ponudaId);		
		require_once(VIEW_PATH.'kombinacija/kombinacija.php');
		break;	
		
		
		case 'posponuda2admin';		
		$ponudaId = $index->GetPosebnaPonudaId(2);
		$id = $params['id'];
		$numberOfKultura = $index->GetSmjestajNumber();
		$perPage = 15;		
		$foundKultura = $index->GetAllSmjestaj($id, $perPage);			
		require_once(VIEW_PATH.'admin/index/posebnaponuda2.php');
		break;	
		
		case 'izdponudaadmin';			
		$ponudaId = $index->GetIzdvojenaPonudaId();
		$id = $params['id'];
		$numberOfKombinacija = $index->GetKombinacijaNumber();
		$perPage = 15;		
		$foundKombinacija = $index->GetAllKombinacija($id, $perPage);
		require_once(VIEW_PATH.'admin/index/izdvojenaponuda.php');
		break;	
		
		case 'sigurnostadmin';		
		$row = $index->GetSigurnost();	
		require_once(VIEW_PATH.'admin/index/sigurnost.php');
		break;	
		
		case 'zahvalnicaadmin';			
		$row = $index->GetZahvalnica();			
		require_once(VIEW_PATH.'admin/index/zahvalnica.php');
		break;	
		
		case 'zahvalnica';	
		$row = $index->GetZahvalnica();			
		require_once(VIEW_PATH.'index/zahvalnica.php');
		break;	
		
		case 'sigurnost';		
		$row = $index->GetSigurnost();	
		require_once(VIEW_PATH.'index/sigurnost.php');
		break;			
		
		case 'porukeall';		
		$id = $params['id'];		
		$numberOfPoruke = $index->GetPorukeBroj();	
		$perPage = 10;
		$foundPoruke = $index->GetAllPoruke($id, $perPage);	
		require_once(VIEW_PATH.'poruke/porukaAll.php');
		break;	
		
		case 'poruka';		
		$id = $params['id'];	
		$row = $index->GetPoruka($id);
		require_once(VIEW_PATH.'poruke/poruka.php');
		break;			
		
		case 'prijaveall';		
		$id = $params['id'];
		$numberOfPrijave = $index->GetPrijaveBroj();	
		$perPage = 10;
		$foundPrijave = $index->GetAllPrijave($id, $perPage);	
		require_once(VIEW_PATH.'prijave/prijavaAll.php');
		break;	
		
		case 'prijava';		
		$id = $params['id'];
		$row = $index->GetPrijava($id);
		require_once(VIEW_PATH.'prijave/prijava.php');
		break;	
		
	}
	
	
?>