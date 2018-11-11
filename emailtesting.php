<?php
	$to = "mikaelzinhomk@gmail.com";
	$subject = "Titulo do nosso email";
	$message = "Esse email foi enviado";
	$headers = "From: conferenceconcitec@gmail.com";
	echo 
		'<p>Aguarde enquanto enviamos</p>;
		<p>.</p>
		<p>.</p>
		<p>.</p>';
	if (mail($to, $subject, $message, $headers)) {
		echo '<p>com sucesso</p>';
	}else {
		echo "<p>erro no envio</p>";
	}
?>