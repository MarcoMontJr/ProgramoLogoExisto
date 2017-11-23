<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dados</title>
</head>

<body>
<div>
	<?php
    	$nome = isset($_GET["tNome"])?$_GET["tNome"]:"Nome Não Informado";
		$email = isset($_GET["tEmail"])?$_GET["tEmail"]:"E-mail Não Informado";
		$mensagem = isset($_GET["tMsg"])?$_GET["tMsg"]:"Mensagem Não Encontrada";
		
		echo "Mensagem enviada com sucesso, responderemos o mais rápido possível!";	
	
	?>
   <br>
   <a href="javascript:history.go(-1)">Voltar</a>	
   <br>
</div>
</body>
</html>