<?php
include("conexion_db.php");

if(isset($_POST['enviar'])){

	if(strlen($_POST['nombre']) >= 1 &&
	   
 	strlen($_POST['correo']) >= 1) {
		 

		$nombre = trim($_POST['nombre']);
		
		$correo = trim($_POST['correo']);
	
		$fechareg = date("d/m/y");
		$consulta = "INSERT INTO datos_subscripciones(nombre, correo, fecha) VALUES ('$nombre','$correo','$fechareg')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado) {
			
			?>
<h3 class="ok">AHORA RECIBIRAS TODAS LAS NOTIFICACIONES</h3>
<?php
		} else {
			?>
	<h3 class="bad">HA OCURRIDO UN ERROR</h3>
			
			<?php
			}
		} else {
		
              ?>
<h3 class="bad">PORFAVOR COMPLETE LOS CAMPOS</h3>
			<?php
			
		}
		
}
	



?>

