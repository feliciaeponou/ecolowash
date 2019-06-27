<?php 
session_start();

if (!isset($_SESSION['nom'])) {
	echo ' 

<!DOCTYPE html>
<html lang="fr">
<head>
	<title></title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="lavage écologique"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/lightbox.css">
	<!-- gallery light box -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/style1.css" type="text/css" media="all"/>
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body data-spy="scroll" data-target=".fixed-top">
	<!-- header -->
	<header>
		<!-- navbar -->
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="./">
				<span>Ecolo</span>Wash</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto text-center mr-lg-5">
					<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link" href="./">ECOLOWASHAFRICA
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link" href="apropos">ECOLOWASHAFRICA</a>
					</li>
					<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link" href="services">SERVICES</a>
					</li>
					<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link" href="activites">ACTIVITES</a>
					</li>
					<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link" href="connexion">INSCRIPTION/CONNEXION</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact">CONTACT</a>
					</li>
				</ul>
			</div>
		</nav>		<!-- //navbar ends here -->
	</header>
	<!-- //header -->

	<?php 

';
	}
	else {
		echo '


		<!DOCTYPE html>
		<html lang="fr">
		<head>
			<title></title>
			<!-- Meta tag Keywords -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta charset="UTF-8" />
			<meta name="keywords" content="lavage écologique"
			/>
			<script>
				addEventListener("load", function () {
					setTimeout(hideURLbar, 0);
				}, false);
		
				function hideURLbar() {
					window.scrollTo(0, 1);
				}
			</script>
			<!-- //Meta tag Keywords -->
		
			<!-- Custom-Files -->
			<link rel="stylesheet" href="css/bootstrap.css">
			<!-- Bootstrap-Core-CSS -->
			<link rel="stylesheet" href="css/lightbox.css">
			<!-- gallery light box -->
			<link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
			<link rel="stylesheet" href="css/style1.css" type="text/css" media="all"/>
			<!-- Style-CSS -->
			<link rel="stylesheet" href="css/fontawesome-all.css">
			<!-- Font-Awesome-Icons-CSS -->
			<!-- //Custom-Files -->
		
			<!-- Web-Fonts -->
			<link href="http://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
			<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
			<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
			<!-- //Web-Fonts -->
		
		</head>
		
		<body data-spy="scroll" data-target=".fixed-top">
			<!-- header -->
			<header>
				<!-- navbar -->
				<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="./">
						<span>Ecolo</span>Wash</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<i class="fas fa-bars"></i>
					</button>
		
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto text-center mr-lg-5">
							<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
								<a class="nav-link" href="./">ACCEUIL
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
								<a class="nav-link" href="apropos">ECOLOWASHAFRICA</a>
							</li>
							<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
								<a class="nav-link" href="services">SERVICES</a>
							</li>
							<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
								<a class="nav-link" href="activites">ACTIVITES</a>
							</li>
							<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
								<a class="nav-link" href="logout">SE DECONNECTER</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact">CONTACT</a>
							</li>
						</ul>
					</div>
				</nav>		<!-- //navbar ends here -->
			</header>
			<!-- //header -->






		';
	}

?>