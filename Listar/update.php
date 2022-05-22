<?php
include("../conexion.php");
$id = $_GET['id'];


$sentencia = $bd->prepare("SELECT * FROM imagenes WHERE id = ?;");
		$sentencia->execute([$id]);
		$imagenes = $sentencia->fetch(PDO::FETCH_OBJ);
		

        ?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Imagen</title>
	<meta charset="utf-8">
</head>
<body>

	<center>
		<h3>Editar Imagen:</h3>
		<form method="POST" action="updateproceso.php">
			<table>

				<tr>
					<td>DIRECCION: </td>
					<td><input type="text" name="valor" value="<?php echo $imagenes->url; ?>"></td>
				</tr>
			

 
					
					<input type="hidden" name="id2" value="<?php echo $imagenes->id; ?>">
					<td colspan="2"><input type="submit" value="EDITAR"></td>
                    </center>
			</table>
		</form>
        	
</body>
</html>

