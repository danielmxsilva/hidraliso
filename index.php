<?php include("config.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hidraliso</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH?>css/all.min.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH?>css/style.css" rel="stylesheet">

</head>
<body>

	<header>
		<div class="container">
			<img src="<?php echo INCLUDE_PATH?>img/header/logo-mockup.png">
		</div><!--container-->
	</header>

	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			include('pages/page-off.php');
		}
	?>

	<footer>
		<div class="container">
			<div class="flex-box">
				<div class="w33 footer-left">
					<a href="#">AVISO LEGAL</a>
					<a href="#">REEMBOLSO</a>
					<a href="#">POLÍTICA DE PRIVACIDADE</a>
					<a href="#">PRAZO DE ENTREGA</a>
					<a href="#">TERMOS E CONDIÇÕES</a>
				</div><!--w33-->
				<div class="w33 footer-center">
					<img src="<?php echo INCLUDE_PATH?>img/footer/pagamentos.png">
					<img src="<?php echo INCLUDE_PATH?>img/footer/image-removebg.png">
				</div><!--w33-->
				<div class="w33 footer-right">
					<img src="<?php echo INCLUDE_PATH?>img/footer/cruelty_free.png">
					<div class="wraper-center">
						<div class="wraper-left">
							<p>Atendimento</p>
							<p class="p-gray">Segunda a Sexta</p>
						</div><!--wraper-left-->
						<div class="wraper-rigth">
							<img src="<?php echo INCLUDE_PATH?>img/footer/whatsapp.png">
						</div><!--wraper-rigth-->
					</div><!--wraper-center-->
					<p class="p-gray">Atendimento 09:00h às 17:00h</p>
				</div><!--w33-->
			</div><!--flex-box-->
		</div><!--container-->
	</footer>

</body>
</html>