<?php 

	$link=0;
	$db_host="localhost";
	$db_user="root";
	$db_contrasena="9601";
	$db= "pruebas_jader"; 
	$link = mysqli_connect($db_host,$db_user,$db_contrasena,$db);

	if (!$link)
	{
	  echo "Error conectando a la base de datos.";
	}
	
	if (!mysqli_select_db($link, $db))
	{
	  echo "Error seleccionando la base de datos. ";
	}
 