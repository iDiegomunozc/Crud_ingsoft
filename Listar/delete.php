<?php
	include '../conexion.php';
	$codigo = $_GET['id'];
	


    $sentencia = $bd->prepare("DELETE FROM imagenes WHERE id= ?;");

$resultado = $sentencia->execute([$codigo]);
    
    if ($resultado === TRUE) {
		header('Location: read.php');
	}else{
		echo "Error";
	}
?>