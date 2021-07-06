<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Bikcraft</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsivo.css">
		<script>document.documentElement.classList.add("js");</script>
	</head>
	<body>

		<header class="header">>
			<div class="container">
				<a href="index.html" class="grid-4">
					<img src="img/Logo Pets.svg" alt="Bikcraft">
				</a>
			</div>
		</header>

		<section class="introducao">
			<img src="img/Logo Pets.svg" class="grid-7">
			<div class="container">
				<h1 data-anime="400" class="fadeInDown"></h1>
				<blockquote data-anime="800" class="fadeInDown quote-externo">					
					<nav class="grid-8 header_menu">
					<p>“
						Aqui você pode postar fotos do seu pet para alegrar o dia de alguém e também pode ver pets de outras pessoas para alegrar o seu dia”</p>
						<section class="logo-grande">
					</section>
					</nav>
				</blockquote>
			</div>
		</section>
		
				<!-- Fecha Produtos -->

	<section class="login-menu">
		 
			<img src="img/Barra login.svg">
			<form action="valida.php"  method="POST" >
				<label for="login" class="sr-only"></label>
				<input type="text" name="login" id="inputlogin" class="form-control" placeholder="login" required autofocus>
				<br><br><br><br>
						
					<label for="senha" class="sr-only"></label>
					<input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
					<br><br><br><br><br><br><br>
					<button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button>
				</form>
				<p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
				
			</div>
	</section>
	<section class="inscreva-se">
		<a href="cadastro.php" >
		<p>inscreva-se</p>
	</section>
	<footer>
		<div class="footer">
				<div class="grid-4 footer_redes">
				</div>
			</div>
		</div>

		<div class="copy">
			<div class="container">
			</div>
		</div>
	</footer>



	<!-- JavaScript -->
	<script src="./js/simple-anime.js"></script>
  <script src="./js/script.js"></script>
	<!-- JavaScript -->

	</body>
</html>