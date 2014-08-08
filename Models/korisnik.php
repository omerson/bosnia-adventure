<?php

require_once(SHARED_PATH.'database.php');

class Korisnik
{
	public $ime = '';
	public $prezime = '';	
	public $email = '';
	public $sifra = '';
	public $telefon = '';
	public $adresa = '';
	public $grad = '';
	public $datum = '';
	public $datumRodjenja = '';
	public $spol = '';
	public $tip = '';
	
	public function saveKorisnik($params)
	{
	  $connection = db_connect();
						  
	  $query = 'INSERT INTO korisnik (Sifra, Ime, Prezime, Datum, Email, Telefon, DatumRodjenja, Spol, Grad, Adresa, Tip)
	            VALUES ("'.mysql_real_escape_string($params['sifra']).'", 
						"'.mysql_real_escape_string($params['ime']).'",
						"'.mysql_real_escape_string($params['prezime']).'", 
						"'.date('d.m.y').'", 
						"'.mysql_real_escape_string($params['email']).'", 
						"'.mysql_real_escape_string($params['telefon']).'", 
						"'.$params['datumRodjenja'].'", 
						 '.'1'.', 
						"'.mysql_real_escape_string($params['grad']).'", 
						"'.mysql_real_escape_string($params['adresa']).'", 
						 '.'1'.')';
			
		executeQuery($query);
	}
	
	public function getKorisnik($id = 0)
	{
		$connection = db_connect();
		
		$query = sprintf("SELECT *FROM korisnik WHERE korisnik.KId = %s",									 
									 mysql_real_escape_string($id)								
									 ); 
		
		$result = executeQuery($query );
		
		if(isEmpty($result))
		{
			return false;
		}
		
		$row = mysql_fetch_array($result);
			
		return $row;
	}
	
	public function updateKorisnik()
	{
	
	}
	
	public function deleteKorisnik()
	{
	
	}	
	
	public function listKorisnik()
	{
	 //result_to_array($result);
	}
}

?>