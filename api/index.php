<?php
session_start();
	include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>IH! Comprei</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="Pesquisar">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">
						
						<?php


	echo "Olá, <b>".$_SESSION['Nome'].", Bem vindo ao sistema </b>";

?>
<b> <a href="logout.php"> | Sair</a></b>


							<li><a href="#">Minha Conta</a></li>
							<li><a href="cart.php">Carrinho</a></li>					
							<li><a href="register.php">Logar</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images/logoNOVA.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a>Feminino</a>					
								<ul>
									<li><a href="./products.php">Blusas</a></li>									
									<li><a href="./products.php">Calças</a></li>									
								</ul>
							</li>															
							
							<li><a>Masculino</a>
								<ul>								
									<li><a href="./products.php">Camisetas</a></li>
									<li><a href="./products.php">Calças</a></li>									
								</ul>
							</li>
							<li><a>Infantil</a>
							<ul>							
									<li><a href="./products.php">Camisetas</a></li>
									<li><a href="./products.php">Calças</a></li>									
								</ul>
							</li>
							<li><a href="./contact.php">Fale Conosco</a>
							</li>

						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/1.jpg" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/2.jpg" alt="" />
							<div class="intro">
								<h1>Temporada de inverno</h1>
								<p><span>até 50% off</span></p>
								<p><span>Em itens selecionados online e nas lojas</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			<section class="header_text">
			A melhor escolha em varejo de roupas online.

				<br/> Selecionou, comprou!
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Lista <strong> Feminina</strong></span></span></span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.php"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Conjunto mini-saia</a><br/>
														<a href="products.php" class="category">Conjuntos</a>
														<p class="price">R$65.25</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.php"><img src="themes/images/ladies/2.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Quis nostrud exerci tation</a><br/>
														<a href="products.php" class="category">Quis nostrud</a>
														<p class="price">$32.50</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/ladies/3.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Know exactly turned</a><br/>
														<a href="products.php" class="category">Quis nostrud</a>
														<p class="price">$14.20</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/ladies/4.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">You think fast</a><br/>
														<a href="products.php" class="category">World once</a>
														<p class="price">$31.45</p>
													</div>
												</li>
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>




						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Lista <strong> Masculina</strong></span></span></span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.php"><img src="themes/images/mens/4.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Camisa Masculina - EveryDay Shorts</a><br/>
														<a href="products.php" class="category">Camisas</a>
														<p class="price">R$75.50</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail1.php"><img src="themes/images/mens/7.jpg" alt="" /></a></p>
														<a href="product_detail1.php" class="title">Camiseta Masculina - Fatal Rules</a><br/>
														<a href="products.php" class="category">Camisas</a>
														<p class="price">R$57.55</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail2.php"><img src="themes/images/mens/10.jpg" alt="" /></a></p>
														<a href="product_detail2.php" class="title">Suéter Masculino - Premium Sheffield</a><br/>
														<a href="products.php" class="category">Suéter</a>
														<p class="price">$55.30</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail3.php"><img src="themes/images/mens/13.jpg" alt="" /></a></p>
														<a href="product_detail3.php" class="title">Regata Masculina - Merino Wool</a><br/>
														<a href="products.php" class="category">Regata</a>
														<p class="price">R$65.60</p>
													</div>
												</li>
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>  <strong>MODERNIDADE</strong></h4>
										<p>Nosso site trás consigo a melhor tecnlogia em compras online.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4> <strong>SEGURANÇA</strong></h4>
										<p>Compre sem medo, aqui a segurança é de ponta!</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4> <strong>SUPORTE</strong></h4>
										<p>Em nosso site, você encontrará o suporte adequeado para que possa realizar suas compras.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Acesso Rápido</h4>
						<ul class="nav">
							<li><a href="./index.php">Inicio</a></li>  
							<li><a href="./about.php">Sobre</a></li>
							<li><a href="./contact.php">Fale Conosco</a></li>
							<li><a href="./cart.php">Carrinho</a></li>
							<li><a href="./register.php">Login</a></li>							
						</ul>					
					</div>
					
					<div class="span5">
						<p class="logo"><img src="themes/images/logoNOVA.png" class="site_logo" alt=""></p>
						<p>Fundada em 2022, com a finalidade de trazer a melhor comodidade aos nossos clientes, a IH!COMPRE! trás consigo o melhor no que se diz em e-commerce e varejos online.</p>
						<br/>
						
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2022 by Michael, Vitor and Maiara.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>