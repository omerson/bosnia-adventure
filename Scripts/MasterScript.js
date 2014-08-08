// JavaScript Document

//General variables
var website = 'http://bosnia-adventure.ba/';

$(function() {  

	$('#gallery a').lightBox({
			fixedNavigation:true
	});
	
	$("#kontaktForm").validate();
	$('#rezervacijaform').validate();
	
	/*$('select#prijavaTipUsluge').change(function() {
		var tip = $('select#prijavaTipUsluge').val();									 
		$.ajax(
        {
            type: "POST",
            url: "/Model/getUsluge.php",
            data: "tip=" + username,               
            success: function (result) {
                alert(result);
            },
            error: function () {
                alert("Sorry! We could not receive your feedback at this time.");                
            }
        });
	});*/
	
	if( BrowserDetect.browser != 'Explorer' ){	
		$('div#posebnaPonuda1').corner('bl br');
		$('div#posebnaPonuda2').corner('bl br');
	}
	
	if( BrowserDetect.browser == 'Explorer' && BrowserDetect.version < 7 ){
		window.location = "./notsuported.html";			
	}	

	if( BrowserDetect.browser == 'Explorer' && BrowserDetect.version == 7 ){
		$('div#mainMenuRight').css('padding-top', '10px');		
		$('div#naseUsluge').css('margin-left', '-250px');	
		
		$('div#formaButton').css('margin-top', '-60px');
		$('div#prijavaTable1').css('margin-top', '-30px');
		
		var rightHeight = $('div#rightBorder').height() + 40;
		var leftHeight = $('div#leftBorder').height() + 40;
		
        $('div#rightBorder').height(rightHeight);
		$('div#leftBorder').height(leftHeight);
	}
	
	if(BrowserDetect.browser == 'Firefox'){
		var rightHeight = $('div#rightBorder').height() + 40;
		var leftHeight = $('div#leftBorder').height() + 40;
		
        $('div#rightBorder').height(rightHeight);
		$('div#leftBorder').height(leftHeight);
	}
	
	//Date picker controls
	$('#polazak').datepicker({
			changeMonth: true,
			changeYear: true,
			minDate: -0
		});
	
	// $("#polazak").mask("99-99-9999");
	
	$('#povratak').datepicker({
		changeMonth: true,
		changeYear: true,
		minDate: -0
	});
	
	// $("#povratak").mask("99-99-9999");
	 
	 
	 $('#prijavaPeriodod').datepicker({
		changeMonth: true,
		changeYear: true,
		minDate: -0
	 });
	
	$("#prijavaPeriodod").mask("99-99-9999");
	
	$("#brojPrijatelja").mask("9?9");

	$('#prijavaPerioddo').datepicker({
		changeMonth: true,
		changeYear: true,
		minDate: -0
	});
	
	$("#prijavaPerioddo").mask("99-99-9999");
	 
	$('div.listText').jTruncate();
	$('div#sigurnostText').jTruncate();
	
	$('div#contentText').jTruncate({
		length: 500								 
	});
	
	$('div.podNaslov').jTruncate({
		length: 170								 
	});	
	
	if($('input#prijavaAlergicar').is(":checked"))
		$('tr#opisAlergije').show(500);
		
	if($('input#prijavaIshrana').is(":checked"))
		$('tr#opisIshrana').show(500);
		
	if($('input#prijavaZelje').is(":checked"))
		$('tr#posebneZelje').show(500);
		
	
	$('input#prijavaAlergicar').click(function(){		
		if(this.checked){
			$('tr#opisAlergije').show(500);
		}
		else{
			$('tr#opisAlergije').hide(500);
		}
	});
	
	$('input#prijavaIshrana').click(function(){		
		if(this.checked){
			$('tr#opisIshrana').show(500);
		}
		else{
			$('tr#opisIshrana').hide(500);
		}
	});
	
	$('input#prijavaZelje').click(function(){		
		if(this.checked){
			$('tr#posebneZelje').show(500);
		}
		else{
			$('tr#posebneZelje').hide(500);
		}
	});	
	
	$('div#formaButton').click(function(){
  	    //window.location = website + 'prijavise';
		//document.forms["trazi"].submit();
	});
		
	$('button#btnSearch').click(function(){
	    window.location = website;
		document.forms["search"].submit();			   
	});
	 
	 $('div#logo').click(function(){	 	
 			window.location = website;
	 });	 	
	
	$('span#adminpanelBack').click(function(){	 	
		window.location = website + 'adminarea';
	});
	
	$('span#administracijaAvanturaBack').click(function(){	 	
		window.location = website + 'avanturaalladmin';
	});	
	
	$('span#administracijaKulturaBack').click(function(){	 	
		window.location = website + 'kulturaalladmin';
	});	
	
	$('span#administracijaCitybreaksaBack').click(function(){	 	
		window.location = website + 'citybreaksalladmin';
	});	
	
	$('span#administracijaSmjestajBack').click(function(){	 	
		window.location = website + 'smjestajalladmin';
	});	
	
	$('span#administracijaRentacarBack').click(function(){	 	
		window.location = website + 'rentacaralladmin';
	});	
	
	$('span#administracijaKombinacijaBack').click(function(){	 	
		window.location = website + 'kombinacijaalladmin';
	});	
		
	$('span#administracijLokacijeBack').click(function(){	 	
		window.location = website + 'lokacijealladmin';
	});	
	
	$('div#novaAvantura').click(function(){
		window.location = website + 'avanturainsert';
	});
	
	$('div#novaKultura').click(function(){
		window.location = website + 'kulturainsert';
	});
	
	$('div#novaCitybreaks').click(function(){
		window.location = website + 'citybreaksinsert';
	});
	
	$('div#novaSmjestaj').click(function(){
		window.location = website + 'smjestajinsert';
	});
	
	$('div#novaRentacar').click(function(){
		window.location = website + 'rentacarinsert';
	});
	
	$('div#novaKombinacija').click(function(){
		window.location = website + 'kombinacijainsert';
	});
	
	$('div#novaLokacije').click(function(){
		window.location = website + 'lokacijeinsert';
	});
	 
	$('span#logout').click(function(){				
		document.forms['logout'].submit();		
	});
	 
	 //$('input#login').click(function(){						
	 	//$('div#adminAreaLink').html('<span id="logout">[logout]</span>');
	// });
	 
	 
	$('#prijavaTipUsluge').change(function(){	
		if($('#prijavaTipUsluge').val() != "-Izaberite-"){
			$.get('/getUsluge'+$('#prijavaTipUsluge').val(), function(data) {				
				$('div#ajaxResult').html(data);
			});
		}
	});
 

});

