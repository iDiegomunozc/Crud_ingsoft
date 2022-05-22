
<?php
	include '../conexion.php';
	$id2 = $_POST['id2'];
	$valor = $_POST['valor'];


    $sentencia = $bd->prepare("UPDATE imagenes SET url = ? WHERE id= ?;");

$resultado = $sentencia->execute([$valor,$id2]);
    
    if ($resultado === TRUE) {
		header('Location: read.php');
	}else{
		echo "Error";
	}
?>