<?php

	require_once(MODEL_PATH.'index.php');

	$index = new Index(); 
	
	$ponudaId1 = $index->GetPosebnaPonudaId(1);
	$row1 = $index->GetPosebnaAvantura($ponudaId1);
	
	$ponudaId2 = $index->GetPosebnaPonudaId(2);
	$row2 = $index->GetPosebnaKultura($ponudaId2);
	
	$avanturaDefault = $index->GetAvantura();
	$kulturaDefault = $index->GetKultura();
	$citibreaksDefault = $index->GetCitibreaks();
	$smjestajDefault = $index->GetSmjestaj();
	$rentacarDefault = $index->GetRentacar();
	$kombinacijaDefault = $index->GetKombinacija();
	$rezervacijeDefault = $index->GetRezervacije();
	
	$sigurnostDefault = $index->GetSigurnost();
	$zahvalnicaDefault = $index->GetZahvalnica();	
	
	$brojPoruka = $index->GetPorukeBroj();
	$brojPrijava = $index->GetPrijaveBroj();
	
	
	
?>