function confirmDeleteAvantura(id){
	var agree = confirm('Da li ste sigurni da želite izbrisati unos?');		
	if(agree){					
		$('a#delete').attr('href', website + 'avanturadel/'+ id);
	}
	else{		
		return false;
	}
}

function confirmDeleteKultura(id){
	var agree = confirm('Da li ste sigurni da želite izbrisati unos?');		
	if(agree){					
		$('a#delete').attr('href', website + 'kulturadel/'+ id);
	}
	else{		
		return false;
	}
}

function confirmDeleteCitybreaks(id){
	var agree = confirm('Da li ste sigurni da želite izbrisati unos?');		
	if(agree){					
		$('a#delete').attr('href', website + 'citybreaksdel/'+ id);
	}
	else{		
		return false;
	}
}

function confirmDeleteSmjestaj(id){
	var agree = confirm('Da li ste sigurni da želite izbrisati unos?');		
	if(agree){					
		$('a#delete').attr('href', website + 'smjestajdel/'+ id);
	}
	else{		
		return false;
	}
}

function confirmDeleteRentacar(id){
	var agree = confirm('Da li ste sigurni da želite izbrisati unos?');		
	if(agree){					
		$('a#delete').attr('href', website + 'rentacardel/'+ id);
	}
	else{		
		return false;
	}
}

function confirmDeleteKombinacija(id){
	var agree = confirm('Da li ste sigurni da želite izbrisati unos?');		
	if(agree){					
		$('a#delete').attr('href', website + 'kombinacijadel/'+ id);
	}
	else{		
		return false;
	}
}


function confirmDeleteLokacije(id){
	var agree = confirm('Da li ste sigurni da želite izbrisati unos?');		
	if(agree){					
		$('a#delete').attr('href', website + 'lokacijedel/'+ id);
	}
	else{		
		return false;
	}
}