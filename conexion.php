<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "ayudantia";

$con = mysqli_connect($server, $user, $pass, $db);

if (!$con) {
    die("Error en la conexion: " . mysqli_connect_error());
}


	$contrasena = '';
	$usuario = 'root';
	$nombrebd= 'nota';

	try {
		$bd = new PDO(
			'mysql:host=localhost;
			dbname='.$db,
			$user,
			$pass,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

