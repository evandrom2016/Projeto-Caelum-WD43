<?php
	$conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
	$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
	$produto = mysqli_fetch_array($dados);
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Checkout Mirror Fashion</title>
		<meta name="viewport" content="width=device-width">
		
		<link rel="stylesheet" href="css/bootstrap-flatly.css">
	</head>
	<body>
		
		<style>
			.form-control:invalid {
				border: 1px solid #cc0000;
			}
			.navbar {
				margin: 0;
			}
			.navbar .glyphicon {
				color: yellow;
			}
			body {
				padding-top: 70px;
			}
		</style>
		
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">
					<!-- <span class="glyphicon glyphicon-home"></span> -->
					<img src="img/logo-rodape.png" alt="Logo Mirror Fashion">
				</a>
				
				<button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
					<span class="glyphicon glyphicon-align-justify"></span>
				</button>
			</div>
			<ul class="nav navbar-nav collapse navbar-collapse">
				<li><a href="sobre.php">
					<span class="glyphicon glyphicon-question-sign"></span>
					Sobre
				</a></li>
				<li><a href="#">
					<span class="glyphicon glyphicon-list-alt"></span>
					Ajuda
				</a></li>
				<li><a href="#">
					<span class="glyphicon glyphicon-bullhorn"></span>
					Perguntas frequentes
				</a></li>
				<li><a href="#">
					<span class="glyphicon glyphicon-phone"></span>
					Entre em contato
				</a></li>
			</ul>
		</nav>
		
		<div class="jumbotron">
			<div class="container">
				<h1>Ótima escolha!</h1>
				<p>Obrigado por comprar na Mirror Fashion!
				Preencha seus dados para efetivar a compra.</p>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-lg-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>Sua compra</h2>
						</div> <!-- fim .panel-heading -->
						<div class="panel-body">
							<img src="img/produtos/foto<?= $produto['id'] ?>-<?= $_GET['cor'] ?>.png" class="img-thumbnail img-responsive hidden-xs">
							<dl>					
								<dt>Produto</dt>
								<dd><?= $produto['nome'] ?></dd>
			
								<dt>Cor</dt>
								<dd><?= $_GET['cor'] ?></dd>
				
								<dt>Tamanho</dt>
								<dd><?= $_GET['tamanho'] ?></dd>
				
								<dt>Preço</dt>
								<dd><?= $produto['preco'] ?></dd>
							</dl>
						</div> <!-- fim .panel-body -->
					</div> <!-- fim .panel -->
				</div>
				<form class="col-sm-8 col-lg-9">
					<div class="row">
						<fieldset class="col-md-6">
							<legend>Dados pessoais</legend>
							
							<div class="form-group">
								<label for="nome">Nome completo</label>
								<input type="text" class="form-control" name="nome" id="nome" autofocus>
							</div>
							
							<div class="form-group">
								<label for="email">Email</label>
								
								<div class="input-group">
									<span class="input-group-addon">@</span>
									<input type="email" class="form-control" name="email" id="email" placeholder="email@exemplo.com">
								</div>
							</div>
							
							<div class="form-group">
								<label for="cpf">CPF</label>
								<input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99" required>
							</div>
							
							<div class="checkbox">
								<label>
									<input type="checkbox" value="sim" name="spam" checked>
									Quero receber span da Mirror Fashion
								</label>
							</div>
						</fieldset>
						
						<fieldset class="col-md-6">
							<legend>Cartão de crédito</legend>
							
							<div class="form-group">
								<label for="numero-cartao">Número - CVV</label>
								<input type="text" class="form-control" name="numero-cartao" id="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
							</div>
							
							<div class="form-group">
								<label for="bandeira-cartao">Bandeira</label>
								<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
									<option value="master">MasterCard</option>
									<option value="visa">VISA</option>
									<option value="amex">American Express</option>
								</select>
							</div>
							
							<div class="form-group">
								<label for="validade-cartao">Validade</label>
								<input type="month" class="form-control" name="validade-cartao" id="validade-cartao">
							</div>
						</fieldset>
					</div>
					
					<button type="submit" class="btn btn-primary btn-lg pull-right">
						<span class="glyphicon glyphicon-thumbs-up"></span>
						Confirmar pedido
					</button>
				</form>
			</div> <!-- fim .row -->
		</div> <!-- fim .container da pagina -->
				
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/checkout.js"></script>
		<script src="js/inputmask-plugin.js"></script>		
		
	</body>
</html>