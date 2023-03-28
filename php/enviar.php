<?php 




	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
    $telefono = $_POST['telefono'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['mensaje'];


	if(mail('consultas@j3arquitectura.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>