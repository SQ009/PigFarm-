<?php
	$servidor="localhost";
	$usuario="root";
	$password="24102019";
	$baseDeDatos="pigfarm";

	$db= mysqli_connect($servidor,$usuario,$password,$baseDeDatos);

	mysqli_query($db,"SET NAMES 'utf8'");

    if(!isset($_SESSION)){
        session_start();
    }

?>