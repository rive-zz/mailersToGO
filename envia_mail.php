<?php
	$emisor=$_POST['emisor'];
	$destinatario=$_POST['destinatario'];
	$mensaje=$_POST['mensaje'];

	//Estoy recibiendo el formulario, compongo el cuerpo
	$cuerpo = "<h1>Un mensaje para ti</h1>";
		
	$cuerpo .= "<p>Tu amigo " . $emisor . ", te envia este mensaje.</p>";
	$cuerpo .= "<p>Tu email: " . $destinatario . "</p>";

	$cuerpo = $cuerpo.$mensaje;

	//mando el correo...
	mail($destinatario,"Mensaje de un amigo",$cuerpo,"MIME-Version: 1.0\nContent-type: text/html; charset=UTF-8\nFrom: ".$emisor." < http://www.miweb.com >");
	
	//doy las gracias por el envio
	echo "<div style=\"background-color:green;color:white;padding:4px;text-align:center;\">Gracias por rellenar el formulario. Se ha enviado correctamente. Enviale a otros contactos</div>";
?>