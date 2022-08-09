<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>TECTREINAMENTOS</title>		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">	
	</head>
	<body>
		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/logo.png" alt="Logo"/>
	        </div>	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php">Voltar para Página Inicial</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

	    <div class="container">	    	
	    	<br /><br />
	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<?php
						require_once('conexao.php');

						$usuario = $_POST['usuario'];
						$email = $_POST['email'];
						$senha = $_POST['senha'];

						$bancoDados = new db();
						$link = $bancoDados->conecta_mysql();

						$sql = "INSERT INTO usuarios (usuario, email, senha) VALUES('$usuario', '$email', '$senha')";
						mysqli_query($link, $sql);

						echo "<h2>Obrigado pelo seu cadastro!</h2>";						
					?>	
				</div>
				<div class="clearfix"></div>
			</div>	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
	</body>
</html>