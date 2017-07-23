<!--
	Este codigo es de mi autoria y/o recopilcacion de otras fuentes.
    Se utilizó como base el siguiente código: http://www.desarrolloweb.com/articulos/969.php
    **********************************  http://codigoweblibre.comli.com/ ***************************************
    **********************************  http://codigoweblibre.wordpress.com/ ***********************************
-->
<?php
	function enviarMail(){
		$cuerpo = '
		<html>
			<head>
				<title></title>
			</head>
			<body>
				<form>
				<h1>Correo de prueba.</h1>
				Correo de prueba, enviado por el cronjob o tarea programada.<br>
				Visita:
				<h2>http://codigoweblibre.wordpress.com/</h2><br>
				<h2>http://codigoweblibre.comli.com/</h2><br>
				<b>Hora y Fecha de Envio:</b> '.date("Y-m-d H:i:s").'
				</form>
			</body>
		</html>
		';
		//para el envío en formato HTML
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		
		//dirección del remitente
		$headers .= "From: codigoweblibre <email_de_quien_envia@gmail.com>\r\n";
		
		//Una Dirección de respuesta, si queremos que sea distinta que la del remitente
		//$headers .= "Reply-To: ejemplo@hotmail.com\r\n";
		
		//Direcciones que recibián copia
		//$headers .= "Cc: ejemplo2@gmail.com\r\n";
		
		//direcciones que recibirán copia oculta
		//$headers .= "Bcc: ejemplo3@yahoo.com\r\n";
			//EMAIL DE QUIEN RECIBEL EL CORREO   ----------ASUNTO-------------CONTENIDO DEL MENSAJE-----TIPO DE ENVIO
		mail("email_de_quien_recibe@gmail.com", "Correo de Prueba",      $cuerpo,               $headers);			
	}
	enviarMail(); //Llamamos a la funcion para que se ejecute
?>