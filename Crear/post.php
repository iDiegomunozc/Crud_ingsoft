<a href="../index.php">Volver</a>
<?php
include("../conexion.php");
$imagen = $_POST['imagen'];

$sentencia = $bd->prepare("INSERT INTO imagenes (url) VALUES (?);");
$resultado = $sentencia->execute([$imagen]);

if ($resultado === TRUE) {
     "Insertado correctamente";
}else{
    echo "Error";
}


?>


