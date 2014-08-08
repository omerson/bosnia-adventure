<?php
//define a maxim size for the uploaded images in Kb
 define ("MAX_SIZE","10000"); 

//This function reads the extension of the file. It is used to determine if the file  is an image by checking the extension.
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }

//This variable is used as a flag. The value is initialized with 0 (meaning no error  found)  
//and it will be changed to 1 if an errro occures.  
//If the error occures the file will not be uploaded.
 $errors=0;

 	//reads the name of the file the user submitted for uploading
 	$image1=$_FILES['slika']['name'][0];
	$image2=$_FILES['slika']['name'][1];
	$image3=$_FILES['slika']['name'][2];
	$image4=$_FILES['slika']['name'][3];
		
 	//if it is not empty
 	if ($image1) 
 	{
 	//get the original name of the file from the clients machine
 		$filename1 = stripslashes($_FILES['slika']['name'][0]);
 	//get the extension of the file in a lower case format
  		$extension = getExtension($filename1);
 		$extension = strtolower($extension);
 	//if it is not a known extension, we will suppose it is an error and will not  upload the file,  
	//otherwise we will do more tests
 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")) 
 		{
		//print error message
 			echo '<h1>Nepoznata vrsta fajla u prvom unosu!</h1>';
 			$errors=1;
 		}
 		else
 		{
//get the size of the image in bytes
 //$_FILES['image']['tmp_name'] is the temporary filename of the file
 //in which the uploaded file was stored on the server
 $size=filesize($_FILES['slika']['tmp_name'][0]);

//compare the size with the maxim size we defined and print error if bigger
if ($size > MAX_SIZE*1024)
{
	echo '<h1>Fajl 1 je prevelik da bi se izvršio upload!</h1>';
	$errors=1;
}

//we will give an unique name, for example the time in unix time format
$image_name1=time().'1.'.$extension;
//the new name will be containing the full path where will be stored (images folder)
$newname1="Content/Images/".$image_name1;
//we verify if the image has been uploaded, and print error instead
//$copied = copy($_FILES['image']['tmp_name'], $newname);

$copied = copy($_FILES['slika']['tmp_name'][0], $newname1);
//echo $_FILES['image']['tmp_name'].'<br/>';
//echo $_FILES['image']['name'];

if (!$copied) 
{
	echo '<h1>Dolo je do greške prilikom uploada slike 1!</h1>';
	$errors=1;
}}}


//slika 2

 	//if it is not empty
 	if ($image2) 
 	{
 	//get the original name of the file from the clients machine
 		$filename2 = stripslashes($_FILES['slika']['name'][1]);
 	//get the extension of the file in a lower case format
  		$extension = getExtension($filename2);
 		$extension = strtolower($extension);
 	//if it is not a known extension, we will suppose it is an error and will not  upload the file,  
	//otherwise we will do more tests
 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")) 
 		{
		//print error message
 			echo '<h1>Nepoznata vrsta fajla u drugom unosu!</h1>';
 			$errors=1;
 		}
 		else
 		{
//get the size of the image in bytes
 //$_FILES['image']['tmp_name'] is the temporary filename of the file
 //in which the uploaded file was stored on the server
 $size=filesize($_FILES['slika']['tmp_name'][1]);

//compare the size with the maxim size we defined and print error if bigger
if ($size > MAX_SIZE*1024)
{
	echo '<h1>Fajl 2 je prevelik da bi se izvršio upload!</h1>';
	$errors=1;
}

//we will give an unique name, for example the time in unix time format
$image_name2=time().'2.'.$extension;
//the new name will be containing the full path where will be stored (images folder)
$newname2="Content/Images/".$image_name2;
//we verify if the image has been uploaded, and print error instead
//$copied = copy($_FILES['image']['tmp_name'], $newname);

$copied = copy($_FILES['slika']['tmp_name'][1], $newname2);
//echo $_FILES['image']['tmp_name'].'<br/>';
//echo $_FILES['image']['name'];

if (!$copied) 
{
	echo '<h1>Dolo je do greške prilikom uploada slike 2!</h1>';
	$errors=1;
}}}


//slika3

	//if it is not empty
 	if ($image3) 
 	{
 	//get the original name of the file from the clients machine
 		$filename3 = stripslashes($_FILES['slika']['name'][2]);
 	//get the extension of the file in a lower case format
  		$extension = getExtension($filename3);
 		$extension = strtolower($extension);
 	//if it is not a known extension, we will suppose it is an error and will not  upload the file,  
	//otherwise we will do more tests
 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")) 
 		{
		//print error message
 			echo '<h1>Nepoznata vrsta fajla u trecem unosu!</h1>';
 			$errors=1;
 		}
 		else
 		{
//get the size of the image in bytes
 //$_FILES['image']['tmp_name'] is the temporary filename of the file
 //in which the uploaded file was stored on the server
 $size=filesize($_FILES['slika']['tmp_name'][2]);

//compare the size with the maxim size we defined and print error if bigger
if ($size > MAX_SIZE*1024)
{
	echo '<h1>Fajl 3 je prevelik da bi se izvršio upload!</h1>';
	$errors=1;
}

//we will give an unique name, for example the time in unix time format
$image_name3=time().'3.'.$extension;
//the new name will be containing the full path where will be stored (images folder)
$newname3="Content/Images/".$image_name3;
//we verify if the image has been uploaded, and print error instead
//$copied = copy($_FILES['image']['tmp_name'], $newname);

$copied = copy($_FILES['slika']['tmp_name'][2], $newname3);
//echo $_FILES['image']['tmp_name'].'<br/>';
//echo $_FILES['image']['name'];

if (!$copied) 
{
	echo '<h1>Došlo je do greške prilikom uploada slike 3!</h1>';
	$errors=1;
}}}

//slika4

	//if it is not empty
 	if ($image4) 
 	{
 	//get the original name of the file from the clients machine
 		$filename4 = stripslashes($_FILES['slika']['name'][3]);
 	//get the extension of the file in a lower case format
  		$extension = getExtension($filename4);
 		$extension = strtolower($extension);
 	//if it is not a known extension, we will suppose it is an error and will not  upload the file,  
	//otherwise we will do more tests
 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")) 
 		{
		//print error message
 			echo '<h1>Nepoznata vrsta fajla u trecem unosu!</h1>';
 			$errors=1;
 		}
 		else
 		{
//get the size of the image in bytes
 //$_FILES['image']['tmp_name'] is the temporary filename of the file
 //in which the uploaded file was stored on the server
 $size=filesize($_FILES['slika']['tmp_name'][3]);

//compare the size with the maxim size we defined and print error if bigger
if ($size > MAX_SIZE*1024)
{
	echo '<h1>Fajl 4 je prevelik da bi se izvršio upload!</h1>';
	$errors=1;
}

//we will give an unique name, for example the time in unix time format
$image_name4=time().'4.'.$extension;
//the new name will be containing the full path where will be stored (images folder)
$newname4="Content/Images/".$image_name4;
//we verify if the image has been uploaded, and print error instead
//$copied = copy($_FILES['image']['tmp_name'], $newname);

$copied = copy($_FILES['slika']['tmp_name'][3], $newname4);
//echo $_FILES['image']['tmp_name'].'<br/>';
//echo $_FILES['image']['name'];

if (!$copied) 
{
	echo '<h1>Došlo je do greške prilikom uploada slike 3!</h1>';
	$errors=1;
}}}

 ?>