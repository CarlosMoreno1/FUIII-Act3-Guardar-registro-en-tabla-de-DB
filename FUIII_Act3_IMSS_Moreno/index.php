<!DOCTYPE html>
<html>
<head>
	<title>Registrar empleado</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de pacientes</h1>
    	<input type="text" name="nombre" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
		<input type="nss" name="numero_seguro_social" placeholder="Numero de seguro social">
		<input type="cita" name="tipo_de_cita" placeholder="Tipo de cita">
    	<input type="submit" name="paciente">
    </form>
        <?php 
        include("paciente.php");
        ?>
</body>
</html>