<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Accueil - Jarditou Bootstrap</title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body class="container">
	<header class="d-none d-lg-flex m-2 justify-content-between align-content-center">
		<img src="pages/img/jarditou_logo.jpg" alt="logo jarditou.com" class="" height="50">
		<p class="fs-4 my-auto mx-5">Tout le jardin</p>
	</header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Jarditou.com</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pages/list.php">Produits</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="contact" aria-disabled="true">Contact</a>
					</li>
				</ul>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Votre promotion" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Rechercher</button>
				</form>
			</div>
		</div>
	</nav>
	<div class="row">
		<img src="pages/img/promotion.jpg" class="img-fluid" alt="promo image">
	</div>

<div class="row m-auto shadow">
		<div class="col-lg-8 col-xs-12 px-4">
			<section>
				<h2 class="mt-4">L'entreprise</h2>
				<p>Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.</p>
				<p>Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.</p>
				<p>Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie</p>
			</section>
			<section>
				<h2>Qualité</h2>
				<p>Nous mettons à votre disposition un service personnalisé, avec 1 seul interlocuteur durant tout votre projet</p>
				<p>Vous serez séduit par notre expertise, nos compétences et notre sérieux.</p>
			</section>
			<section>
				<h2>Devis gratuit</h2>
				<p>Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande d’intervention. Vous souhaitez un devis ? Nous vous le réalisons gratuitement.</p>
			</section>
		</div>
		<div class="col-lg-4 col-xs-12 bg-warning text-center">
			<h2 class="my-4">[Colonne de droite]</h2>
		</div>
	</div>


<?php include 'pages/template/footer.php' ?>

