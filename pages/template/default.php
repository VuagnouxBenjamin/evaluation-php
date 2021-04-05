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
		<img src="views/img/jarditou_logo.jpg" alt="logo jarditou.com" class="" height="50">
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
						<a class="nav-link" href="index.php?p=list">Tableau</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?p=contact">Contact</a>
					</li>
				</ul>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Votre promotion" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Rechercher</button>
				</form>
			</div>
		</div>
	</nav>

	
  <?= $content; ?>

  
	<nav class="navbar navbar-dark bg-dark mt-2 navbar-expand-sm">
		<div class="container-fluid">
			<ul class="navbar-nav me-auto b-2 mb-lg-0">
				<li class="nav-item">
					<a href="#" class="nav-link">mentions légales</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">horaires</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">plan du site</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>