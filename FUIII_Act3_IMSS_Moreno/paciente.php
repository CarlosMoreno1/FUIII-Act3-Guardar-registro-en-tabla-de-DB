<?php 

include("con_db.php");

if (isset($_POST['paciente'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['numero_seguro_social']) >= 1 && strlen($_POST['tipo_de_cita']) >= 1) {
	    $nombre = trim($_POST['nombre']);
	    $email = trim($_POST['email']);
	    $numero_seguro_social = trim($_POST['numero_seguro_social']);
		$tipo_de_cita = trim($_POST['tipo_de_cita']);
	    $consulta = "INSERT INTO paciente(nombre, email, numero_seguro_social, tipo_de_cita) VALUES ('$nombre','$email','$numero_seguro_social','$tipo_de_cita')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>